<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class OrderItem extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $dates=['deleted_at'];

    protected $fillable=[
        'price',
        'quantity',
        'order_id',
        'product_id',
      ];

      public function order()
      {
        return $this->belongTo(App\Models\Order::class);
      }
}
