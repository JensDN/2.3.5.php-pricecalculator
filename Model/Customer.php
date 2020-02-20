<?php
declare(strict_types=1);

class Customer
{
    private $name;
    private $id;
    private $groupId;
    private $group;
    private $product;



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

    public function setProduct($Product){
     return $this->product = $Product;
    }
    public function setPriceGroup($priceGroup){
        $this->group = $priceGroup;
        var_dump($this->group);
        return $this->group;

    }
    public function getGroup(){
        return $this->group;
    }

    public function getProductPrice(){
        foreach($this->getGroup() as $discountGroup ){
            $discountArr[] =  $discountGroup->varDiscount;
            $fixedArr[] = $discountGroup->fixDiscount;
        }
        $sumFixedDiscounts = array_sum($fixedArr);
        $maxDiscountArr = max($discountArr);
        $price = ($this->product->getPrice() - $sumFixedDiscounts) * ($maxDiscountArr/100);
        var_dump($price);
    }
}