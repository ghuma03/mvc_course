<?php

class Products {
	
	// MÉTODOS PÚBLICOS EM CONTROLLERS SÃO CHAMADOS DE "ACTIONS"
	public function index() {
		
		require "src/models/product.php";

		$products = (new Product)->getData();

		require "view.php";
	}
}