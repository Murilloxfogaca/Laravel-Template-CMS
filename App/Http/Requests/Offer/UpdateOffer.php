<?php

namespace App\Http\Requests\Offer;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOffer extends FormRequest
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
            // 'name' => 'required|string|between:2,100',
            // 'value' => 'required|decimal:2',
            // 'cost' => 'required|decimal:2',
            // 'unit_of_measurement' => 'required|string',
            // 'type' => 'required|string',
            // 'delivered' => 'required|boolean',
            // 'separator' => 'required|string',
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
            // 'name.required' => 'Campo nome requerido.',
            // 'name.string' => 'Campo nome precisa ser texto.',
            // 'value.required' => 'Campo Valor requerido.',
            // 'value.decimal' => 'Campo Valor precisa ser um número.',
            // 'cost.required' => 'Campo Custo requerido.',
            // 'cost.decimal' => 'Campo Custo precisa ser um número.',
            // 'unit_of_measurement.required' => 'Campo Unidade de Medida requerido.',
            // 'unit_of_measurement.string' => 'Campo Unidade de Medida precisa ser texto.',
            // 'type.required' => 'Campo Tipo requerido.',
            // 'type.string' => 'Campo Tipo precisa ser texto.',
            // 'delivered.required' => 'Campo Entregue requerido.',
            // 'delivered.boolean' => 'Campo Entregue precisa ser verdadeiro ou falso.',
            // 'separator.required' => 'Campo Separador requerido.',
            // 'separator.string' => 'Campo Separador precisa ser texto.',
        ];
    }
}
