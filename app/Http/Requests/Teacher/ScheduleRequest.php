<?php

namespace App\Http\Requests\Teacher;

use Illuminate\Foundation\Http\FormRequest;

class ScheduleRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'required',
            'time_start' => 'required',
            'time_end' => 'required',
            'day_schedule' => 'required',
            'grade_id' => 'required',
            'link' => 'nullable',
        ];
    }
}
