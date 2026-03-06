<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Visitor extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'visitor_type',
        'steakholder_type',
        'business_type',
        'family_name',
        'given_name',
        'family_name_kana',
        'given_name_kana',
        'company',
        'company_size_type',
        'department',
        'department_type',
        'job_position_type',
        'post_code',
        'prefecture_id',
        'city',
        'street_address',
        'building_info',
        'phone_number',
        'notes',
        'referral_code',
        'bee_attendance_type',
        'issues',
        'companition_adult_count',
        'companition_child_count',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
