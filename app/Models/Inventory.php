<?php

namespace App\Models;

use App\Models\Product;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Inventory extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'quantity',
        'date',
        'delivery_name',
        'delivery_contact',
        'notes',
        'expense',
        'product_id',
    ];

    public function product()
    {
        $this->belongsTo(Product::class);
    }

    public function getProductNameAttribute()
    {
        $product = Product::find($this->product_id);
        return $product->name;
    }
    public function getProductImageAttribute()
    {
        $product = Product::find($this->product_id);
        return $product->image;
    }
}
