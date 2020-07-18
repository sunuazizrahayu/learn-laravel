<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
	//field mana saja yang boleh diisi
    protected $fillable = ['nama','nrp','email','jurusan'];
}
