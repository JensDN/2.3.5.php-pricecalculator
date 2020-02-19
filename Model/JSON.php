<?php

class JSON
{
    private $productsData;
    private $costumersData;
    private $productsList = [];
    private $customerList= [];
    public function __construct(){
        $loaderProducts = new Data('Data/products.json');
        $this->productsData = $loaderProducts->getData();
        $loaderCustomers = new Data('Data/customers.json');
        $this->costumersData = $loaderCustomers->getData();
    }
    public function makeProductClass (){
            foreach ($this->productsData as $product){
                array_push($this->productsList ,new Product($product['name'],$product['id'],$product['price'], $product['description']));
            }
            return $this->productsList;
    }
    public function makeCostumersClass (){
            foreach ($this->costumersData as $customer){
                array_push($this->customerList ,new Customer($customer['name'],$customer['id'], $customer['group_id']));
            }
            return $this->customerList;
    }
}
