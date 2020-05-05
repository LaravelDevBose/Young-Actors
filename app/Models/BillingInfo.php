<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BillingInfo extends Model
{
    protected $table = 'billing_infos';
    protected $primaryKey = 'billing_id';

    protected $fillable = [
        'user_id',
        'country',
        'state',
        'address',
        'city',
        'postal_code',
        'payment_token',
    ];
}
