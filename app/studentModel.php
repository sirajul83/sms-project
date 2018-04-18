<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class studentModel extends Model
{
    protected $table='registration';
    protected $fillable=['e_name','b_name','roll','reg','section','session','dob','shift','gender','blood','class','religion','std_phone','f_name','m_name','g_nid','address','image'];
}
