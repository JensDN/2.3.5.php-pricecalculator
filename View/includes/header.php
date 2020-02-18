<?php
?>
<header>
	<form method="post">
		<select id="products" name="products">
            <?php foreach ($this->getProductsList () as $product){
                echo '<option value='.$product['id'].'>'.$product['name'].'</option>';
            }?>
		</select>

		<label for="costumers"></label><select id="costumers" name="costumers">
            <?php foreach ($this->getCustomersList() as $costumer){
                echo '<option   value='.$costumer['id'].'>'.$costumer['name'].'</option>';
            }?>
		</select>
		<button type="submit" >Submit</button>
	</form>
</header>
