<?php
function display_list($genre)
{
	$line = "";
	if (!is_array($genre))
		return $genre;
	foreach($genre as $g)
	{
		if ($line === "")
			$line = $g;
		else
			$line = $line.", ".$g;
	}
	return $line;
}

function display_article($article)
{
	$name = "<h2>".$article['name'].'</h2>';
	$img = '<img src="'.$article['img'].'"/>';
	$desc = '<p class="desc">'.$article['description']."</p>";
	$genre ='<p class="genre">Genres: '.display_list($article['genres'])."</p>";
	$cat = '<p class="cat">Categories: '.display_list($article['categories'])."</p>";
	$price = '<br><p class="price">'.$article['price']." &euro;</p>";
	return ($name.$img.$desc.$genre.$cat.$price);
}

function display_button($isadmin, $article)
{
	$_SESSION['clicked_art'] = $article['name'];
	echo "<div class='buttons'>";
	if ($isadmin === 'root')
	{
		echo "<div id='modif'><a href='./pages/modif_art.php?name=";
		echo $article['name'];
		echo "'>Modifier</a></div>";
		echo "<div id='suppr'><a href='./pages/del_art.php?name=";
		echo $article['name'];
		echo "'>Supprimer</a></div>";
	}
	echo "<div id='add_cart'><a href='./pages/add_cart.php?name=";
	echo $article['name'];
	echo "'>Ajouter au Panier</a></div>";
	echo "</div>";
}

function display($tab)
{
	$i = 0;
	foreach ($tab as $art)
	{
		if ($i === 0)
			echo "<div class='art_row'>";
		echo '<article class="article">';
		echo display_article($art);
		echo display_button($_SESSION['role'], $art);
		echo '</article>';
		$i++;
		if ($i === 3)
		{
			$i = 0;
			echo "</div>";
		}
	}
}
?>
