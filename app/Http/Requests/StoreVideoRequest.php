<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVideoRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title'=>['required'],
            'description'=>['required'],
            'video'=>['required','file','mimes:mp4'],
            'thumbnail'=>['required','file','mimes:jpg,png'],
            'slug'=>['required','unique:videos'],
        ];
    }
}
