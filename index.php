<?php

require "src/router.php";

$router = new Router;
	$router->add("/home/index", array("controller" => "home", "action" => "index"));
	$router->add("/products", array("controller" => "products", "action" => "index"));
	$router->add("/", array("controller" => "home", "action" => "index"));
	
$params = $router->match(parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH));

if ($params === false) {
	echo "No route matched!";
	die();
}

$controller = $params["controller"];
$action = $params["action"];

require "src/controllers/$controller.php";

$controller_obj = new $controller;
	$controller_obj->$action();