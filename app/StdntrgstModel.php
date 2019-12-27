<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StdntrgstModel extends Model
{
    protected $table = "student_register";
    protected $fillable = [
        'reg_id',
        'name',
        'abridged_name',
        'abridged_name',
        'call_name',
        'first_name',
        'last_name',
        'gender',
        'dob',
        'nationality',
        'religion_id',
        'academic_grade_id',
        'academic_session_id',
        'previous_school_name',
        'image',
        'mobile_phone',
        'email',
        'facebook',
        'linkedin',
        'family_id',
        'status_id',
        'sibling_no',
        'active_sibling_no',
        'card_code',
        'created',
        'register_by',
        'modified',
        'modified_by',
    ];
}