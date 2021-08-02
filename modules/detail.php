

<?php 

	if ( isset($_GET['pokeID']) ) {
		$pokeID = $_GET['pokeID'];
		echo $pokeID;
		
	}
		$monstersData = file_get_contents('monster-data.json');
		$monsters = json_decode( $monstersData, true);


	foreach ($monsters as $monster) {
		
		if ( $monster["id"] == $pokeID ) {
			$currentMonster = $monster;
	}
}


?>

<?php if ( isset($pokeID) ) { ?>
	<inner-column>
		<h1><?=$currentMonster['Pokemon']?></h1>
		<picture>
			<img src='<?=$currentMonster['GIF']?>'>
		</picture>
		<h2><?=$currentMonster['Type 1']?></h2>
		<p><?=$currentMonster['Description']?></p>
	</inner-column>


<?php } else { ?>

	<h1>Page Not Found</h1>
	<p>Go back to <a href="?page=home">Home Page</a></p>

<?php } ?>


