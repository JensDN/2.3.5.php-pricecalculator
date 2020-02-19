<?php
declare(strict_types=1);

class Customer
{
    private $name;
    private $id;
    private $groupId;



    public function __construct(string $name, int $id, int $groupId)
    {
        $this->name = $name;
        $this->id = $id;
        $this->groupId = $groupId;
    }

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

}