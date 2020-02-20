<?php
declare(strict_types = 1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require "../Controller/LoginController.php";

$name = new LoginController();
$password = new LoginController();

?>

<!DOCTYPE>
<html>
<head>
    <meta charset="UTF-8" lang="eng">
    <title>Price Calculator Login</title>
</head>
<body>
<header>
    <h1>Login to select customer and product</h1>
</header>
<form method="post">
    <input type="text" name="name" placeholder="Name + Surname">
	<?php echo $name->nameErr();?>
    <input type="text" name="password" placeholder="Password">
	<?php echo $password->passErr()?>
    <button type="submit" name="button">Log in</button>
</form>

</body>
</html>


