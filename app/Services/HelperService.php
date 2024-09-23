<?php
namespace App\Services;

class HelperService
{
  public static function active_class($path, $active = 'active') {
    return call_user_func_array('Request::is', (array)$path) ? $active : '';
  }
  
  public static function is_active_route($path) {
    return call_user_func_array('Request::is', (array)$path) ? 'true' : 'false';
  }
  
  public static function show_class($path) {
    return call_user_func_array('Request::is', (array)$path) ? 'show' : '';
  }
}