<?php

require_once __DIR__ . '/../lib/database.php';

class Order
{
    private int $id;
    private string $title;
    private string $status;
    private int $clientId; // Ajout de l'attribut clientId
    // Getters
    public function getId(): int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getStatus(): string
    {
        return $this->status;
    }
    public function getClientId(): int
    {
        return $this->clientId;
    }

    // Setters
    public function setId(int $id): void
    {
        $this->id = $id;
    }


    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }
    public function setClientId(int $clientId): void
    {
        $this->clientId = $clientId;
    }
}