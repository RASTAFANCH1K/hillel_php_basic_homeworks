<?php

namespace Core;

class View
{
  public static function view($name, $data = NULL)
  {
    require 'Web/' . $name . '.php';
  }
}