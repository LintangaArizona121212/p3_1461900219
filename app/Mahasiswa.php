<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $fillable = ['NamaMahasiswa','NBIMahasiswa','angkatanMahasiswa','judulskripsiMahasiswa','pembimbing1','pembimbing2'];
}


