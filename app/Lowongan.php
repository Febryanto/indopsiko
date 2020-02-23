<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lowongan extends Model
{
    protected $table = 'lowongan';
    protected $fillable = [
        'jabatan','status', 'deskripsi', 'dibuka','ditutup',
        'created_at','updated_at','created_by','updated_by'
    ];

}
