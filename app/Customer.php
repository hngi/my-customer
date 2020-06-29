<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    // Create relationship with a transaction
    public function trasaction() {
        return $this->hasMany('App\Transaction');
    }
}
