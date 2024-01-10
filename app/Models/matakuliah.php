<?php

namespace App\models;
use Illuminate\Database\Eloquent\model;



class matakuliah extends model
{
    protected $primaryKey = 'IDMataKuliah';
    protected $table = 'matakuliah';
    protected $fillable = [
        'IDMataKuliah','NamaMataKuliah','Departemen','JumlahSks'
    ];
    protected $hidden = [];

}