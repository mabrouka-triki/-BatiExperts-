<?php
require_once __DIR__ . '/../Client.php';
require_once __DIR__ . '/../../lib/database.php';
class ClientRepository
{

    public DatabaseConnection $connection;

    public function __construct()
    {
        $this->connection = new DatabaseConnection;
    }

    public function getClients(): array
    {
        $statement = $this->connection->getConnection()->query('SELECT * FROM clients'); //this = objet de type databse connection, get connection renvoie un objet PDO, méthode native query de la classe de PDO 
        $result = $statement->fetchAll();
        $clients = [];

        foreach ($result as $row) {

            $client = new Client();
            $client->setId($row['id']);
            $client->setName($row['name']);
            $client->setPhone($row['phone']);
            $client->setMail($row['mail']);

            $clients[]=$client;

        }
        return $clients;

    }
    public function getClient(int $id): ?Client
    {
        $statement = $this->connection->getConnection()->prepare("SELECT * FROM clients WHERE id=:id");
        $statement->execute(['id' => $id]);
        $result = $statement->fetch();

        if (!$result) {
            return null;
        }
        $client = new Client();
        $client->setId($result['id']);
        $client->setName($result['name']);
        $client->setPhone($result['phone']);
        $client->setMail($result['mail']);

        return $client;
}



public function create(Client $client): bool
{
    $statement = $this->connection
            ->getConnection()
            ->prepare('INSERT INTO clients (name, phone, mail) VALUES (:name, :phone, :mail);');

    return $statement->execute([
        'name' => $client->getName(),
        'phone' => $client->getPhone(),
        'mail' => $client->getMail()
    ]);
}

public function update(Client $client): bool
{
    $statement = $this->connection
            ->getConnection()
            ->prepare('UPDATE clients SET name = :name, phone = :phone, mail = :mail WHERE id = :id');

    return $statement->execute([
        'id' => $client->getId(),
        'name' => $client->getName(),
        'phone' => $client->getPhone(),
        'mail' => $client->getMail()
    ]);
}

public function delete(int $id): bool
{
    $statement = $this->connection
            ->getConnection()
            ->prepare('DELETE FROM clients WHERE id = :id');
    $statement->bindParam(':id', $id);

    return $statement->execute();
}

}


