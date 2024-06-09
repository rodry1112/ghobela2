<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProducto extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nombre' => 'required',
            'genero' => 'required',
            'visible' => 'required',
            'temporada' => 'required',
            'imagen' => 'required|image',
            'color' => 'required',
            'talla' => 'required',
            'activo' => 'required',
            'numeroSerie' => 'required'
        ];
    }
}
