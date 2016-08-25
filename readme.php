Créer un nouveau dossier et créer un fichier index.php suivi du code ci-dessous:



-	Squelette de la nouvelle page :

<?php 
// Nom du fichier css
// $fichier_css = "style.css"
$fichier_css = "style.css";

include'../head.php'; 
?>
</div> <!-- END SIDEBAR -->

<div class="page">

 <!--- CONTENU DE LA PAGE -->

</div> <!-- END PAGE -->

<script type="text/javascript">
	function toggle(param)
	{
		var parent = param.parentNode;
		var toggle_status = parent.getAttribute('data-toggle');
		var icon = param.childNodes[1];

		//console.log(icon);

		if (toggle_status == 'false') {
			icon.classList.remove('fa-chevron-right');
			icon.classList.add('fa-chevron-down');
			parent.style.height = "auto";
			parent.setAttribute('data-toggle', 'true');;
		}
		if (toggle_status == 'true') {
			icon.classList.remove('fa-chevron-down');
			icon.classList.add('fa-chevron-right');
			parent.style.height = "50px";
			parent.setAttribute('data-toggle', 'false');
		}
	}
</script>

<?php include'../footer.php'; ?>