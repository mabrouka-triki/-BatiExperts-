<?php
require_once __DIR__ . '/../Order.php';

class OrderRepository
{
    public DatabaseConnection $connection;

    public function __construct()
    {
        $this->connection = new DatabaseConnection();
    }

    // Récupérer toutes les commandes
    public function getOrders(): array
    {
        $statement = $this->connection->getConnection()->query('SELECT * FROM Orders');
        $results = $statement->fetchAll();

        $orders = [];
        foreach ($results as $row) {
            $order = new Order();
            $order->setId($row['id']);
            $order->setTitle($row['title']);
            $order->setStatus($row['status']);
            $order->setClientId($row['client_id']); // Ajout du client I
        
            $orders[] = $order;
        }

        return $orders;
    }
    public function getOrdersByClientId(int $id): array
{
    $statement = $this->connection->getConnection()->prepare(
        "SELECT * FROM orders WHERE client_id = :id"
    );
    $statement->execute(['id' => $id]);

    $orders = [];
    foreach ($statement as $row) {
        $order = new Order();
        $order->setId($row['id']);
        $order->setTitle($row['titlae']);
        $order->setStatus($row['status']);
        $order->setClientId($row['client_id']);
   
        $orders[] = $order;
    }

    return $orders;
}


    // Récupérer une seule commande par ID
    public function getOrder(int $id): ?Order
    {
        $statement = $this->connection->getConnection()->prepare("SELECT * FROM Orders WHERE id=:id");
        $statement->execute(['id' => $id]);
        $result = $statement->fetch();

        if (!$result) {
            return null;
        }

        $order = new Order();
        $order->setId($result['id']);
        $order->setTitle($result['title']);
        $order->setStatus($result['status']);
            $order->setClientId($result['client_id']); // Ajout du client ID

        return $order;
    }


    
    // Mise à jour d'une commande
    public function update(Order $order): bool
    {
        $statement = $this->connection->getConnection()->prepare(
            'UPDATE Orders SET title = :title, status = :status WHERE id = :id'
        );

        return $statement->execute([
            'id' => $order->getId(),
            'title' => $order->getTitle(),
            'status' => $order->getStatus()
        ]);
    }

    // Suppression d'une commande
    public function delete(int $id): bool
    {
        $statement = $this->connection->getConnection()->prepare(
            'DELETE FROM Orders WHERE id = :id'
        );

        return $statement->execute(['id' => $id]);
    }

    // Création d'une commande
    public function create(Order $order): bool
    {
        $statement = $this->connection->getConnection()->prepare(
            'INSERT INTO Orders (title, status) VALUES (:title, :status)'
        );

        return $statement->execute([
            'title' => $order->getTitle(),
            'status' => $order->getStatus()
        ]);
    }
}


