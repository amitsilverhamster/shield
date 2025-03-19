<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'fullname',
        'address1',
        'address2',
        'suburb',
        'state',
        'postcode',
        'country_id',
    ];

    /**
     * Get the user that owns the address.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the country associated with the address.
     */
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    /**
     * Get the carts associated with the address.
     */
    public function carts()
    {
        return $this->hasMany(Cart::class);
    }
}
