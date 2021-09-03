<?php

namespace App\Controllers;

use Core\View;

abstract class AbstractController
{
  /**
   * @param string $part
   * @param string $name
   * @param array $data
   * @return void
   */
  protected function generateView(string $part = NULL, string $name, array $data = NULL):void
  {
    View::view($part, $name, $data);
  }
}