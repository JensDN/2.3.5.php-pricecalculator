<?php
declare(strict_types = 1);


class HomepageController
{
    private $Products;
    private $Customers;

    public function __construct(string $productPath, string $costumersPath)
    {
        $this-> Products = new Data($productPath);
        $this-> Customers = new Data($costumersPath);
    }
    public function getProductsList () :array  {
        return $this->Products->getData();
    }
    public function getCustomersList () :array {
        return $this->Customers->getData();
    }
    public function getCustomer($index) {
        $arr = $this->getCustomersList();
        return $arr[$index];
    }
    public function getCustomerData(string $getInputName){
        $item = null;
        foreach($this->getCustomersList() as $struct) {
            if ($getInputName === $struct->name) {
                $item = $struct;
                break;
            }
        }
        return $item;
    }
    public function loaderFunction(){
        $arr = [];

    }
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render()
    {

        //this is just example code, you can remove the line below
        $user = new Customer('John Smith');
        $products = new  Product('wc borstel');
        //you should not echo anything inside your controller - only assign vars here
        // then the view will actually display them.
       //load the view
        require 'View/homepage.php';

    }


}
