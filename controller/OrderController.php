<?php
require_once __DIR__ . '/../model/repositories/OrderRepository.php';

class OrderController
{
    private OrderRepository $orderRepository;

    public function __construct()
    {
        // Création de l'instance du repository
        $this->orderRepository = new OrderRepository();
    }

    // Méthode pour afficher toutes les commandes
    public function home()
    {
        // Récupérer toutes les commandes via le repository
        $orders = $this->orderRepository->getOrders();

        // Affichage des commandes via la vue home.php
        require_once __DIR__ . '/../view/home.php';
    }

    // Méthode pour afficher une commande spécifique par ID
    public function show(int $id)
    {
        $order = $this->orderRepository->getOrder($id);
        
        // Affichage de la commande via la vue view-order.php
        require_once __DIR__ . '/../view/view-order.php';
    }
}
