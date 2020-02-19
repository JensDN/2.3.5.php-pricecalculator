<?php
declare(strict_types=1);

class Customer
{
    private $name;
    private $id;
    private $groupId;
    private $group = [];


    public function __construct( $name, $id, $groupId)
    {
        $this->name = $name;
        $this->id = $id;
        $this->groupId = $groupId;
    }

    //GETTERS
    public function getName() : string
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
     * @param int $groupId
     */
    public function setGroupId(int $groupId): void
    {
        $this->groupId = $groupId;
    }

    public function getGroup($object)
    {
        array_push($this->group, $object);
    }

}