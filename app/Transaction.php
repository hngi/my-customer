<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $guarded = [
        'ts_ref_id', 'customer_ref_code', 'user_ref_id', 'store_ref_id'
    ];

    // Create relationship with a user
    public function user() {
        return $this->belongsTo('App\User');
    }

    // Create relationship with a customer
    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }

    // Create relationship with a store
    public function store()
    {
        return $this->belongsTo('App\Store');
    }
}
