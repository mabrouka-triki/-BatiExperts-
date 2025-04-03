<?php
require_once __DIR__ . '/controller/ClientController.php';

$clientcontroller = new ClientController();

$action = $_GET['action'] ?? 'index'; // Si $_GET['action'] est null ou vide, alors on renvoi index. Sinon on renvoi $_GET['action']
$id = $_GET['id'] ?? null;

switch ($action) {
    case 'view':
        $clientcontroller->show($id);
        break;
    case 'create':
        $clientcontroller->create();
        break;
    case 'index':
        $clientcontroller->home();
        break;
    case 'store':
        $clientcontroller->store();
        break;
    case 'edit':
        $clientcontroller->edit($id);
        break;
    case 'update':
        $clientcontroller->update();
        break;
    case 'delete':
        $clientcontroller->delete($id);
        break;
    default:
        $clientcontroller->forbidden();
        break;
}