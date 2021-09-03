<?php

namespace App\Controllers\Home;

use App\Controllers\AbstractController;
use App\Models\SelectSandbox as SelectSandboxModel;

class SelectSandbox extends AbstractController
{
  /**
   * @return void
   */
  public function index():void {
    $model = new SelectSandboxModel;

    $data = [
      'index' => $model->index(),
    ];

    $this->generateView('home', 'selectSandbox', $data);
  }
}