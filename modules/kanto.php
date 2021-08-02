
<?php 
			
	$monstersData = file_get_contents('monster-data.json');
	$monsters = json_decode( $monstersData, true);

	?>

      
  <inner-column>
  <h1 class='loud-voice'>Kanto Region</h1>
  <ol class='poke-container'>

	  <?php foreach($monsters as $pokemon) { 
	     include('modules/poke-card.php');
	  } ?>

	</ol>
	<inner-column>
</section>