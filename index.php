<!DOCTYPE html>

<?php require 'modules/router.php';?>

<html lang="en">

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

			if ($page == 'detail') {
				include 'modules/detail.php';
			}
			if ($page == 'create') {
				include 'modules/create.php';
			}
	 ?>
	</main>

	
</body>
</html>