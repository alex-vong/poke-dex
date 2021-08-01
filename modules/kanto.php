



  <?php include('poke-database.php'); ?>
      
  <inner-column>
  <h1 class='loud-voice'>Kanto Region</h1>
  <ol class='poke-container'>

	  <?php foreach($kanto as $pokemon) { 
	     include('modules/poke-card.php');
	  } ?>

	</ol>
	<inner-column>
</section>