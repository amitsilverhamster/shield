<?php

namespace App\Filament\Resources\CommissionResource\Pages;

use App\Filament\Resources\CommissionResource;
use App\Models\Commission;
use App\Models\Product;
use Filament\Actions;
use Filament\Forms;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Collection;

class ListCommissions extends ListRecords
{
    protected static string $resource = CommissionResource::class;
    
    // Add a proper implementation that never returns null
    public function getTableRecordKey($record): string
    {
        // If the record has an ID, use that
        if (isset($record->id)) {
            return (string) $record->id;
        }
        
        // For new records without an ID, use product_id with a prefix
        if (isset($record->product_id)) {
            return 'product_' . $record->product_id;
        }
        
        // Fallback to ensure we always return a string
        return 'record_' . spl_object_hash($record);
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('bulkUpdate')
                ->label('Bulk Update Commissions')
                ->color('primary')
                ->icon('heroicon-o-currency-dollar')
                ->form([
                    Forms\Components\Toggle::make('is_percentage')
                        ->label('Is Percentage Commission')
                        ->helperText('Toggle on for percentage of price, off for fixed amount')
                        ->onIcon('heroicon-m-currency-dollar')
                        ->offIcon('heroicon-m-banknotes')
                        ->default(true),
                    Forms\Components\TextInput::make('value')
                        ->label('Commission Value')
                        ->numeric()
                        ->required(),
                    Forms\Components\Toggle::make('apply_to_all')
                        ->label('Apply to all products')
                        ->helperText('If disabled, only products without commissions will be updated')
                        ->default(false),
                ])
                ->modalWidth('md')
                ->modalHeading('Update Multiple Commissions')
                ->modalDescription('Set commission values for multiple products at once.')
                ->action(function (array $data): void {
                    $data['commission_type'] = $data['is_percentage'] ? 'percentage' : 'fixed';
                    unset($data['is_percentage']);
                    
                    $this->bulkUpdateCommissions($data);
                }),
        ];
    }

    private function bulkUpdateCommissions(array $data): void
    {
        $query = Product::query();
        
        if (!$data['apply_to_all']) {
            $query->whereNotIn('id', Commission::select('product_id'));
        }
        
        $products = $query->get();
        $updatedCount = 0;
        $currentUserId = auth()->id();
        
        foreach ($products as $product) {
            $commission = Commission::firstOrNew(['product_id' => $product->id]);
            $isNew = !$commission->exists;
            
            $commission->value = $data['value'];
            $commission->commission_type = $data['commission_type'];
            $commission->updated_by = $currentUserId;
            
            if ($isNew) {
                $commission->created_by = $currentUserId;
            }
            
            $commission->save();
            $updatedCount++;
        }
        
        Notification::make()
            ->title($updatedCount . ' commissions updated successfully')
            ->success()
            ->send();
    }
    
    protected function getTableRecordsPerPageSelectOptions(): array
    {
        return [25, 50, 100];
    }
}
