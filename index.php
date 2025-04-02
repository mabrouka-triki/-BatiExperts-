<?php

require_once __DIR__ . '/lib/database.php';
require_once __DIR__ . '/model/repositories/ClientRepository.php';
require_once __DIR__ . '/model/repositories/OrderRespository.php';

$db = new DatabaseConnection;

$order = $db->getConnection()->query('SELECT * FROM Orders')->fetchAll();
 var_dump($order);