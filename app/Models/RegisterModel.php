<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegisterModel extends Model
{
    //
    protected $table ='register_form';

    protected $fillable = [
        'name', 'en_name', 'gender', 'national', 'id_number','dob','p_village','p_commune','p_district','p_city','c_village','c_commune','c_district','c_city','phone_number','fb_id','edu_level','grade','from_school','dir_school_name','dir_school_gender','dir_school_phone','father_name','mother_position','mother_phone_num','mother_name','father_position','father_phone_num','second_parents_2','second_parents_2_postion','second_parents_2_phone_num','address_parents'

    ];
}
