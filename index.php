<?php

require_once __DIR__ . '/lib/database.php';
require_once __DIR__ . '/model/repositories/OrderRepository.php';

require_once __DIR__ . '/controller/OrderController.php';


$db = new DatabaseConnection;

$orderRepo = new OrderRepository();
// Récupérer toutes les commandes
$orders = $orderRepo->getOrders();





// if (isset($_GET['action']) && $_GET['action'] == 'view' && isset($_GET['id'])) {
//     $order = $orderRepo->getOrder($_GET['id']); // On récupère UNE commande
//     require_once __DIR__ . '/view/order-view.php';
// } else {
//     $orders = $orderRepo->getOrders(); // On récupère toutes les commandes
//     require_once __DIR__ . '/view/home.php';
// }


$db = new DatabaseConnection;
$orderController = new OrderController();

$action = $_GET['action'] ?? 'index';
$id = $_GET['id'] ?? null;

switch ($action) {
    case 'view':
        $orderController->show($id);
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
    case 'order-edit':
        $orderController->edit($id);
        break;
    case 'update':
        $orderController->update();
        break;
    case 'delete':
        $orderController->delete($id);
        break;
    default:
        echo "Action non reconnue.";
        break;
}