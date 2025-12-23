<?php

$controller = $_GET["controller"];
require "src/controllers/$controller.php";

$action = $_GET["action"];

$controller_obj = new $controller;
	$controller_obj->$action();