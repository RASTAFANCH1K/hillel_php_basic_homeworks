<?php

namespace App\Models;

use App\Models\AbstractModel;

class SelectSandbox extends AbstractModel
{
  public function index()
  {
    // $this->dbSelect->setSelection('*');
    // $this->dbSelect->setSelection(['select_sandbox.id', 'select_sandbox.title']);
    // $this->dbSelect->setSelection(['select_sandbox.id' => 'select_sandbox_id']);
    $this->dbSelect->setSelection([
      'select_sandbox.id' => 'select_sandbox_id', 
      'post.id' => 'post_id',
    ]);
    // $this->dbSelect->setSelection('select_sandbox.id as select_sandbox_id');

    $this->dbSelect->setTable('select_sandbox');
    // $this->dbSelect->setTable('select_sandbox, about');

    $this->dbSelect->setJoin([
    'type' => 'INNER',
    'table' => 'post',
    'on' => [
      'select_sandbox.id' => 'post.select_sandbox_id',
      ]
    ]);
    // $this->dbSelect->setJoin('INNER JOIN post ON select_sandbox.id = post.select_sandbox_id');
    
    // $this->dbWhere->setCond('select_sandbox.id = 2');
    // $this->dbWhere->setCond('select_sandbox.id = 2 OR select_sandbox.id = 3');
    // $this->dbWhere->setCond([
    //   'leftCond' => 'select_sandbox.id',
    //   'operator' => '=',
    //   'rightCond' => 2,
    // ]);
    $this->dbWhere->setCond([
      'OR',
      [
        'leftCond' => 'select_sandbox.id',
        'operator' => '=',
        'rightCond' => 2,
      ],
      [
        'leftCond' => 'select_sandbox.id',
        'operator' => '=',
        'rightCond' => 3,
      ],
    ]);


    $this->dbSelect->setLimit(3);
    // $this->dbSelect->setLimit('3');

    $this->dbSelect->setOrderBy('select_sandbox.id', 'ASC');
    // $this->dbSelect->setOrderBy('select_sandbox.id ASC');
    
    $res = $this->fetchSQLArrSandbox();

    return $res;
  }
}