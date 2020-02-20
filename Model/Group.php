<?php
declare(strict_types = 1);

class Group
{
    private $id;
    private $name;
    private $groupId;
    private $varDiscount;
    private $fixDiscount;

    /**
     * @return mixed
     */
    public function __construct($id, $name, $groupId, $varDiscount, $fixDiscount)
    {
        $this->id = (int)$id;
        $this->name = $name;
        $this->groupId = (int)$groupId;
        $this->varDiscount = $varDiscount;
        $this->fixDiscount = $fixDiscount;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return (int)$this->id;
    }
    public function getGroupId():int
    {
        return (int)$this->groupId;
    }



}