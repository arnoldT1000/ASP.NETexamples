<!DOCTYPE html>
<html lang="en">
<head>




	
	<?php wp_head();?>

</head>
<body id="page1">
<header class="w3-container w3-blue">


	<div class="container">


		<?php 
	
			wp_nav_menu(
					array(

						'theme_location' => 'top-menu',
						//'menu' => 'Top Bar'
						'menu_class' => 'top-bar'
					)
			);
		
		?>
	</div>


</header>
<!-- / header -->


	




