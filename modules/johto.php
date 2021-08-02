


  <?php include('poke-database.php'); ?>
      
  <inner-column>
  <h1 class='loud-voice'>Johto Region</h1>
  <h2 class="loud-voice">Under Construction</h2>
  <ol class='poke-container'>

	  <?php foreach($johto as $pokemon) { 
	     include('modules/poke-card.php');
	  } ?>

	</ol>
	<inner-column>
</section>