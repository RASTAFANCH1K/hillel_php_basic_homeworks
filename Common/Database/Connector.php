<?php

namespace Common\Database;

class Connector
{
  /**
   * @var string $dns
   */
  private $dns;

  /**
   * @var string $user
   */
  private $user;

  /**
   * @var string $password
   */
  private $password;

  public function __construct()
  {
    $dirPath = __DIR__;
    $config = require  $dirPath . '/../../config/db.php';

    $this->dns = $config['driver'] . ':dbname=' .
    $config['dbname'] . ';host=' .
    $config['host'] . ':' .
    $config['port'];

    $this->user = $config['user'];
    $this->password = $config['password'];
  }

  public function connect()
  {
    $options = [
      \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
    ];

    $connection = new \PDO($this->dns, $this->user, $this->password, $options);

    return $connection;
  }
}