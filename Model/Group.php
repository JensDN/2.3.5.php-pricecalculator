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
    public function __construct(int $id, string $name, int $groupId, int $varDiscount, int, $fixDiscount)
    {
        $this->id = $id;
        $this->name = $name;
        $this->groupId = $groupId;
        $this->varDiscount = $varDiscount;
        $this->fixDiscount = $fixDiscount;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }




}