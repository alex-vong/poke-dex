<h1>Hoenn Region</h1>

  <?php include('poke-database.php'); ?>
      
  <inner-column>
  <ol class='poke-container'>

	  <?php foreach($hoenn as $pokemon) { 
	     include('poke-card.php');
	   } ?>

	</ol>
	<inner-column>
</section>