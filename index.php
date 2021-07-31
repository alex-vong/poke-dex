<!DOCTYPE html>

<?php 
	$page = null; //setting page to a value that does not exist yet

	if ( isset($_GET['page'])) { 
		$page = $_GET['page']; //if page is set then assign it value to $page
	} else {
		$page = 'home'; //if not set then default $page to 'home'
	}
?>
<html lang="en">

<!-- 
pages: home, kanto list, johto list, hoenn list -->

<head>
	<?php include 'head.php' ?>
</head>


<body>

	<header>
		<?php include 'modules/site-menu.php' ?>
	</header>

	<main>
		<?php 
			if ($page === 'home') {
				include 'home.php';
			}
			if ($page == 'kanto') {
				include 'modules/kanto.php';
			}
			if ($page == 'johto') {
				include 'modules/johto.php';
			}
			if ($page == 'hoenn') {
				include 'modules/hoenn.php';
			}
			if ($page == 'detail') {
				include 'modules/detail.php';
			}
	 ?>
	</main>

	
</body>
</html>