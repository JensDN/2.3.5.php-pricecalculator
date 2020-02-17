<?php
require "./Controller/HomepageController.php";
$data = new HomepageController();
?>

<header>
    <h1>Welcome to my site</h1>
	<select id="products" name="products">
		<?php foreach ($data->getProductsList() as $product){
           echo '<option value=".$product->name."></option>';
		}?>
	</select>

	<select id="costumers" name="costumers">
        <?php foreach ($data->getCustomersList() as $costumer){
            echo '<option value=".$costumer->name."></option>';
        }?>
	</select>
</header>