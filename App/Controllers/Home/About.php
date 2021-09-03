<?php

namespace App\Controllers\Home;

use App\Controllers\AbstractController;
use App\Models\About as AboutModel;

class About extends AbstractController
{
  /**
   * @var string $className
   */
  protected $className = 'About';

  /**
   * @return void
   */
  public function index():void {
    $model = new AboutModel;

    $data = [
      'id' =>  $model->getId(),
      'title' => $model->getTitle(),
      'paragraph' => $model->getParagraph(),
      'list' => $model->getList(),
      'listItem' => $model->getListItem(0),
    ];

    $this->generateView('home', 'about', $data);
  }

  /**
   * @return void
   */
  public function hi():void {
    echo $this->className . ' says "Hi"' . '<br>';
  }

  /**
   * @return void
   */
  public function bye():void {
    echo $this->className . ' says "Bye"' . '<br>';
  }
}