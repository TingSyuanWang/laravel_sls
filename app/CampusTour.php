<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CampusTour extends Model
{
    protected $fillable = [
        'campustourdate',
        'category',
        'categoryName',
        'reserveCount',
        'name',
        'gender',
        'phoneNumber',
        'email',
        'created_at',
        'updated_at'
    ];
    //
}
