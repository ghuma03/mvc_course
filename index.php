<?php

spl_autoload_register(function(string $class_name){
	require "src/" . str_replace("\\", "/", $class_name) . ".php";
});

$router = new Framework\Router;
	$router->add("/{controller}/{action}");
//	$router->add("/home/index", array("controller" => "home", "action" => "index"));
//	$router->add("/products", array("controller" => "products", "action" => "index"));
//	$router->add("/", array("controller" => "home", "action" => "index"));
	
$params = $router->match(parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH));

if ($params === false) {
	echo "No route matched!";
	die();
}

$controller = "App\Controllers\\".ucwords($params["controller"]);
$action = $params["action"];

$controller_obj = new $controller;
	$controller_obj->$action();