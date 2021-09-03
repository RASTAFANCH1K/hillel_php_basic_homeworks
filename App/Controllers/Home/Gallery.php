<?php

namespace App\Controllers\Home;

use App\Controllers\AbstractController;
use App\Models\Gallery as GalleryModel;

class Gallery extends AbstractController
{
  /**
   * @var string $className
   */
  protected $className = 'Gallery';

  /**
   * @return void
   */
  public function index():void {
    $model = new GalleryModel;

    $data = [
      'id' =>  $model->getId(),
      'title' => $model->getTitle(),
      'paragraph' => $model->getParagraph(),
      'list' => $model->getList(),
      'listItem' => $model->getListItem(0),
    ];

    $this->generateView('home', 'gallery', $data);
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