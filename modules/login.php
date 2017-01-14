<?PHP
session_start();

include ('auth.php');

if (!$_GET['login'] || !$_GET['passwd'] || !$_GET['submit'] || $_GET['submit'] != 'OK') {
	echo "ERRORf\n";
	return;
}


$login = $_GET['login'];
$passwd = $_GET['passwd'];

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
