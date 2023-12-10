<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\Product\ProductRequest;

class ProductUpdateRequest extends ProductRequest
{



    public function rules()
    {
		$this->rules['file'] = ['nullable', ];
		return $this->rules;
	}


}
