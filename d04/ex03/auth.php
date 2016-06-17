<?php
function get_file()
	{
		if (file_exists("../htdocs/private/passwd"))
		{
			$file_pwd = file_get_contents("../htdocs/private/passwd");
			$log = unserialize($file_pwd);
			return ($log);
		}
	}
function auth($login, $passwd)
{
	$file = get_file();
	$hash_old = hash("whirlpool", $passwd);
	foreach ($file as &$log)
	{
		if ($login === $log['login'] && $hash_old === $log['passwd'])
			return TRUE;
	}
	return FALSE;
}
?>
