<?php

namespace App\Http\Requests\Categorias;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class CategoriaEditRequest extends FormRequest
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
            'nombre' => ['required', 'max:30', 'regex:/^[a-z,\s,A-Z,á,Á,é,É,í,Í,ó,Ó,ü,ú,Ú,ñ,Ñ,]+$/', Rule::unique('categorias', 'nombre')->ignore($this->categoria)],
            'imagen' => ['image', 'max:2048'],
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El campo :attribute  categoría es obligatorio.',
            'nombre.unique'   => 'El valor del campo :attribute categoría ya existe',
            'nombre.max'      => 'El campo :attribute categoría debe contener máximo 30 carcteres',
            'nombre.regex'    => 'El formato del campo :attribute categoría no es valido, solo se permiten letras y espacios',
            'imagen.image'    => 'El campo :attribute debe ser una imagen jpg, jpeg, png, gif',
            'imagen.max'      => 'La :attribute debe pesar máximo 2048 MB',
        ];
    }

}
