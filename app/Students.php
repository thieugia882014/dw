<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $table="students";
    public $fillable=["student_name","student_email","student_telephone","Feedback"];
}
