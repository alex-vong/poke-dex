 <?php 

// if has name then set it a variable
 //if 


 $name = "Pokemon Name";
 $level = "lvl";
 $type = null;
 $nameError = false;
 $typeError = false;

 if ( isset($_POST['create']) ) {

 	if ( isset( $_POST['name'] )  && strlen( $_POST['name'] ) > 0 ) {
 		$name = ucfirst( $_POST['name'] );
 		// echo $name;
 		} else {
 			$nameError = 'Please enter a Pokemon Name';
 		}
 	

 	if ( isset($_POST['level']) && $_POST['level'] > 0 && $_POST['level'] <= 100 ) {
 		$level = $_POST['level'];
 		// echo $level;
	 	} else {
	 		$levelError = 'Enter lvl between 0 and 100';
	 	}

 	if ( isset($_POST['type']) ) {
 		$type = $_POST['type'];
 		if ( !$type ) {
 		$typeError = 'Please select a type';
 		} else {
 			$type = $_POST['type'];
 			// echo $type;
 		}
 	}

 	if ( $name && $level && $type ) {
 		$pokemon = [
 			$name => $_POST['name'],
 			$level => $_POST['level'],
 			$type => $_POST['type'],
 		];
 		var_dump($pokemon);
 	} else {
 		echo 'No data';
 	}
 	
 } ?>




<inner-column>
	<h1 class='loud-voice'> Add a Pokemon:</h1>

	<form method="POST">
		<field>
			<label for="name">Pokemon Name</label>
			<input id="name" type="text" name="name" placeholder=<?=$name?> >
			<?php if ($nameError) { ?>
				<p><?=$nameError?></p>
			<?php } ?>
		</field>
		<field>
			<label for="level">Pokemon Level</label>
			<input id="level" 
			type="number" 
			name="level"
			placeholder="<?=$level?>">
			<?php if ($levelError) { ?>
				<p><?=$levelError?></p>
			<?php } ?>
		</field>
		<field>
			<label for="type">Choose a Type:</label>

			<select name="type" id="type">
			    <option value="">Pokemon Type:</option>
			    <option value="Grass">Grass</option>
			    <option value="Water">Water</option>
			    <option value="Fire">Fire</option>
			    <option value="Bug">Bug</option>
			    <option value="Normal">Normal</option>
			    <option value="Ground">Ground</option>
			    <option value="Ghost">Ghost</option>
			    <option value="Electric">Electric</option>
			    <option value="Psychic">Psychic</option>
			    <option value="Ice">Ice</option>
			    <option value="Dragon">Dragon</option>
			    <option value="Fighting">Fighting</option>
			    <option value="Flying">Flying</option>
			    <option value="Rock">Rock</option>
			    <option value="Poison">Poison</option>
			</select>
			<?php if ($typeError) { ?>
				<p><?=$typeError?></p>
			<?php } ?>
		</field>


		<button type="submit" name="create">Create Pokemon</button>

		
	</form>

</inner-column>