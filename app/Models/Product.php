<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Inventory;
use App\Models\OrderItem;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Product extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'name',
        'image',
        'details',
        'code',
        'price',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function getCategoryNameAttribute()
    {
        $category = Category::find($this->category_id);
        return $category->name;
    }
    public function getInStockAttribute()
    {
        $inventories = Inventory::where('product_id',  $this->id)->get();
        $OrderItems = OrderItem::where('product_id',  $this->id)->get();

        $inventoriesCount = 0;
        foreach ($inventories as $inventory) {
            $inventoriesCount = $inventory->quantity + $inventoriesCount;
        }
        $OrderItemsCount = 0;
        foreach ($OrderItems as $OrderItem) {
            $OrderItemsCount = $OrderItem->quantity + $OrderItemsCount;
        }
        return $inventoriesCount - $OrderItemsCount ;
    }
    public function inventories()
    {
        return $this->hasMany(Inventory::class);
    }
}
