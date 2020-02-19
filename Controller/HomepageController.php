<?php
declare(strict_types = 1);


class HomepageController
{
    private $Products;
    private $Customers;
    private $Groups;
    public $currentProduct;
    public $currentCustomer;

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

    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render()
    {
        $productList = $this->Products;
        $customerList = $this->Customers;
        require 'View/homepage.php';
    }


}
