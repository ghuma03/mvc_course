<?php

namespace App\Controllers;

use App\Models\Product;

class Products {
	
	// MÉTODOS PÚBLICOS EM CONTROLLERS SÃO CHAMADOS DE "ACTIONS"
	public function index() {
		
		$products = (new Product)->getData();

		require "views/products_index.php";
	}
	
	public function show() {
		require "views/products_show.php";
	}
}