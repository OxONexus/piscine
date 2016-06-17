<?PHP
	if ($_GET['action'] == "set")
	{
		setcookie($_GET['name'], $_GET['value']);
	}
	else if ($_GET['action'] == "get")
	{
		$name = $_GET['name'];
		echo "$_COOKIE[$name]\n";
	}
	else if ($_GET['action'] == "del")
	{
		setcookie($_GET['name'], $_GET['value'], time() - 3600);
	}
?>
