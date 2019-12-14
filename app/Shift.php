<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    protected $table ='shift';

    protected $primarykey = 'id_shift';
    protected $fillable = [
            'hari',
            'jam'
    ];

    public $timestamps = false;
}
