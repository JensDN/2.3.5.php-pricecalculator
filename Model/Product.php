<?php


class Product
{
    private $name;
    private $price;


    public function __construct(string $name)
    {
        $this->name = $name;
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