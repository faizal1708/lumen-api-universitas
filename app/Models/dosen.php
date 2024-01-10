<?php

namespace App\models;
use Illuminate\Database\Eloquent\model;



class dosen extends model
{
    protected $primaryKey = 'IDDosen';
    protected $table = 'dosen';
    protected $fillable = [
        'IDDosen','NamaDepan','NamaBelakang','Email','Departemen'
    ];
    protected $hidden = [];

}