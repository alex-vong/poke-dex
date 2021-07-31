<?php include('poke-database.php'); ?>

<?php 
	if ( isset($_GET['pokeID']) ) {
		$pokeID = $_GET['pokeID'];
	}

	if ( $pokeID <= 151 ) {
		foreach ($kanto as $pokemon) { 
			if ($pokeID == $pokemon['id'] ) {
				$currentPokemon = $pokemon;
			} 
		} 
	}

	if ( $pokeID > 151 && $pokeID <= 251 ) {
		foreach ($johto as $pokemon) { 
			if ($pokeID == $pokemon['id'] ) {
			$currentPokemon = $pokemon;
			} 
		} 
	}

	if ( $pokeID > 251 ) {
		foreach ($hoenn as $pokemon) { 
			if ($pokeID == $pokemon['id'] ) {
			$currentPokemon = $pokemon;
			} 
		} 
	}


?>

<?php if ( isset($currentPokemon) ) { ?>
	<inner-column>
		<h1><?=$currentPokemon['name']?></h1>
		<picture>
			<img src='<?=$currentPokemon['image']?>'>
		</picture>
		<p><?=$currentPokemon['description']?></p>
	</inner-column>


<?php } ?>



