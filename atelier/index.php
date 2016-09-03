<?php 
// Nom du fichier css
// $fichier_css = "style.css"
$fichier_css = "style.css";

include'../head.php'; 
?>
</div> <!-- END SIDEBAR -->

<div class="page">




<!--
<a href="#">
	<section>
		<shadow class="abs-top"></shadow>
		<h2>Exercice 1</h2>
		<div class="col-6 enoncer">
			<p>Realiser un cube qui se déplace de gauche à droite à l'infini.</p>
		</div>
		<div class="col-6 exemple">
			<img src="images/gif/ex1.gif">
		</div>
		<shadow class="abs-bottom"></shadow>
	</section>
</a>
-->


<div id="list">
	
</div>



<script type="text/javascript">

var exercice = {
	directory: "images/gif/",
	gifname: "ex",

	enoncer: [
			"Realiser un cube qui se déplace de gauche à droite à l'infini.",
			"Realiser un cube qui effectue une rotation sur l'axe Y, ainsi qu'un 'scale'."
			],

	getGif: function(nb){
		return this.directory + this.gifname + nb + ".gif"
	},
	getEnonce: function(nb){
		return this.enoncer[nb];
	},
	getExercice: function (nb){
		var content = "	<a href='exercice/" + nb + "/'>\
							<section>\
								<shadow class='abs-top'></shadow>\
								<h2>Exercice " + nb + "</h2>\
								<div class='col-6 enoncer'>\
									<p>" + this.getEnonce(nb)+ "</p>\
								</div>\
								<div class='col-6 exemple'>\
									<img src='" + this.getGif(nb) + "'>\
								</div>\
								<shadow class='abs-bottom'></shadow>\
							</section>\
						</a>";
		return content;
	}	
}


var list = document.getElementById('list');
for (var i = 0; i < 10; i++) {
	list.innerHTML += exercice.getExercice(1);
}

</script>


</div> <!-- END PAGE -->

<?php include'../footer.php'; ?>