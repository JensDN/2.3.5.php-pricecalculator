<?php
declare(strict_types = 1);


class HomepageController
{
    private $Products;
    private $Customers;

    public function __construct()
    {
        $decodeJson = new JSON;
        $this->Products = $decodeJson->makeProductClass();
        $this->Customers = $decodeJson->makeCostumersClass();
    }



    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render()
    {
        $productList = $this->Products;
        $customerList = $this->Customers;
        require 'View/homepage.php';
    }


}
