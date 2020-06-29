<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ts_ref_id', 'ref_transaction_type', 'customer_ref_code',
        'amount', 'interest', 'total_amount', 'expected_pay_date',
        'user_ref_id', 'store_ref_id', 
    ];
    /**
     * Get the user that owns the phone.
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'user_ref_id');
    }
}
