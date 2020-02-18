<?php
require '../../Controller/HomepageController.php';
require '../../Controller/Data.php';
$data = new HomepageController('../../Data/products.json','../../Data/customers.json');
?>
<header>
    <h1>Welcome to my site</h1>
	<select id="products" name="products">
		<?php foreach ($data->getProductsList() as $product){
           echo '<option value=' .$product->name.'>'.$product->name.'</option><br>';
		}?>
	</select>

	<select id="costumers" name="costumers">
        <?php foreach ($data->getCustomersList() as $costumer){
            echo '<option value='.$costumer->name.'>'.$costumer->name.'</option>';
        }?>
	</select>
</header>