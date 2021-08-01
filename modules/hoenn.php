


  <?php include('poke-database.php'); ?>
      
  <inner-column>
  <h1 class='loud-voice'>Hoenn Region</h1>
  <ol class='poke-container'>

	  <?php foreach($hoenn as $pokemon) { 
	     include('modules/poke-card.php');
	  } ?>

	</ol>
	<inner-column>
</section>