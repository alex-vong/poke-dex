<h1>Johto Region</h1>

  <?php include('poke-database.php'); ?>
      
  <inner-column>
  <ol class='poke-container'>

	  <?php foreach($johto as $pokemon) { 
	     include('poke-card.php');
	   } ?>

	</ol>
	<inner-column>
</section>