<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    /**
     * Table name.
     *
     * @var string
     */
    protected $table = 'register';

    protected $fillable = [
        'name',
        'email',
        'admission_no',
        'mobile',
        'year'
    ];
}
