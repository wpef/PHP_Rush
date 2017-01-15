#!/usr/bin/php
<?PHP

if (!file_exists("table"))
  mkdir("table");

$permission = array();
$permission[1] = "root";
$permission[2] = "admin";
$permission[3] = "client";
$permission[4] = "guest";

/* ADMINS */

$users = array();
$users[1]['id'] = 1;
$users[1]['permssion'] = $permission[1];
$users[1]['firstname'] = "Alexis";
$users[1]['lastname'] = "Fillion";
$users[1]['login'] = "afillion";
$users[1]['passwd'] = hash("whirlpool", "rootafillion");
$users[1]['mail'] = "afillion@student.42.fr";
$users[1]['img'] = "https://cdn.intra.42.fr/userprofil/afillion.jpg";

$users[2]['id'] = 2;
$users[2]['permssion'] = $permission[1];
$users[2]['firstname'] = "Foulques";
$users[2]['lastname'] = "De Moncade";
$users[2]['login'] = "fde-monc";
$users[2]['passwd'] = hash("whirlpool", "rootfde-monc");
$users[2]['mail'] = "fde-monc@student.42.fr";
$users[2]['img'] = "https://cdn.intra.42.fr/userprofil/fde-monc.jpg";

/* GENRES */

$genres = array();
$genres[1] = "Rap";
$genres[2] = "R'n'B";
$genres[3] = "Variete";
$genres[4] = "Classique";
$genres[5] = "Pop";

/* CATEG */

$categories = array();
$categories[1] = "Albulm";
$categories[2] = "Francais";
$categories[3] = "US";
$categories[4] = "Meilleurs ventes";
$categories[5] = "Promotions";

/* CATALOGUE */

$articles = array();

$articles[0]['id'] = 0;
$articles[0]['name'] = "premier article";
$articles[0]['quantite'] = 1;
$articles[0]['description'] = "Ceci est un article de test";
$articles[0]['img'] = "http://www.42.fr/wp-content/themes/42/images/42_logo_black.png";
$articles[0]['price'] = 42;
$articles[0]['categories'] = $categories;
$articles[0]['genres'] = $genres;

$articles[1]['id'] = 1;
$articles[1]['name'] = "50 Cent - The Massacre";
$articles[1]['quantite'] = 50;
$articles[1]['description'] = "Albulm The Massacre de 50 Cent. Sorti le 03 Mars 2005. PARENTAL ADVISORY EXPLICIT CONTENT";
$articles[1]['img'] = "./img/50cent.JPG";
$articles[1]['price'] = 9.99;
$articles[1]['categories'] = $categories[3];
$articles[1]['genres'] = $genre[1];

$articles[2]['id'] = 2;
$articles[2]['name'] = "A. Dvorak";
$articles[2]['quantite'] = 12;
$articles[2]['description'] = "Compilation du celebre compositeur Dvorak";
$articles[2]['img'] = "./img/Dvorak_Poroshina.jpg";

$cart = array();
$cart[0]['articles'] = 1;
$cart[0]['total'] = 0;

if (file_put_contents("table/articles.csv", serialize($articles)) > 0)
  echo "./table/articles.csv has been created !\n";
else
  echo "Can't create ./table/articles.csv, file_put_contents FAIL !\n";

if (file_put_contents("table/genres.csv", serialize($genres)) > 0)
  echo "./table/genres.csv has been created !\n";
else
  echo "Can't create ./table/genres.csv, file_put_contents FAIL !\n";

if (file_put_contents("table/cart.csv", serialize($cart)) > 0)
  echo "./table/cart.csv has been created !\n";
else
  echo "Can't create ./table/cart.csv, file_put_contents FAIL !\n";

if (file_put_contents("table/categories.csv", serialize($categories)) > 0)
  echo "./table/categories.csv has been created !\n";
else
  echo "Can't create ./table/categories.csv, file_put_contents FAIL !\n";

if (file_put_contents("table/users.csv", serialize($users)) > 0)
  echo "./table.users.csv has been created !\n";
else
  echo "Can't create ./table/users.csv, file_put_contents FAIL !\n";

if (file_put_contents("table/permission.csv", serialize($permission)) > 0)
  echo "./table/permission.csv has been created !\n";
else
  echo "Can't create ./table/permission.csv, file_put_contents FAIL !\n";

function add_admins($users) {
	mkdir('./private');
	$file = array();
	foreach ($users as $account){
		$file[] = $account;
	}
	$s_file = serialize($file);
	file_put_contents('./private/passwd', $s_file);
}

add_admins($users);

?>
