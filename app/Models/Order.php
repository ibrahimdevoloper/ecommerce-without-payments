<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Order extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $dates=['deleted_at'];

    protected $fillable=[
        'total_price',
        'date',
        'customer_notes',
        'admin_notes',
        'code',
        'delivery_name',
        'delivery_contact',
        'is_delivered',
        'is_varified',
        'user_id',
      ];

      public function user()
      {
        return $this->belongTo(App\Models\User::class);
      }

      public function orderItems()
      {
        return $this->hasMany(App\Models\OrderItems::class);
      }
}
