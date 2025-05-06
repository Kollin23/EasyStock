<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'stock',
        'price',
        'category_id',
        'description',
    ];
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function invoices()
    {
        return $this->belongsToMany(Invoice::class, 'invoice_product')
                    ->withPivot('quantity', 'price_at_purchase')
                    ->withTimestamps();
    }
}
