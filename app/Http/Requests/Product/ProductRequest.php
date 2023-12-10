<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{

protected $rules= [
	'name' => ['required', 'string'],
	'price' => ['required', 'numeric'],
	'description' => ['required', 'string'],
	'stock' => ['required', 'numeric'],
	'category_id' => ['required', 'exists:categories,id'],
	'file' => ['image'],
];

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return $this->rules;
	}


		public function messages()
	{
		return [
			'name.required' => 'El nombre es requerido.',
			'name.string' => 'El nombre debe de ser valido.',
			'description.required' => 'La descripcion es requerida.',
			'description.string' => 'La descripcion debe de ser valida.',
			'stock.required' => 'el stock es requerido.',
			'stock.numeric' => 'el stock debe de ser un numero valido.',

			'category_id.required' => 'La categoria es requerida.',
			'category_id.exists' => 'La categoria no existe.',

			'file.required' => 'La imagen es requerida.',
			'file.image' => 'el archivo debe ser una imagen validaaa.',
		];

    }
}
