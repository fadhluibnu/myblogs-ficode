<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
                'author' => 'required',
                'title' => 'required',
                'meta_desc' => 'required',
                'slug' => 'required|unique:posts,slug',
                'tag' => 'required',
                'id_playlist' => 'sometimes|required',
                'id_category' => 'sometimes|required',
                'image_cover' => 'required',
                'body' => 'required',
                'views' => 'sometimes|required',
            ];
        } else {
            return [
                'author' => 'sometimes|required',
                'title' => 'sometimes|required',
                'meta_desc' => 'sometimes|required',
                'slug' => 'sometimes|required|unique:posts,slug',
                'tag' => 'sometimes|required',
                'id_playlist' => 'sometimes|required',
                'id_category' => 'sometimes|required',
                'image_cover' => 'sometimes|required',
                'body' => 'sometimes|required',
                'views' => 'sometimes|required',
            ];
        }
    }
    public function messages()
    {
        return [
            'required' => ':attribute harus di isi',
            'unique' => ':attribute tidak valid',
        ];
    }
}
