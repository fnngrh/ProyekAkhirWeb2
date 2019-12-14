<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table ='karyawan';

    protected $primarykey = 'id_karyawan';
    protected $fillable = [
            'nama',
            'lokasi_pos',
            'jadwal_shift'
    ];

    public $timestamps = false;
}
