<?PHP
//$_SERVER['PHP_AUTH_USER'] = NULL;
	if ($_SERVER['PHP_AUTH_USER'] == NULL || $_SERVER['PHP_AUTH_PW'] == NULL)
	{
		header('WWW-Authenticate: Basic realm="Espace membres"');
		header('HTTP/1.0 401 Unauthorized');
		echo"<html><body>Cette zone est accessible uniquement aux membres du site</body></html>\n";
	}
	else
	{
		if ($_SERVER['PHP_AUTH_USER'] == "zaz" && $_SERVER['PHP_AUTH_PW'] == "jaimelespetitsponeys")
		{
			$str_img = file_get_contents("../img/42.png");
			$base = base64_encode($str_img);
			echo"<html><body>
Bonjour Zaz<br />
<img src='data:image/png;base64,".$base."'>
</body></html>\n";
		}
		else
		{
			echo"<html><body>Cette zone est accessible uniquement aux membres du site</body></html>\n";
	}
}
