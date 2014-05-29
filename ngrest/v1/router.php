<?php 
  class Router {
    public function __construct(){
      $path = $this->fullPath();
      $path = explode('.php', $path);
      $this->path = trim($path[1],'/');
      $this->method = $_SERVER['REQUEST_METHOD'];
    }

    public function get($route,$options){
      if ($this->method !== "GET" || $this->path !== $route) {
        return false;
      }
      
      $this->executePath($options['controller'],$options['action']);
    }

    public function post($route,$options){
      if ($this->method !== "POST" || $this->path !== $route) {
        return false;
      }

      $this->executePath($options['controller'],$options['action']);
    }

    public function put($route,$options){
      if ($this->method !== "PUT" || $this->path !== $route) {
        return false;
      }

      $this->executePath($options['controller'],$options['action']);
    }

    public function delete($route,$options){
      if ($this->method !== "DELETE" || $this->path !== $route) {
        return false;
      }

      $this->executePath($options['controller'],$options['action']);
    }

    private function executePath($controller, $action){
      $controller->$action();
    }

    private function fullPath() {
        $s = &$_SERVER;
        $ssl = (!empty($s['HTTPS']) && $s['HTTPS'] == 'on') ? true:false;
        $sp = strtolower($s['SERVER_PROTOCOL']);
        $protocol = substr($sp, 0, strpos($sp, '/')) . (($ssl) ? 's' : '');
        $port = $s['SERVER_PORT'];
        $port = ((!$ssl && $port=='80') || ($ssl && $port=='443')) ? '' : ':'.$port;
        $host = isset($s['HTTP_X_FORWARDED_HOST']) ? $s['HTTP_X_FORWARDED_HOST'] : (isset($s['HTTP_HOST']) ? $s['HTTP_HOST'] : null);
        $host = isset($host) ? $host : $s['SERVER_NAME'] . $port;
        $uri = $protocol . '://' . $host . $s['REQUEST_URI'];
        $segments = explode('?', $uri, 2);
        $url = $segments[0];
        return $url;
    }
  }
?>