<?php
?>
<header>
	<form method="post">
		<select id="products" name="products">
            <?php foreach($productList as $product){
                echo '<option value='.$product->getId().'>'.$product->getName().'</option>';
            }?>
		</select>
        <select id="costumers" name="costumers">
            <?php foreach($customerList as $customer){
                echo '<option   value='.$customer->getId().'>'.$customer->getName().'</option>';
            }?>
		</select>
		<button type="submit" >Submit</button>
	</form>
</header>
