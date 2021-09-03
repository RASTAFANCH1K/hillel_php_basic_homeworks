<?php

namespace App\Models;

use App\Models\AbstractModel;

class About extends AbstractModel
{
  /**
   * @var string $table
   */
  protected $table = 'about';

  /**
   * @return int
   */
  public function getId():int
  {
    $id = $this->getFieldVal($this->table, 'id');

    return $id;
  }

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

  /**
   * @return array
   */
  public function getList():array
  {
    $JSON = $this->getFieldVal($this->table, 'list');
    $decodedJSON = json_decode($JSON, true);
    $list = $decodedJSON['list'];
    
    return $list;
  }

  /**
   * @param string $item
   * @return string
   */
  public function getListItem(string $item):string
  {
    $list = $this->getList();
    $listItem = $this->checkKeyExistence($item, $list);

    return $listItem;
  }
}