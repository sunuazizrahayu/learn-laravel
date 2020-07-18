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

    //proteksi insert Mahasiswa::create([]) harus mengisi $fillable atau $guarded
    // $fillable : digunakan untuk men-setting field mana saja yang boleh diisi
    // $guarded : digunakan untuk men-setting field mana saja yang tidak boleh diisi
    // penggunaan $fillable / $guarded cukup pilih salah satunya saja
    protected $fillable = ['nama','nrp','email','jurusan'];
    // protected $guarded = ['id','created_at','updated_at'];
}
