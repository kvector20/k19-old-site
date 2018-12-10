<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MembersSecondRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|min:2',
            'email' => 'required|email|unique:member_seconds',
            'phone' => 'required|string|max:11',
            'facebook_link' => 'required|url',
            'university' => 'required|string|min:2',
            'faculty' => 'required|string|min:2',
            'department' => 'required|string|min:2',
            'academic_year' => 'required|string|min:2',
            'first' => 'required|exists:workshops,id',
            'second' => 'required|exists:workshops,id',
        ];
    }
}
