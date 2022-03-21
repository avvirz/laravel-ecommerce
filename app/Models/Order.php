<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model {
    use HasFactory;

    protected $fillable = [
        'product_id', 'user_id', 'address_id', 'payment_mode', 'quantity', 'date', 'grand_total'
    ];
    protected $guarded = [];

    public function product() {
        return $this->belongsTo( Product::class );
    }

    public function user() {
        return $this->belongsTo( User::class );
    }

    public function address() {
        return $this->belongsTo( Address::class );
    }
}
