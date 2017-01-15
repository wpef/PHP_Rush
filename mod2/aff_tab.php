#!/usr/bin/php
<?PHP

$data = file_get_contents("./table/articles.csv");
$array = array();
$array = unserialize($data);
print_r($array);

?>
