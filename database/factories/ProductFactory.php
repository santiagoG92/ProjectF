<?php

namespace Database\Factories;

use App\Models\File;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;


class ProductFactory extends Factory
{
	protected $model= Product::class;

	// public function categoryId($category)
	// {
 	// return $this->state([
	//  'category_id'=> $category->id

 	// ]);

	// }

	 public function definition()
	 {
		 return [
			 'category_id'=>$this ->faker->randomElement([1,2,3,4]),
			 'name' => $this ->faker->sentence(),
			 'price' => $this ->faker->randomFloat(2,10,100),
			 'description' => $this ->faker->paragraph(),
			 'stock' => $this ->faker->randomDigit(),
		 ];
	 }
	 public function configure()
	{
		return $this->afterCreating(function (Product $product) {
			$file = new File(['route' => '/storage/images/products/default.png']);
			$product->file()->save($file);
		});
		
	}
}
