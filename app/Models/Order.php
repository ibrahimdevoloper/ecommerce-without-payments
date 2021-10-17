<?php

namespace App\Models;

use App\Models\User;
use App\Models\OrderItem;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Order extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
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
        return $this->belongsTo(User::class);
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItems::class);
    }

    public function getUserNameAttribute()
    {
        $user = User::find($this->user_id);
        return $user->name;
    }
    public function getProductQuantityAttribute()
    {
        $orderItems = OrderItem::where('order_id',$this->id)->count();
        return $orderItems;
    }
}
