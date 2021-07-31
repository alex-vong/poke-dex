

<h1>Kanto Region</h1>

  <?php include('poke-database.php'); ?>
      
  <inner-column>
  <ol class='poke-container'>

	  <?php foreach($kanto as $pokemon) { 
	     include('modules/poke-card.php');
	  } ?>

	</ol>
	<inner-column>
</section>