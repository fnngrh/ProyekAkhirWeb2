<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Tempat_Parkir extends Model
{
    protected $table ='tempat_parkir';

    protected $primarykey = 'tempat_parkir';
    protected $fillable = [
            'id_tempatparkir',
            'waktu_masuk',
            'waktu_keluar'
    ];

    public $timestamps = false;
}
