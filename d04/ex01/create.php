<?php
function get_passwd()
	{
		if (file_exists("../htdocs/private/passwd"))
		{
			$file_pwd = file_get_contents("../htdocs/private/passwd");
			$log = unserialize($file_pwd);
			return ($log);
		}
		else 
			return NULL;
	}
function is_exist($login)
{
	$file = get_passwd();
	if ($file == NULL)
		return 0;
	foreach ($file as $key => $log)
	{
		if ($login === $log['login'])
			return 1;
	}
	return 0;
}
function save_user($user)
	{
		if (!file_exists("../htdocs/private"))
			mkdir("..htdocs/private");
		file_put_contents("../htdocs/private/passwd", $user);
	}
	if ($_POST['submit'] == "OK")
	{
		if ($_POST['login'] != NULL && $_POST['passwd'] != NULL && !is_exist($_POST['login']))
		{
			$pass_hash = hash("whirlpool", $_POST['passwd']);
			$array = array("login" => $_POST['login'], "passwd" =>$pass_hash);
			$rend = get_passwd();
			$rend[] = $array;
			save_user(serialize($rend));
			print "OK\n";
		}
		else
			echo "ERROR\n";
	}
	else
	{
		echo "ERROR\n";
	}
?>
