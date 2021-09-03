<?php

namespace Common\Database;

class Select {
  protected $selection = '*';
  protected $table;
  protected $join;
  protected $condition;
  protected $orderBy;
  protected $limit;

  public function setSelection($selection)
  {
    $this->selection = $selection;

    if (is_array($this->selection)) {
      $str = '';

      foreach ($this->selection as $key => $val) {
        if (!empty($str)) {
          $str .= ',';
        }

        if (is_int($key)) {
          $str .= $val;
        } else if (is_string($key)) {
          $str .= $key . ' as ' . $val;
        }
      }

      $this->selection = $str;
    } elseif (is_string($this->selection)) {
      $this->selection;
    }

    // throw new Exception('selection not found!');
  }

  public function setTable($table)
  {
    $this->table = $table;

    if (is_array($this->table)) {
      $str = '';

      foreach ($this->table as $key => $val) {
        if (!empty($str)) {
          $str .= ',';
        }

        if (is_int($key)) {
          $str .= $val;
        } else if (is_string($key)) {
          $str .= $val . ' as ' . $key;
        }
      }

      $this->table = $str;
    } else if (is_string($this->table)) {
      $this->table;
    }

    // throw new Exception('table not found!');
  }

  public function setJoin($join = NULL)
  {
    $str = '';
    $args = func_get_args();

    $this->join = $join;

    if (is_array($this->join)) {
      $type = $this->join['type'];
      $table = $this->join['table'];
      $on = $this->join['on'];
      $onStr = '';

      foreach ($on as $key => $val) {
        $onStr .= $key . ' = ' .$val;
      }

      $this->join = $type . ' JOIN ' . $table . ' ON ' . $onStr;
    } else if (is_string($this->join)) {
      $this->join;
    }

    // throw new Exception('join not found!');
  }
  
  public function setOrderBy($orderBy = NULL)
  {
    $str = '';
    $args = func_get_args();
    $argsNum = count($args);

    if ($argsNum > 1) {
      $str .= $args[0] . ' ' . $args[1];

      $this->orderBy = $str;
    } else {
      $this->orderBy = $orderBy;
    }
  }

  public function setLimit($limit = NULL)
  {
    $args = func_get_args();

    $this->limit = $limit;
  }

  public function getSQL($where = NULL)
  {
    $selectPart = "SELECT $this->selection FROM $this->table";

    if ($this->join) {
      $joinPart = $this->join;
    } else {
      $joinPart = '';
    }

    if ($where->cond) {
      $conditionPart = "WHERE $where->cond";
    } else {
      $conditionPart = '';
    }

    if ($this->orderBy) {
      $orderByPart = "ORDER BY $this->orderBy";
    } else {
      $orderByPart = '';
    }

    if ($this->limit) {
      $limitPart = "LIMIT $this->limit";
    } else {
      $limitPart = '';
    }

    $sql = $selectPart . ' ' . $joinPart . ' ' . $conditionPart . ' ' . $orderByPart . ' ' . $limitPart;
    
    print_r($sql);
    
    return $sql;
  }
}