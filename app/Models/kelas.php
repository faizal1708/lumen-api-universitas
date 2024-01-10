<?php

namespace App\models;
use Illuminate\Database\Eloquent\model;



class kelas extends model
{
    protected $primaryKey = 'IDKelas';
    protected $table = 'kelas';
    protected $fillable = [
        'IDKelas','IDMataKuliah','IDDosen','jadwal','Ruangan'
    ];
    protected $hidden = [];

}