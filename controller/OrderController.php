<?php
require_once __DIR__ . '/../model/repositories/OrderRepository.php';

class OrderController
{
    private OrderRepository $orderRepository;

    public function __construct()
    {
        $this->orderRepository = new OrderRepository();
    }

    // Liste des commandes
    public function home()
    {
        $orders = $this->orderRepository->getOrders();
        require_once __DIR__ . '/../view/home.php';
    }

    // Afficher une commande
    public function show(int $id)
    {
        $order = $this->orderRepository->getOrder($id);
        require_once __DIR__ . '/../view/order-view.php';
    }

    // Formulaire de création
    public function create()
    {
        require_once __DIR__ . '/../view/order-create.php';
    }

    // Enregistrer une nouvelle commande
    public function store()
    {
        $order = new Order();
        $order->setTitle($_POST['title']);
        $order->setStatus($_POST['status']);
        $this->orderRepository->create($order);

        header('Location: ?');
 
    }

    // Modifier une commande
    public function edit(int $id)
    {
        $order = $this->orderRepository->getOrder($id);
        require_once __DIR__ . '/../view/order-edit.php';
    }

    // Mettre à jour une commande
    public function update()
    {
        $order = new Order();
        $order->setId($_POST['id']);
        $order->setTitle($_POST['title']);
        $order->setStatus($_POST['status']);

        $this->orderRepository->update($order);

        header('Location: ?');
    
    }

    // Supprimer une commande
    public function delete(int $id)
    {
        $this->orderRepository->delete($id);
        header('Location: ?');
  
    }

    // Gestion des accès interdits
    public function forbidden()
    {
        http_response_code(403);
        require_once __DIR__ . '/../view/404.php';
   
    }
}
?>
