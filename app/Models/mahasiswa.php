<?php

namespace App\models;
use Illuminate\Database\Eloquent\model;



class mahasiswa extends model
{
    protected $primaryKey = 'IDMahasiswa';
    protected $table = 'mahasiswa';
    protected $fillable = [
        'IDMahasiswa','NamaDepan','NamaBelakang','TanggalLahir','Email','Telepon'
    ];
    protected $hidden = [];

}