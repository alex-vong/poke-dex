<?php

 $id = sprintf("%'03d", $pokemon["id"]);
 $name = $pokemon["name"];
 $type = $pokemon["type"];
 $image = $pokemon["image"];
   ?>
 
	<li class='pokemon'>
	  <poke-card id="<?=$id?>" class='<?=$type?>'> 
	      <picture> 
	        <img class='image' src="<?=$image?>"> 
	      </picture> 

	     <div class="poke-text">
	     	<h4 class='poke-id'> Pokedex #<?=$id?></h4>
	     	<h2 class='name'> <?=$name?> </h2> 
		     <h3 class='type'> <?=$type?> </h3> 
		     <a href="?page=detail&pokeID=<?=$id?>">More Info</a>
	     </div>
	  </poke-card>
	</li>