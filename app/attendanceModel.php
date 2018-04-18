<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class attendanceModel extends Model
{
    protected $table='attendance';
    protected $fillable=['std_id','std_roll','class','section','in_time','out_time','a_date','a_status'];
}
