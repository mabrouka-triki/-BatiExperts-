
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

        return $order;
    }
}
