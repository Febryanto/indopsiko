<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proper extends Model
{
    protected $table = 'proper';
    protected $fillable = [
        'nama_perusahaan','motto', 'logo', 'website','email','telp','alamat','foto','deskripsi',
        'created_at','updated_at','created_by','updated_by'
    ];
}
