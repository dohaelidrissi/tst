<?php
	include("conn.php");
	$sel=$pdo->prepare("insert into users(date,comment) values(now(),?)");
	$sel->execute(array($_POST["comment"]));
	echo "ok";
?>
