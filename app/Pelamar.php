<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelamar extends Model
{
    protected $table = 'pelamar';
    protected $fillable = [
        'nama_lengkap','nik','no_kk','npwp','pendidikan','email','no_hp','medsos','alamat','cv',
        'created_at','updated_at','created_by','updated_by'
    ];

}
