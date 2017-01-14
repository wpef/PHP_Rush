<?PHP
function auth($login, $passwd)
{
	$passwd = hash('whirlpool', $passwd);
	$file = file_get_contents('../private/passwd');
	$db = unserialize($file);

	if (!$file || !$db)
		return;

	foreach ($db as $acc)
	{
		if ($acc['login'] === $login)
		{
			if ($acc['passwd'] === $passwd)
				return TRUE;
		}
	}
	return FALSE;
}
?>
