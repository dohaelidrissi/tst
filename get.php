<?php
	sleep(1);
	include("conn.php");
	$sel=$pdo->prepare("select * from users order by date DESC");
	$sel->setFetchMode(PDO::FETCH_ASSOC);
	$sel->execute();
	$tab=$sel->fetchAll();
?>

<div id="count">
	<?=count($tab)." ".(count($tab)>1?"commentaires trouvés":"commentaire trouvé"); ?>
</div>
<div class="row row-header">
	<div>ID</div>
	<div>DATE</div>
	<div>COMMENTAIRE</div>
	<div>ACTION</div>
</div>	
<?php
	for($i=0;$i<count($tab);$i++){
?>
<div class="row">
	<div><?=$tab[$i]["id"]?></div>
	<div><?=$tab[$i]["date"]?></div>
	<div><?=$tab[$i]["comment"]?></div>
	<div><div class="del" onClick="del(<?=$tab[$i]["id"]?>)">SUPPRIMER</div></div>
</div>
<?php
	}
?>