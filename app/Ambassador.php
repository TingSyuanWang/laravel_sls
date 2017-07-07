<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ambassador extends Model
{
    //
    protected $fillable = [
        'uuid',
        'ambassadorDate',
        'serviceContent',
        'serviceLocation',
        'reserveCount',
        'categoryName',
        'name',
        'gender',
        'phoneNumber',
        'email',
        'contactTime',
        'message',
        'created_at',
        'updated_at'
    ];
}
