<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    // digunakan kalau tidak ingin menggunakan bentuk jamak dari class (custom nama table)
    // override table jamak 'mahasiswas' menjadi 'mahasiswa'
    protected $table = 'mahasiswa';

    //menggunakan kolom tertentu selain 'id' menjari primary key
    // protected $primaryKey = 'mahasiswa_id';
}
