<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
	use SoftDeletes;
	
	//field mana saja yang boleh diisi
    protected $fillable = ['nama','nrp','email','jurusan'];
}
