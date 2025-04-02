<?php

require_once __DIR__ . '/lib/database.php';
require_once __DIR__ . '/models/ClientRepository.php';
require_once __DIR__ . '/models/OrderRepository.php';

$db = new DatabaseConnection;

$task = $db->getConnection()->query('SELECT * FROM Clients, Orders')->fetchAll();
