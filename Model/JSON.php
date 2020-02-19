<?php

class JSON
{
    private $productsData;
    private $costumersData;
    private $productsList;
    private $customerList;
    public function __construct(){
        $loaderProducts = new Data('Data/products.json');
        $this->productsData = $loaderProducts->getData();
        $loaderCustomers = new Data('Data/customers.json');
        $this->costumersData = $loaderCustomers->getData();
    }
    public function makeProductClass (){
            foreach ($this->productsData as $product){
                $this->productsList[] = new Product($product{'id'}, $product{'name'}, $product{'description'}, $product{'price'});
            }
    }
    public function makeCostumersClass (){

    }
}
