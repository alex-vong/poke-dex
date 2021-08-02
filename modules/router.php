<?php 
	$page = null; //setting page to a value that does not exist yet

	if ( isset($_GET['page'])) { 
		$page = $_GET['page']; //if page is set then assign it value to $page
	} else {
		$page = 'home'; //if not set then default $page to 'home'
	}
?>