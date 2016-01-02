<?php

function class_autoload($class_name) {
  $file = __DIR__.'/core/'.$class_name.'.php';
  if( file_exists($file) == false )
    return false;
  require_once ($file);
}

spl_autoload_register('class_autoload');

Route::start();