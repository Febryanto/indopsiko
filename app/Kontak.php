<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    protected $table = 'kontak';
    protected $fillable = [
        'id_contact','nama', 'email', 'desc',
        'created_at','updated_at','created_by','updated_by'
    ];
}
