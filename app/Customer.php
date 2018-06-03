<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'vbd_customers';
    protected $fillable = [
        'firstname',
        'lastname',
        'gender',
        'birthday',
        'nationality',
        'email',
        'phone',
        'company_name',
        'job',
        'county',
        'region',
        'city',
        'postal',
        'address'
    ];
}
