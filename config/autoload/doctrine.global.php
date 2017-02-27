<?php
/**
 * File: doctrine.global.php
 * Created by: Luis Alberto Concha Curay.
 * Email: luisconchacuray@gmail.com
 * Language: PHP
 * Date: 27/02/17
 * Time: 12:51
 * Project: lacc_php7
 * Copyright: 2017
 */
$dbParams = [
  'hostname' => 'localhost',
  'port'     => 3306,
  'username' => 'homestead',
  'password' => 'secret',
  'database' => 'lacc_mailmarketing',
];
return [
  'doctrine' => [
    'connection' => [
      'orm_default' => [
        'driverClass' => 'Doctrine\DBAL\Driver\PDOMySql\Driver',
        'params'      => [
          'host'          => $dbParams[ 'hostname' ],
          'port'          => $dbParams[ 'port' ],
          'user'          => $dbParams[ 'username' ],
          'password'      => $dbParams[ 'password' ],
          'dbname'        => $dbParams[ 'database' ],
          'driverOptions' => [
            \PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'",
          ],
        ],
      ],
    ],
    'driver'     => [
      'LaccEM_driver' => [
        'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
        'cache' => 'array',
        'paths' => [
          __DIR__ . '/../../src/LaccEM/Entity',
        ],
      ],
      'orm_default'   => [
        'drivers' => [
          'LaccEM\Entity' => 'LaccEM_driver',
        ],
      ],
    ],
  ],
];