<?php

$segments = explode("/", parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH));

$controller = $segments[1];
$action = $segments[2];

require "src/controllers/$controller.php";

$controller_obj = new $controller;
	$controller_obj->$action();