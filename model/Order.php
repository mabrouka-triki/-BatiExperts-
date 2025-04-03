<?php

require_once __DIR__ . '/../lib/database.php';

class Order
{
    private int $id;
    private string $title;
    private string $status;

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
}