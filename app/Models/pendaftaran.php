<?php

namespace App\models;
use Illuminate\Database\Eloquent\model;



class pendaftaran extends model
{
    protected $primaryKey = 'IDPendaftaran';
    protected $table = 'pendaftaran';
    protected $fillable = [
        'IDPendaftaran','IDMahasiswa','IDKelas','Nilai'
    ];
    protected $hidden = [];

}