<?php

namespace Framework;

class Router {
	
	private array $routes = array();
	
	public function add(string $path, array $params): void {
		$this->routes[] = array("path" => $path, "params" => $params);
	}
	
	public function match(string $path): array|bool {
		
		$pattern = "#^/(?<controller>[a-z]+)/(?<action>[a-z]+)$#";
		
		if (preg_match($pattern, $path, $matches)) {
			return array_filter($matches, "is_string", ARRAY_FILTER_USE_KEY);
		}
		
//		foreach ($this->routes as $route) {
//			
//			if ($route["path"] === $path) {
//				return $route["params"];
//			}
//		}
		
		return false;
	}
	
}