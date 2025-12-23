<?php

class Controller {
	
	// MÉTODOS PÚBLICOS EM CONTROLLERS SÃO CHAMADOS DE "ACTIONS"
	public function index() {
		
		require "model.php";

		$products = (new Model)->getData();

		require "view.php";
	}
}