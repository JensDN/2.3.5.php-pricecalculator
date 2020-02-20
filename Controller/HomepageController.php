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

    public function getObjectPost (){
            $productID = (int)$_POST['product'];
            $customerID = (int)$_POST['customer'];
            $this->currentProduct = $this->Products[$productID];
            $this->currentCustomer = $this->Customers[$customerID];

    }

    public function getGroupsfromCustomer (){
        $groupIdCustomer = (int)$this->currentCustomer->getGroupId();
        $this->currentGroup[] = $this->Groups[$groupIdCustomer];
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
