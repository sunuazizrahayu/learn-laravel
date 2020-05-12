<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
	use SoftDeletes;
	
    protected $fillable = ['nama','nrp','email','jurusan']; //field yang boleh diisi
    // protected $guarded = ['id']; //field yang tidak boleh diisi
}
