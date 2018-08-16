<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Order extends Model
{
    protected $table = 'orders';

    protected $fillable = [
        'address',
        'user_id',
        'product_id',
        'created_at',
        'upated_at'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function products()
    {
        return $this->belongsTo('App\Product');
    }

    public function city()
    {
        return $this->belongsTo('App\City');
    }

    public function scopeOrders($query, $search = null)
    {
        return $query->join('users', 'orders.user_id', 'users.id')
                    ->join('products', 'orders.product_id', 'products.id')
                    ->where('users.email', 'like', '%' . $search . '%')
                    ->orWhere('products.name', 'like', '%' . $search . '%')
                    ->select('orders.*', 'users.email as email', 'products.name as name', 'products.thumbnail as thumbnail')
                    ->orderBy('updated_at', 'desc')
                    ->paginate(config('database.paginate'));
    }
}
