<?php

 $id = sprintf("%'03d", $pokemon["id"]);
 $name = $pokemon["Pokemon"];
 $type = $pokemon["Type 1"];
 $image = $pokemon["GIF"];
 
   ?>
 
 <a href="?page=detail&pokeID=<?=$id?>" class='card'>
	<li class='pokemon'>
	  <poke-card id="<?=$id?>" class='<?=$type?>'> 
	      <picture> 
	        <img loading="lazy" class='image' src="<?=$image?>"> 
	      </picture> 

	     <div class="poke-text">
	     	<h4 class='poke-id'> #<?=$id?></h4>
	     	<h2 class='name medium-voice'> <?=$name?> </h2> 
		     <h3 class='type <?=$type?>'> <?=$type?> </h3> 
	     </div>
	  </poke-card>
	</li>
 </a>