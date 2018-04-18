<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class markModel extends Model
{
    protected $table='mark';
    protected $fillable=['std_id','sub_id','exam_id','year','mark'];

}
