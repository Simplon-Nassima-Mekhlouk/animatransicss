<head>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>Animation/Transition</title>
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Mono|Lato" rel="stylesheet">
	<link rel="icon" class="fa fa-css3" aria-hidden="true" />
	<?php
	// Si la variable $fichier_css existe
	// Nous mettons une balise avec le fichier css
		if (isset($fichier_css)) {
			echo '<link rel="stylesheet" type="text/css" href="../lib/prism.css">';
			echo '<link rel="stylesheet" type="text/css" href="../layout.css">';
			echo $css = '<link rel="stylesheet" type="text/css" href="'. $fichier_css .'">';

		} else {
			echo '<link rel="stylesheet" type="text/css" href="lib/prism.css">';
			echo '<link rel="stylesheet" type="text/css" href="layout.css">';
		}

		if (isset($index)) {
			echo '<link rel="stylesheet" type="text/css" href="style.css">';
		}
 	?>
</head>

<body>

	<header id="header">
		<div id="active_menu">
			<a href="#slideleft">
				<span></span>
				<span></span>
				<span></span>
			</a>
		</div>
		<a href="http://localhost/animtransicss/">Animation & Transition Css</a>
	</header>
	<div class="sidebar"  id="slideleft">
		<div class="leftbar">
			<ul>
				<a href="http://localhost/animtransicss/">
					<li class="green">
						<i class="fa fa-home fa-2x" aria-hidden="true"></i>
						<h3>Home</h3>
					</li>
				</a>
				</a>
				<a href="#">
					<li class="yellow">
						<i class="fa fa-clone fa-2x" aria-hidden="true"></i>
						<h3>Animation</h3>
					</li>
				</a>
				<a href="#">
					<li class="blue">
						<i class="fa fa-exchange fa-2x" aria-hidden="true"></i>
						<h3>Transition</h3>
					</li>
				</a>
				<a href="#">
					<li class="black">
						<i class="fa fa-book fa-2x" aria-hidden="true"></i>
						<h3>Atelier</h3>
					</li>
				</a>
				<a href="annexe/">
					<li class="annexe">
						<i class="fa fa-book fa-2x" aria-hidden="true"></i>
						<h3>Annexe</h3>
					</li>
				</a>
				<a href="#">
					<li class="orange">
						<i class="fa fa-github fa-2x" aria-hidden="true"></i>
						<h3>Github</h3>
					</li>
				</a>
			</ul>
		</div>
		<a href="#" class="leftbarmenuclose">
			<h6>Fermer</h6>
		</a>
