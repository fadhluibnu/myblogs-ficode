<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImageRequest extends FormRequest
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
        if ($this->isMethod('POST')) {
            return [
                'url' => 'required',
                'hidden' => 'sometimes|required'
            ];
        }else{
            return [
                'url' => 'sometimes|required',
                'hidden' => 'sometimes|required'
            ];
        }
    }
    public function messages()
    {
        return [
            'required' => ':attribute harus di isi'
        ];
    }
}
