<?php


class Product
{
    private $name;
    private $id;
    private $price;
    private $description;


    public function __construct( $name,  $id,  $price,  $description)
    {
        $this->name = $name;
        $this->id = $id;
        $this->price = $price;
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

}