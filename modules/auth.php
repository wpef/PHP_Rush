<?PHP
function auth($login, $passwd)
{
	if (!file_exists('../private/passwd'))
		return (FALSE);
	$file = file_get_contents('../private/passwd');
	$db = unserialize($file);
	$passwd = hash('whirlpool', $passwd);

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

function log_exists($login, $file_content)
{
	if ($file_content === NULL || $file_content[0] === NULL)
		return (FALSE);
	foreach ($file_content as $account)
	{
		foreach ($account as $log)
		{
		if ($log == $_POST['login'])
				return (TRUE);
		}
	}
	return (FALSE);
}

function set_session($login)
{
	$_SESSION['login'] = $login;
	$_SESSION['role'] = "client";
	$_SESSION['log'] = TRUE;
	if (isset($_SESSION['login_error']))
		unset($_SESSION['login_error']);
}
?>
