<?php 
// Nom du fichier css
// $fichier_css = "style.css"
$fichier_css = "style.css";

include'../head.php'; 
?>
</div> <!-- END SIDEBAR -->

<div class="page">

<div id="list"></div>



<script type="text/javascript">



function exercice (ex_nb, aray_text){
		this.directory = "images/gif/";
		this.gifname = "ex";
		this.nb = ex_nb;
		this.text = aray_text;

		this.getGif = function(){
			//return this.directory + this.gifname + this.nb + ".gif"
			return this.directory + this.gifname + "1" + ".gif"

		};

		this.getText = function(){
			return this.text[this.nb];
		};

		this.getExercice = function (){
			var content = "	<section onclick='exercice.afficheExercice(this, " + this.nb + ")'>\
								<shadow class='abs-top'></shadow>\
								<h2>Exercice " + this.nb + "</h2>\
								<div class='col-6 text'>\
									<p>" + this.getText(this.nb)+ "</p>\
								</div>\
								<div class='col-6 exemple'>\
									<img src='" + this.getGif(this.nb) + "'>\
								</div>\
								<shadow class='abs-bottom'></shadow>\
							</section>";
			return content;
		};

		this.afficheExercice = function(element){
			console.log('clic');
		};
}



var text = [
	"Simple transition.",
	"Rotation pendant une transition.",
	"Rotation pendant une transition à la fois sur X et Y",
	"Changement de plusieurs propriétés pendant une transition à la fois sur X et Y",
	"Animation sur plusieurs Div"];


var Exercices = new Array();

var list = document.getElementById('list');
for (var i = 0; i < text.length; i++) {
	var tmp_exercice = new exercice(i, text);
	list.innerHTML += tmp_exercice.getExercice(i);
	Exercices.push(tmp_exercice);
}


</script>


</div> <!-- END PAGE -->

<?php include'../footer.php'; ?>