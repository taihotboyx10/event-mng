<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VisitorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            // 'email' => 'required|email',
            'visitor_type' => 'required|integer',
            'stakeholder_type' => 'integer',
            'business_type' => 'required|integer',
            'family_name' => 'required|string|max:20',
            'given_name' => 'required|string|max:20',
            'family_name_kana' => 'required|string|max:30',
            'given_name_kana' => 'required|string|max:30',
            'company' => 'nullable|string|max:100',
            'company_size_type' => 'integer',
            'department' => 'nullable|string|max:100',
            'department_type' => 'integer',
            'job_position_type' => 'integer',
            'post_code' => 'required|string|max:8',
            'prefecture_id' => 'required|integer',
            'city' => 'required|string|max:30',
            'street_address' => 'nullable|string|max:50',
            'building_info' => 'nullable|string|max:50',
            'phone_number' => 'required|string|max:15',
            'notes' => 'nullable|string|max:200',
            'referral_code' => 'nullable|string|max:3',
            'bee_attendance_type' => 'integer',
            'issues' => 'nullable|string|max:100',
            'companion_adult_count' => 'integer',
            'companion_child_count' => 'integer',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array<string, string>
     */
    public function attributes(): array
    {
        return [
            'visitor_type' => '来場者区分',
            'stakeholder_type' => '関係者区分',
            'business_type' => '業種',
            'family_name' => '氏名（姓）',
            'given_name' => '氏名（名）',
            'family_name_kana' => '氏名フリガナ（姓）',
            'given_name_kana' => '氏名フリガナ（名）',
            'company' => '会社名・団体名等',
            'company_size_type' => '従業員数',
            'department' => '支社・支店名、所属部署',
            'department_type' => '所属部署の種類',
            'job_position_type' => '役職',
            'post_code' => '郵便番号',
            'prefecture_id' => '都道府県',
            'city' => '市区町村',
            'street_address' => '丁目番地',
            'building_info' => '建物名・階名',
            'phone_number' => '連絡先電話番号',
            'notes' => '備考',
            'referral_code' => '紹介支店番号',
            'bee_attendance_type' => 'BLUE ECONOMY EXPO出欠',
            'issues' => '抱えている課題',
            'companion_adult_count' => 'お連れの方（大人）',
            'companion_child_count' => 'お連れの方（子供）',
        ];
    }
}
