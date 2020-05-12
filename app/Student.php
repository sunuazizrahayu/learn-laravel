<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['nama','nrp','email','jurusan']; //field yang boleh diisi
    // protected $guarded = ['id']; //field yang tidak boleh diisi
}
