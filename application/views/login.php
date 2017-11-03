<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php echo validation_errors(); ?>
	<?php if(isset($error)){
		echo $error;
	} ?>
	<?php if(isset($succes))
		{
			echo $succes;
	}?>

	<form action="/Routing/login_user" method="POST">
		<input type="text" name="user_name" placeholder="user name">
		<input type="password" name="password" placeholder="password">
		<input type="submit" value="login">
	</form>
</body>
</html>
