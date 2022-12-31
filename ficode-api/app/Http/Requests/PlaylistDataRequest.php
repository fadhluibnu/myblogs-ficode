<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlaylistDataRequest extends FormRequest
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
                'id_playlist' => 'required',
                'id_post' => 'required',
                'playlist_order' => 'required'
            ];
        } else {
            return [
                'id_playlist' => 'sometimes|required',
                'id_post' => 'sometimes|required',
                'playlist_order' => 'sometimes|required'
            ];
        }
    }
    public function messages()
    {
        return [
            'required' => ':attribute harus di isi',
        ];
    }
}
