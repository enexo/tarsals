<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Tarsal Coalition</title>
		<?php wp_head();  ?>
	</head>
<body>
<header>
	<div class="container-fluid">
		<div class="row">
			<div class="menu">
					<?php  wp_nav_menu(
						array(
							'theme_location' => 'top-menu',
							'container_class' => 'custom-menu-class'
						)
					); ?>
			</div>
		</div>
	</div>
</header>

<!--menu_class top-bar-->