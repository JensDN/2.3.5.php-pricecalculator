<?php
declare(strict_types = 1);
require './Controller/Data.php';

class HomepageController
{

    private  $Products =[];
    private  $Customers =[];

    public function __construct()
    {
        $this-> Products = new Data('./Data/products.json');
        $this-> Customers = new Data('./Data/customers.json');
    }
    public function getProductsList () :array  {
        return $this->Products;
    }
    public function getCustomersList () :array {
        return $this->Customers;
    }
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {
        //this is just example code, you can remove the line below
        $user = new User('John Smith');

        //you should not echo anything inside your controller - only assign vars here
        // then the view will actually display them.

        //load the view
        require 'View/homepage.php';
    }
}
