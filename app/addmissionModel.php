<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class addmissionModel extends Model
{
    protected $table='addmission';
    protected $fillable=['e_name','b_name','class','year','gender','blood','dob','religion','status','std_phone','pre_school','f_name','m_name','f_occation','m_occation','g_name','g_nid','present_address','parmanent_address','image','quata'];
}
