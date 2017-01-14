<?PHP
session_start();

include ('auth.php');

if (!$_POST['login'] || !$_POST['passwd'] || !$_POST['submit'] || $_POST['submit'] != 'OK') {
	echo "ERROR\n";
	return;
}

$login = $_POST['login'];
$passwd = $_POST['passwd'];

if (auth($login, $passwd))
{
	$_SESSION['loggued_on_user'] = $login;
	echo "OK\n";
}
else
{
	$_SESSION['loggued_on_user'] = "";
	echo "ERROR\n";
}
?>
