<?php

namespace App\Controllers;

use App\Controllers\AbstractController;
use App\Models\Page404 as Page404Model;

class Page404 extends AbstractController
{
  public function __construct() {
    $model = new Page404Model;

    $data = [
      'title' => $model->getTitle(),
      'paragraph' => $model->getParagraph(),
    ];

    $this->generateView('', 'page404', $data);
  }
}