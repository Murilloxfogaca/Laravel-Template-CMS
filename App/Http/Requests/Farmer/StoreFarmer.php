<?php

namespace App\Http\Requests\Farmer;

use Illuminate\Foundation\Http\FormRequest;

class StoreFarmer extends FormRequest
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
            'name' => 'required|string|between:2,100',
            'surname' => 'required|string|between:2,100',
            'address' => 'required|string',
            'razao_social' => 'required|string',
            'document' => 'required|string',
        ];
    }
    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Campo nome requerido.',
            'name.string' => 'Campo nome precisa ser texto.',
            'surname.required' => 'Campo sobrenome requerido.',
            'surname.string' => 'Campo sobrenome precisa ser texto.',
            'address.required' => 'Campo endereço requerido.',
            'address.string' => 'Campo endereço precisa ser texto.',
            'razao_social.required' => 'Campo Razão social requerido.',
            'razao_social.string' => 'Campo Razão social precisa ser texto.',
            'document.required' => 'Campo documento requerido.',
            'document.string' => 'Campo documento precisa ser texto.',
        ];
    }
}
