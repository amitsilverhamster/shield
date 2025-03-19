<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @property int $id
 * @property string $sku
 * @property string $name
 * @property string $slug
 * @property bool $is_active
 * @property string|null $meta_title
 * @property string|null $meta_description
 * @property string|null $short_description
 * @property string|null $description
 * @property string|null $3d_image
 * @property array|null $images
 * @property string|null $default_image
 * @property array|null $category_ids
 * @property array|null $price
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
class Product extends Model
{
    protected $fillable = [
        'sku',
        'name',
        'slug',
        'is_active',
        'meta_title',
        'meta_description',
        'short_description',
        'description',
        '3d_image',
        'images',
        'category_ids',
        'price',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'images' => 'array',
        'category_ids' => 'array',
        'price' => 'array',
    ];
    
    /**
     * Get the categories for the product.
     */
    public function categories()
    {
        return ProductCategory::whereIn('id', $this->category_ids ?? []);
    }
    
    /**
     * Get formatted price information
     */
    public function getFormattedPrice()
    {
        if (empty($this->price)) {
            return null;
        }
        
        return $this->price;
    }
    
    /**
     * Get default image path
     */
    public function getDefaultImage()
    {
        // Use the dedicated default_image field if available
        if (!empty($this->default_image)) {
            return $this->default_image;
        }
        
        // Fallback to first image if available
        if (!empty($this->images) && is_array($this->images) && count($this->images) > 0) {
            return $this->images[0];
        }
        
        return null;
    }

    /**
     * Get the commission for the product.
     */
    public function commission()
    {
        return $this->hasOne(Commission::class);
    }
}
