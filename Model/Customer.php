<?php
declare(strict_types=1);

class Customer
{
    private $name;
    private $id;
    private $groupId;
    private $group = [];


    public function __construct($name, $id, $groupId)
    {
        $this->name = $name;
        $this->id = (int)$id;
        $this->groupId = (int)$groupId;
    }

    //GETTERS
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
    public function getGroupId() :int
    {
        return (int)$this->groupId;
    }
}