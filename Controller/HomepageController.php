<?php
declare(strict_types = 1);


class HomepageController
{
    private $Products;
    private $Customers;
    private $Groups;
    private $currentProduct;
    private $currentCustomer;
    public $currentGroup;

    public function __construct()
    {
        $decodeJson = new JSON;
        $this->Products = $decodeJson->makeProductClass();
        $this->Customers = $decodeJson->makeCostumersClass();
        $this->Groups = $decodeJson->makeGroupsClass();
    }

    public function getObjectPost() {
            $productID = (int)$_POST['product'];
            $customerID = (int)$_POST['customer'];
            $this->currentProduct = $this->Products[$productID];
            $this->currentCustomer = $this->Customers[$customerID];

    }

    public function getGroupFromCustomer() {
        foreach ($this->Groups as $group) {
           if($group->getId() === $this->currentCustomer->getGroupId()) {
               return $this-> currentGroup[] = $group;
               }
        }
    }
    public function getGroupsFromCustomer() {
        $groupID = $this->currentGroup[0]->getGroupId();
        while($groupID != null){
            foreach ($this->Groups as $group) {
                if ($group->getId() === $groupID) {
                    $this->currentGroup[] = $group;
                    if ($group->getGroupId() === $groupID) {
                        $groupID = null;
                        break;
                    } else {
                        $groupID = $group->getGroupId();
                    }
                }
            }
        }
    }

    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render()
    {

        $productList = $this->Products;
        $customerList = $this->Customers;
        $groupList = $this->Groups;
        require 'View/homepage.php';
    }

    public function getTotalPrice()
    {
        $totalPrice = $this->currentProduct->getPrice();

        if ($this->currentGroup[0]->getVarDiscount() == null) {
            $totalPrice = $this->currentProduct->getPrice() - $this->currentGroup[0]->getFixDiscount();
        }
        elseif ($this->currentGroup[0]->getFixDiscount() == null) {
            $totalPrice = $this->currentProduct->getPrice() - $this->currentGroup[0]->getVarDiscount();
        }
    }


    //render necessary things to table in index
    public function renderTable()
    {
        //$customerName = $this->currentCustomer->getName();
        $productName = $this->currentProduct->getName();
        $originalPrice = $this->currentProduct->getPrice();
        $varDisc = $this->currentGroup[0]->getVarDiscount();
        $fixDisc = $this->currentGroup[0]->getFixDiscount();
        $totalPrice = $this->getTotalPrice();

        require 'View/includes/table.php';

    }

}
