<?php
namespace App\Core;

use App\Core\Request;

class Route
{
  public static function get(string $url, string $handler)
  {
	if ($url == Request::path()) {
      $splitHandler = explode('@', $handler);
      $class = '\App\Controller\\'.$splitHandler[0];
      $method = $splitHandler[1];

      if (class_exists($class)) {
        if (method_exists($class, $method)) {
          call_user_func_array([$class, $method]);
        } else {
          return 'not method';
        }
      } else {
        return 'not class';
      }
    } else {
      return 'not url';
    }
  }

  public static function view($url, $view)
  {
    if (Request::path() == $url) {
		View::make($view);
    }
  }
}