<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class DataKaryawanRequest extends FormRequest
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
            'username' => 'required|max:255',
            'password' => 'required|max:255',
            'nama' => 'required|max:255',
            'jenis_kelamin' => 'required|max:255',
            'alamat' => 'required|max:255',
            'no_telpon' => 'required|max:255',
            'tgl_lahir' => 'required|date',
            'instansi' => 'required|max:255',
            'role' => 'required|max:255',
            'nama_mentor' => 'required|max:255'
        ];
    }
}
