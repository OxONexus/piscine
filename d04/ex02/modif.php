<?php
function get_passwd()
	{
		if (file_exists("../htdocs/private/passwd"))
		{
			$file_pwd = file_get_contents("../htdocs/private/passwd");
			$log = unserialize($file_pwd);
			return ($log);
		}
	}
	if ($_POST['submit'] == "OK")
	{
		if ($_POST['login'] != NULL && $_POST['newpw'] != NULL && $_POST['oldpw'] != NULL)
		{
			$file = get_passwd();
			//print_r($file);
			$hash_old = hash("whirlpool", $_POST['oldpw']);
			foreach ($file as &$log)
			{
				if ($_POST['login'] === $log['login'] && $hash_old === $log['passwd'])
				{
					$log['passwd'] = hash("whirlpool", $_POST['newpw']);
				}
			}
			file_put_contents("../htdocs/private/passwd", serialize($file));
		}
		else
			echo "ERROR\n";
	}
	else
	{
		echo "ERROR\n";
	}
?>
