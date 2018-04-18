<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subjectModel extends Model
{
    protected $table='subject';
    protected $fillable=['sub_name','sub_id','class','full_mark','teacher_id'];
}
