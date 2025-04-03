<?php

require_once __DIR__ . '/lib/database.php';
require_once __DIR__ . '/model/repositories/OrderRepository.php';

require_once __DIR__ . '/controller/OrderController.php';


$db = new DatabaseConnection;

$orderRepo = new OrderRepository();
// Récupérer toutes les commandes
$orders = $orderRepo->getOrders();






if (isset($_GET['action']) && $_GET['action'] == 'view' && isset($_GET['id'])) {
    $orders = $orderRepo->getOrders($_GET['id']);;
    require_once __DIR__ . '/view/order-view.php';

} else {
    
    $orders = $orderRepo->getOrders();
    require_once __DIR__ . '/view/home.php';    
}