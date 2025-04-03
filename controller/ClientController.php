<?php

require_once __DIR__ . '/../model/repositories/ClientRepository.php';
require_once __DIR__ . '/../model/Client.php';

class ClientController
{
    private ClientRepository $clientrepository;

    public function __construct()
    {
        $this->clientrepository = new ClientRepository();
    }

    public function home()
    {
        $clients = $this->clientrepository->getClients();

        require_once __DIR__ . '/../view/home.php';
    }

    public function show(int $id) 
    {
        $client = $this->clientrepository->getClient($id);

        require_once __DIR__ . '/../view/client-view.php';
    }

    public function create()
    {
        require_once __DIR__ . '/../view/client-create.php';
    }

    public function store()
    {
        $client = new Client();
        $client->setName($_POST['name']);
        $client->setPhone($_POST['phone']);
        $client->setMail($_POST['mail']);
        $this->clientrepository->create($client);

        header('Location: ?');
    }

    public function edit(int $id)
    {
        $client = $this->clientrepository->getClient($id);
        require_once __DIR__ . '/../view/client-edit.php';
    }

    public function update()
    {
        $client = new Client();
        $client->setId($_POST['id']);
        $client->setName($_POST['name']);
        $client->setPhone($_POST['phone']);
        $client->setMail($_POST['mail']);
        $this->clientrepository->update($client);

        header('Location: ?');
    }

    public function delete(int $id)
    {
        $this->clientrepository->delete($id);

        header('Location: ?');
    }

    public function forbidden()
    {
        require_once __DIR__ . '/../view/404.php';
        http_response_code(404);
    }
}