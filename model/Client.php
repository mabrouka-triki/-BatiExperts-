<?php

require_once __DIR__ . '/../lib/database.php';

class Client
{
    private int $id;
    private string $name;
    private string $mail;
    private int $phone;


    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPhone(): int
    {
        return $this->phone;
    }

    public function getMail(): string
    {
        return $this->mail;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setPhone(int $phone)
    {
        $this->phone = $phone;
    }

    public function setMail(string $mail)
    {
        $this->mail = $mail;
    }


}

