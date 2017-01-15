<?PHP

include("./get_data.php");

function  get_user($name)
{
  $id = 0;
  $users = get_users();
  while($users[$id]['name'] != $name)
  {
    if ($users[$id]['name'] === $name)
      return $users[$id];
    $id++;
  }
  return FALSE; //not found
}

?>
