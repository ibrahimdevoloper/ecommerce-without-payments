<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Product extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $dates=['deleted_at'];

    protected $fillable=[
        'name',
        'image',
        'details',
        'code',
        'price',
        'category_id',
      ];

      public function category()
      {
        return $this->belongTo(App\Models\Category::class);
      }

      public function inventories()
      {
        return $this->hasMany(App\Models\Inventory::class);
      }

    
}
