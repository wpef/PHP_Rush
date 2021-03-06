<?PHP
function  get_articles()
{
  $articles = array();
  $data = file_get_contents("./table/articles.csv");
  if (isset($data))
  {
    $articles = unserialize($data);
  }
  return $articles;
}

function  get_categories()
{
  $categories = array();
  $data = file_get_contents("./table/categories.csv");
  if (isset($data))
  {
    $categories = unserialize($data);
  }
  return $categories;
}

function  get_genres()
{
  $genres = array();
  $data = file_get_contents("./table/genres.csv");
  if (isset($data))
  {
    $genres = unserialize($data);
  }
  return $genres;
}

function  get_permission()
{
  $permission = array();
  $data = file_get_contents("./table/permission.csv");
  if (isset($data))
  {
    $permission = unserialize($data);
  }
  return $permission;
}

function  get_cart()
{
  $cart = array();
  $data = file_get_contents("./table/cart.csv");
  if (isset($data))
  {
    $cart = unserialize($data);
  }
  return $cart;
}

function  get_users()
{
  $users = array();
  $data = file_get_contents("./table/users.csv");
  if (isset($data))
  {
    $users = unserialize($data);
  }
  return $users;
}
?>
