<?php
session_start();
$link = dirname(__DIR__)."/rush00";
$inc = $link.'/template_parts/'; 
?>
<HTML>
	<?php include ($inc."home/head.html") ?>
	<BODY>
		<?
		include($inc."home/header.php");
		include($inc."nav.html");
		?>
		<div class="main">
		</div>
	</BODY>
</HTML>
