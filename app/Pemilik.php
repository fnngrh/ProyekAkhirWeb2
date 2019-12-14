<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemilik extends Model
{
    protected $table ='pemilik';

    protected $primarykey = 'id_pemilik';
    protected $fillable = [
            'nama',
            'no_polisi',
            'alamat'
    ];

    public $timestamps = false;
}
