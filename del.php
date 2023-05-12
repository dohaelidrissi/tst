xwwwww
_<?php
	include("conn.php");
	if($_POST["del"]=="yes"){
		$sel=$pdo->prepare("delete from users where id=? limit 1");
		$sel->execute(array($_POST["id"]));
	}
	echo "ok";
?>
