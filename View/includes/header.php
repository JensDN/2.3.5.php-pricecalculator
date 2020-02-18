<?php
$data = new HomepageController('Data/products.json','Data/customers.json');
?>
<header>
	<form method="post">
		<select id="products" name="products">
            <?php foreach ($data->getProductsList() as $product){
                echo '<option value='.$product->name.'>'.$product->name.'</option>';
            }?>
		</select>

		<label for="costumers"></label><select id="costumers" name="costumers">
            <?php foreach ($data->getCustomersList() as $costumer){
                echo '<option   value='.$costumer->name.'>'.$costumer->name.'</option>';
            }?>
		</select>


		<button type="submit" name="button">Submit</button>
	</form>
</header>