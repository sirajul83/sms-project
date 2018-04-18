<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teacherModel extends Model
{
    protected $table='teacher';
    protected $fillable=['t_name','t_id','gender','blood','dob','religion','t_phone','email','t_nid','image','j_date','t_address'];
}
