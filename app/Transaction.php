<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $guarded = [
        'ts_ref_id', 'customer_ref_code', 'user_ref_id', 'store_ref_id'
    ];
}
