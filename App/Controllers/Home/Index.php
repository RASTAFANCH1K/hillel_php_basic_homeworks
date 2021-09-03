<?php

namespace App\Controllers\Home;

use App\Controllers\AbstractController;
use App\Models\Index as IndexModel;

class Index extends AbstractController
{
  /**
   * @return void
   */
  public function index():void {
    $model = new IndexModel;

    $data = [
      'id' =>  $model->getId(),
      'title' => $model->getTitle(),
      'paragraph' => $model->getParagraph(),
      'list' => $model->getList(),
      'listItem' => $model->getListItem(0),
    ];

    $this->generateView('home', 'index', $data);
  }
}