

<?php 

	if ( isset($_GET['pokeID']) ) {
		$pokeID = $_GET['pokeID'];
	

		$forwardID = $pokeID + 1;
		$next = sprintf("%'03d", $forwardID);

		$previousID = $pokeID - 1;
		$back = sprintf("%'03d", $previousID);
		
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

		<div class="back-to-dex">
			<a href="?page=kanto" class="back-to-dex medium-voice <?=$currentMonster['Type 1']?>">Back to Pokedex</a>	
		</div>
		

		<poke-card class='<?=$currentMonster['Type 1']?>'>
			
		
					<h1 class='poke-name medium-voice'>
						<span class='poke-id'>#<?=$pokeID?></span>
						<?=$currentMonster['Pokemon']?>
					</h1>
					<picture class='detail-img'>
						<img src='<?=$currentMonster['GIF']?>'>
					</picture>	
		

			<?php if ($pokeID == 1) { ?>
			<section class="poke-detail">
				<div class="next-arrows">
					<a href="?page=home"><i class=" fas fa-chevron-left left-arrow"></i></i></a>
					
					<a href="?page=detail&pokeID=<?=$next?>"><i class="fas fa-chevron-right right-arrow"></i></i></a>
				</div>	

			<?php } elseif ($pokeID > 1 && $pokeID < 151 ) { ?>
				
				<section class="poke-detail">
					<div class="next-arrows">
					<a href="?page=detail&pokeID=<?=$back?>"><i class="fas fa-chevron-left left-arrow"></i></i></a>
					
					<a href="?page=detail&pokeID=<?=$next?>"><i class="fas fa-chevron-right right-arrow"></i></i></a>
				</div>

			<?php } elseif ($pokeID >= 151) { ?>
				
				<section class="poke-detail">
				<div class="next-arrows">
					<a href="?page=detail&pokeID=<?=$back?>"><i class="fas fa-chevron-left left-arrow"></i></i></a>
				
					<a href="?page=home"><i class="fas fa-chevron-right right-arrow"></i></i></a>
				</div>

		<?php } ?>

<!-- 			<?php } else { ?>

				<h1>Page Not Found</h1>
				<p>Go back to <a href="?page=home">Home Page</a></p>

			<?php } ?> -->
			</poke-card>
		</inner-column>

				<poke-stuff>
			<inner-column>
				<div class="type-container">
					<p class='type <?=$currentMonster['Type 1']?>'><?=$currentMonster['Type 1']?></p>

					<?php  if ($currentMonster['Type 2']) { ?>
					<p class='type <?=$currentMonster['Type 2']?>'><?=$currentMonster['Type 2']?></p>
					<?php } ?>
				</div>

				<p class="text medium-voice"><?=$currentMonster['Description']?></p>
			</inner-column>
		</poke-stuff>


</section>



