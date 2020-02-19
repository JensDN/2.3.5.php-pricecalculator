<?php


class Product
{
    private $name;
    private $id;
    private $price;
    private $description;


    public function __construct(string $name, int $id, float $price, string $description)
    {
        $this->name = $name;
        $this->id = $id;
        $this->price = $price;
        $this->description = $description;
    }

    public function getName() : string
    {
        return $this->name;
    }
    public function getPrice() : string
    {
        return $this->price;
    }

}