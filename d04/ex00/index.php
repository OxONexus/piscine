<?php
		session_start();
	if ($_GET['submit'] === "OK")
	{
		if ($_GET['login'] != NULL && $_GET['passwd'] != NULL)
		{
			$_SESSION['login'] = $_GET['login'];
			$_SESSION['passwd'] = $_GET['passwd'];
		}
	}
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>session</title>
	</head>
	<body>
		<form  method="get" accept-charset="utf-8">
		<p>Login : <input type="text" name="login" value= "<?php echo $_SESSION['login']?>" /></p>
		<br />
			<p>password : <input type="text" name="passwd" value="<?php echo $_SESSION['passwd']?>" /></p>
			<p>Sunmit <input type="submit" name="submit"  value="OK" /></p>
		</form>
	</body>
</html>
