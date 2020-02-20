<?php

class JSON
{
    private $productsData;
    private $costumersData;
    private $groupsData;
    private $productsList = [];
    private $customerList = [];
    private $groupsList = [];

    public function __construct() {
        $loaderProducts = new Data('Data/products.json');
        $this->productsData = $loaderProducts->getData();
        $loaderCustomers = new Data('Data/customers.json');
        $this->costumersData = $loaderCustomers->getData();
        $loaderGroups = new Data('Data/groups.json');
        $this->groupsData = $loaderGroups->getData();

    }
    public function makeProductClass() {
        foreach ($this->productsData as $product) {
            array_push($this->productsList, new Product($product['name'],$product['id'],$product['price'], $product['description']));
        }
        return $this->productsList;
    }
    public function makeCostumersClass() {
        foreach ($this->costumersData as $customer) {
            array_push($this->customerList, new Customer($customer['name'],$customer['id'], $customer['group_id']));
        }
        return $this->customerList;
    }
    public function makeGroupsClass() {

        foreach ($this->groupsData as $group) {
            if (isset($group['group_id'])) {
                if (!isset($group['variable_discount'])) {
                    array_push($this->groupsList, new Group($group['id'],$group['name'], $group['group_id'], null, $group['fixed_discount']));
                } elseif (!isset($group['fixed_discount'])) {
                    array_push($this->groupsList, new Group($group['id'],$group['name'], $group['group_id'], $group['variable_discount'], null));
                } else {
                    array_push($this->groupsList, new Group($group['id'],$group['name'], $group['group_id'], $group['variable_discount'], $group['fixed_discount']));
                }
            }
            else {
                if (!isset($group['variable_discount'])) {
                    array_push($this->groupsList, new Group($group['id'],$group['name'], null, null, $group['fixed_discount']));
                } elseif (!isset($group['fixed_discount'])) {
                    array_push($this->groupsList, new Group($group['id'],$group['name'], null, $group['variable_discount'], null));
                } else {
                    array_push($this->groupsList, new Group($group['id'],$group['name'], null, $group['variable_discount'], $group['fixed_discount']));
                }
            }
        }
        return $this->groupsList;
    }

}
