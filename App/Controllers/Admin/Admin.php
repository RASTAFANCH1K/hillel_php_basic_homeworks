<?php

namespace App\Controllers\Admin;

use App\Controllers\AbstractController;
use App\Models\Admin as AdminModel;

class Admin extends AbstractController
{
  /**
   * @var string $className
   */
  protected $className = 'Admin';

  /**
   * @return void
   */
  public function index():void {
    $model = new AdminModel;

    $data = [
      'id' =>  $model->getId(),
      'title' => $model->getTitle(),
      'paragraph' => $model->getParagraph(),
      'list' => $model->getList(),
      'listItem' => $model->getListItem(0),
    ];

    $this->generateView('admin', 'admin', $data);
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