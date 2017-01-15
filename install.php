#!/usr/bin/php
<?PHP

if (!file_exists("table"))
  mkdir("table");

$permission = array();
$permission[1] = "root";
$permission[2] = "admin";
$permission[3] = "client";
$permission[4] = "guest";

$users = array();
$users[1]['id'] = 1;
$users[1]['permssion'] = $permission[1];
$users[1]['firstname'] = "Alexis";
$users[1]['lastname'] = "Fillion";
$users[1]['pseudo'] = "afillion";
$users[1]['passwd'] = hash("whirlpool", "rootafillion");
$users[1]['mail'] = "afillion@student.42.fr";
$users[1]['img'] = "https://cdn.intra.42.fr/userprofil/afillion.jpg";
$users[2]['id'] = 2;
$users[2]['permssion'] = $permission[1];
$users[2]['firstname'] = "Foulques";
$users[2]['lastname'] = "De Moncade";
$users[2]['pseudo'] = "fde-monc";
$users[2]['passwd'] = hash("whirlpool", "rootfde-monc");
$users[2]['mail'] = "fde-monc@student.42.fr";
$users[2]['img'] = "https://cdn.intra.42.fr/userprofil/fde-monc.jpg";

$genres = array();
$genres[1] = "Test";
$genres[2] = "Rap";
$genres[3] = "R'n'B";
$genres[4] = "Variete";
$genres[5] = "Classique";
$genres[6] = "Pop";

$categories = array();
$categories[1] = "Albulm";
$categories[2] = "Francais";
$categories[3] = "US";
$categories[4] = "Meilleurs ventes";
$categories[5] = "Promotions";

$articles = array();
$articles[1]['id'] = 1;
$articles[1]['name'] = "premier article";
$articles[1]['quantite'] = 1;
$articles[1]['description'] = "Ceci est un article de test";
$articles[1]['img'] = "http://www.42.fr/wp-content/themes/42/images/42_logo_black.png";
$articles[1]['price'] = 42;
$articles[1]['categories'] = $categories;
$articles[1]['genres'] = $genres;

$cart = array();
$cart[1]['articles'] = 1;
$cart[1]['total'] = 0;

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
?>
