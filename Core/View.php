<?php

namespace Core;

class View
{
  /**
   * @param string $part
   * @param string $name
   * @param array $data
   * @return void
   */
  public static function view(string $part = NULL, string $name, array $data = NULL):void
  {
    require 'Web/' . $part . '/' . $name . '.php';
  }
}