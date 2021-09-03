<?php

namespace App\Models;

use App\Models\AbstractModel;

class Page404 extends AbstractModel
{
  /**
   * @var string $table
   */
  protected $table = 'page404';

  /**
   * @return string
   */
  public function getTitle():string
  {
    $title = $this->getFieldVal($this->table, 'title');

    return $title;
  }

  /**
   * @return string
   */
  public function getParagraph():string
  {
    $paragraph = $this->getFieldVal($this->table, 'paragraph');

    return $paragraph;
  }
}