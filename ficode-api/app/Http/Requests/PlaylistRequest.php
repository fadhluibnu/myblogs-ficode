<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlaylistRequest extends FormRequest
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
                'title' => 'required',
                'slug' => 'required|unique:playlists,slug',
                'image' => 'required',
                'views' => 'sometimes|required',
                'desc' => 'required'
            ];
        } else {
            return [
                'title' => 'sometimes|required',
                'slug' => 'sometimes|required|unique:playlists,slug',
                'image' => 'sometimes|required',
                'views' => 'sometimes|required',
                'desc' => 'sometimes|required'
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
