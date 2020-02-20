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
    public function getProduct(){
        return $this->currentProduct;
    }
    public function  getCustomer() {
        return $this->currentCustomer;
    }
    public function priceArray (){
        $this->currentCustomer->setPriceGroup($this->currentGroup);
        $this->currentCustomer->setProduct($this->currentProduct);
        return $this->currentCustomer->getProductPrice();
    }
    public function __construct()
    {
        $decodeJson = new JSON;
        $this->Products = $decodeJson->makeProductClass();
        $this->Customers = $decodeJson->makeCostumersClass();
        $this->Groups = $decodeJson->makeGroupsClass();
    }

    public function getObjectPost (){
            $productID = (int)$_POST['product'];
            $customerID = (int)$_POST['customer'];
            $this->currentProduct = $this->Products[$productID];
            $this->currentCustomer = $this->Customers[$customerID];

    }

    public function getGroupFromCustomer (){
        foreach ($this->Groups as $group){
           if($group->getId() === $this->currentCustomer->getGroupId()){
               return $this-> currentGroup[] = $group;
               }
        }
    }
    public function getGroupsFromCustomer (){
        $groupID = $this->currentGroup[0]->getGroupId();
        while($groupID != null){
            foreach ($this->Groups as $group){
                if ($group->getId() === $groupID){
                    $this->currentGroup[] = $group;
                    if ($group->getGroupId() === $groupID){
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
}
