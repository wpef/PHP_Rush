<?PHP

if (!$_POST['login'] || !$_POST['passwd'] || !$_POST['submit'] || $_POST['submit'] != 'OK') {
	echo "ERROR\n";
	return;
}

if (file_exists('../private/passwd'))
{
	$file = file_get_contents('../private/passwd');
	$file_content = unserialize($file);
}
else if (!file_exists('../private'))
{
	mkdir("../private");
	$file_content = NULL;
}

$login = $_POST['login'];
$passwd = hash('whirlpool', $_POST['passwd']);
$account = array(
	'login' => $login,
	'passwd' => $passwd,
);

function log_exists($login, $file_content)
{
	if ($file_content === NULL)
		return (FALSE);
	foreach ($file_content as $account)
	{
		foreach ($account as $login)
		{
			if ($login == $_POST['login'])
				return (TRUE);
		}
	}
	return (FALSE);
}

if (!log_exists($login, $file_content))
{
	$file_content[] = $account;
	$file = serialize($file_content);
	file_put_contents('../private/passwd', $file);
}
else
	echo "ERROR\n";
?>
