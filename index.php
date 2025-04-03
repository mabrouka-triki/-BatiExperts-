<?php

require_once __DIR__ . '/lib/database.php';
require_once __DIR__ . '/model/repositories/OrderRepository.php';
require_once __DIR__ . '/controller/OrderController.php';

$db = new DatabaseConnection();
$orderController = new OrderController();

$action = $_GET['action'] ?? 'index';
$id = $_GET['id'] ?? null;

switch ($action) {
    case 'view':
        $orderController->show((int) $id);
        break;
    case 'order-create':
        $orderController->create();
        break;
    case 'index':
        $orderController->home();
        break;
    case 'store':
        $orderController->store();
        break;
    case 'edit':
        $orderController->edit((int) $id);
        break;
    case 'update':
        $orderController->update();
        break;
    case 'delete':
        $orderController->delete((int) $id);
        break;
    default:
        $orderController->forbidden();
        break;
}
