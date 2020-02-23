<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{

    protected $table = 'pengumuman';
    protected $fillable = [
        'foto','judul','subjudul','isi','status',
        'created_at','updated_at','created_by','updated_by'
    ];
}
