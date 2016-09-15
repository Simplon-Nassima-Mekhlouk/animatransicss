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
			echo '<link rel="stylesheet" type="text/css" href="../lib/prism/prism.css">
				<link rel="stylesheet" type="text/css" href="../lib/aceditor/acestart.css">';
			echo '<link rel="stylesheet" type="text/css" href="../layout.css">';
			echo $css = '<link rel="stylesheet" type="text/css" href="'. $fichier_css .'">';

		} else {
			echo '<link rel="stylesheet" type="text/css" href="lib/prism/prism.css">';
			echo '<link rel="stylesheet" type="text/css" href="layout.css">';
		}

		if (isset($index)) {
			echo '<link rel="stylesheet" type="text/css" href="style.css">';
		}
 	?>
</head>

<body>
	<div id="active_menu">
		<a href="#slideleft">
			<span></span>
			<span></span>
			<span></span>
		</a>
		</div>
	<header id="header">
			<div class="content_header">
			<div class="logo"><img src="h1index.png"></div>
			<div class="moon">
			<div class="sun"></div>
		</div>
			<div class="clouds-wrapper">
						<ul class="clouds1">
							<li></li>
							<li></li>
							<li></li>
						</ul>
				<div class="clouds2-container">
						<ul class="clouds2">
							<li></li>
							<li></li>
							<li></li>
						</ul>
				</div>
			 </div>
		  <div class="content_mountains">
		    <ul class="mountains">
		      <li class="peak1"></li>
		      <li class="peak2"></li>
		      <li class="peak3"></li>
					<li class="peak4"></li>
		    </ul>
		  </div>
			</div>
	</header>
	<div class="sidebar"  id="slideleft">
		<div class="leftbar">
			<ul>
				<a href="#">
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
				<a href="atelier/">
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
