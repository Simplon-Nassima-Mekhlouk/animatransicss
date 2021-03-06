<?php 
// Nom du fichier css
// $fichier_css = "style.css"
$fichier_css = "style.css";

include'../head.php'; 
?>
</div> <!-- END SIDEBAR -->

<div id="load">
	<img src="images/rolling.gif">
</div>

<div class="page">


<div id="popup" style="display: none;">
	<div id="content">
		<button id="close" title="Fermer"><i class="fa fa-1x fa-times" aria-hidden="true"></i></button>
		<h2 id="title"></h2>
		<h3 id="text"></h3>
		<div class="afaire">
			<img src="">
		</div>	
		<div id="btn-choice" class="btn-choice-lng sm">
			<button id="btn-html" data-lng="html">HTML</button>
			<button id="btn-css" data-lng="css" class="active">CSS</button>
		</div>
		<div class="exercice">
			<form>
				<div id="html" class="col-6">
				<span class="lg" style="margin-left: 40px;">HTML</span>
					<textarea id="editor_html"></textarea>
				</div>
				<div id="css" class="col-6">
				<span class="lg" style="margin-left: 47px;">CSS</span>
				<textarea id="editor_css"></textarea>
				</div>
				<p id="mfs">Pressez F11 pour afficher le code en plein ecran</p>
				<!--<button onclick="verifCss('code_css'); return false">Verification du CSS</button>-->
			</form>
			<section>
				<div class="col-6 resultat">
					<style id="new_css"></style>
					<div id="new_html"></div>
				</div>
			</section>
		</div>
	</div>
</div>

<div id="list"></div>


<?php include '../lib/aceditor/acestart.php' ?>
<script type="text/javascript">


var $ = document.getElementById.bind(document);
	var dom = require("ace/lib/dom");

	//add command to all new editor instaces
	require("ace/commands/default_commands").commands.push({
	    name: "Toggle Fullscreen",
	    bindKey: "F11",
	    exec: function(editor_css) {
	        var fullScreen = dom.toggleCssClass(document.body, "fullScreen")
	        dom.setCssClass(editor_css.container, "fullScreen", fullScreen)
	        editor_css.setAutoScrollEditorIntoView(!fullScreen)
	        editor_css.resize()
	    }
	})
// HTML

	// create first editor
	ace.require("ace/ext/language_tools");
	var editor_html = ace.edit("editor_html");
	editor_html.setTheme("ace/theme/monokai");
	editor_html.session.setMode("ace/mode/html");
	editor_html.renderer.setScrollMargin(10, 10);
	editor_html.$blockScrolling = Infinity;
	editor_html.setOptions({
	    // "scrollPastEnd": 0.8,
	    autoScrollEditorIntoView: true,
	    enableBasicAutocompletion: true,
        enableSnippets: true,
        enableLiveAutocompletion: true,
        tabSize: 1,
    	useSoftTabs: true
        //wrap: 75
        //maxLines: 5,
	});

	var themes = require("ace/ext/themelist").themes.map(function(t){return t.theme});

// CSS

	// create first editor
	var editor_css = ace.edit("editor_css");
	editor_css.setTheme("ace/theme/monokai");
	editor_css.session.setMode("ace/mode/css");
	editor_css.renderer.setScrollMargin(10, 10);
	editor_css.$blockScrolling = Infinity;
	editor_css.setOptions({
	    // "scrollPastEnd": 0.8,
	    autoScrollEditorIntoView: true,
	    enableBasicAutocompletion: true,
        enableSnippets: true,
        enableLiveAutocompletion: true,
        tabSize: 1,
    	useSoftTabs: true
        //wrap: 75
	});

	var themes = require("ace/ext/themelist").themes.map(function(t){return t.theme});



window.onload=function()
{
	var load = document.getElementById('load');
	setTimeout(function(){load.style.opacity = "0";}, 2000);
	setTimeout(function(){load.style.display = "none"; load.remove();}, 2100);


	document.getElementById('html').addEventListener('keyup', function(e)
	{
		var new_html = document.getElementById('new_html');
		new_html.innerHTML = editor_html.getValue();
	});

	document.getElementById('css').addEventListener('keyup', function(e)
	{
		var new_css = document.getElementById('new_css');
		new_css.innerHTML = editor_css.getValue();
	});




	function Popup (obj_exercice) {
		var popup = document.getElementById('popup');
		this.title = "Exercice " + (obj_exercice.nb + 1);
		this.text = obj_exercice.getText();
		this.css = obj_exercice.css;
		this.html = obj_exercice.html;

		document.getElementById('title').innerText = this.title;
		document.getElementById('text').innerText = this.text;

		popup.querySelector('.afaire > img').setAttribute('src', obj_exercice.getGif());

		editor_css.setValue(this.css, 0);
		editor_html.setValue(this.html, 0);

		var new_html = document.getElementById('new_html');
		new_html.innerHTML = editor_html.getValue();
		var new_css = document.getElementById('new_css');
		new_css.innerHTML = editor_css.getValue();

		var scroll = document.querySelector('body').scrollTop - 80;

		popup.setAttribute('style', 'display: block; top:' + scroll);
		setTimeout(function(){
			popup.style.opacity = "1";
			popup.setAttribute('style', popup.getAttribute('style') + '-webkit-filter: blur(0px);');
		}, 100)
		document.body.setAttribute('style', 'overflow:hidden;')
	}


	function Exercice (ex_nb, obj_fourniture_exercice){
			var popup = document.getElementById('popup');

			var directory = "images/gif/";
			var gifname = "ex";
			this.nb = ex_nb;

			this.text = obj_fourniture_exercice.text;
			this.css = obj_fourniture_exercice.css;
			this.html = obj_fourniture_exercice.html;

			this.getGif = function(){
				//return this.directory + this.gifname + this.nb + ".gif"
				return directory + gifname + "1" + ".gif"

			};

			this.getText = function(){
				return this.text;
			};

			this.getExercice = function (){
				//<section onclick='exercices[" + this.nb + "].afficheExercice()'>
				var content = "	<section data-nb=" + this.nb + ">\
									<shadow class='abs-top'></shadow>\
									<h2>Exercice " + (this.nb + 1) + "</h2>\
									<div class='col-6 text'>\
										<p>" + this.getText()+ "</p>\
									</div>\
									<div class='col-6 exemple'>\
										<img src='" + this.getGif(this.nb) + "'>\
									</div>\
									<shadow class='abs-bottom'></shadow>\
								</section>";
				return content;
			};
	};


	var bloc_css = ".block{\n\
		width: 60px;\n\
		height: 60px;\n\
		background-color: rgb(238,242,243);\n\
		border-bottom: 4px solid red;\n\
		border-right: 4px solid blue;\n\
		border-left: 4px solid yellow;\n\
		border-top: 4px solid green;\n\
		animation-duration: 4000ms;  /* durée animation en milliseconde */\n\
		animation-timing-function: linear; /* courbe de vitesse animation notamment entre les differentes phases. */\n\
		animation-iteration-count: infinite; /* defini le nombre de fois qu'on applique l'animation à l'objet*/\n\
		}";
	var fournituresExercices = [
		{
			text: "Simple transition.",
			css: bloc_css + "\n\
				#giftranslatex {\n\
					  animation-name:translatex;   /* on annonce le nom animation defini dans le keyframes */\n\
					}\n\
					@keyframes translatex {\n\
					  0% /* etape de l'animation */\n\
					 {\n\
					   transform: translateX(0vw);\n\
					  }\n\
					  25%\n\
					 {\n\
					   transform: translateX(10vw);\n\
					  }\n\
					  50%\n\
					 {\n\
					   transform: translateX(20vw);\n\
					  }\n\
					  75%\n\
					 {\n\
					   transform: translateX(10vw);\n\
					  }\n\
					  100%\n\
					 {\n\
					   transform: translateX(0vw);\n\
					  }\n\
					}",
			html: '<div id="giftranslatex" class="block"></div>'
		},
		{
			text: "Rotation pendant une transition.",
			css: bloc_css + "\n\
				#giftranslatexandrotate {\n\
				  animation-name:translateandrotate;\n\
				}\n\
				@keyframes translateandrotate { /* ATTENTON QUAND ON FAIT UNE ANIMATION TOUJOURS SE BASER SUR LA POSITION INITIAL */\n\
				  0%\n\
				 {\n\
				   transform: translateX(0px);\n\
				  }\n\
				  25%\n\
				 {\n\
				   transform: translateX(120px) rotate(90deg);\n\
				  }\n\
				  50%\n\
				 {\n\
				   transform: translateX(240px) rotate(180deg); /*il ne fait pas vraiment un 180° à ce moment la, il se base juste de la position initiale malgré la position de l'animation precedente. */\n\
				  }\n\
				  75%\n\
				 {\n\
				   transform: translateX(120px) rotate(90deg) ;\n\
				  }\n\
				  100%\n\
				 {\n\
				   transform: translateX(0px); /* n'oublie pas de revenir à votre position initiale pour une animation fluide et ne pas avoir un retour brusque*/\n\
				  }\n\
				}",
			html: '<div id="giftranslatexandrotate" class="block"></div>'
		},
		{
			text: "Rotation pendant une transition à la fois sur X et Y",
			css: bloc_css + "\n\
				#giftranslaterotatexy {\n\
				  animation-name:translateandrotatexy;\n\
				}\n\
				@keyframes translateandrotatexy {\n\
				  0%\n\
				 {\n\
				   transform: translateX(0px);\n\
				  }\n\
				  25%\n\
				 {\n\
				   transform: translateX(120px) translateY(80px) rotate(9\n\0deg);\n\
				  }\n\
				  50%\n\
				 {\n\
				   transform: translateX(240px)rotate(-180deg); /*leurs montré un graph comment fonctionne rotate et X/Y*/\n\
				  }\n\
				  75%\n\
				 {\n\
				   transform: translateX(120px) translateY(80px) rotate(90deg);\n\
				  }\n\
				  100%\n\
				 {\n\
				   transform: translateX(0px);\n\
				  }\n\
				}",
			html: '<div id="giftranslaterotatexy" class="block"></div>'
		},
		{
			text: "Changement de plusieurs propriétés pendant une transition à la fois sur X et Y",
			css: bloc_css + "\n\
				#giftranslatenewprop {\n\
				  animation-name:translatenewprop;\n\
				}\n\
				@keyframes translatenewprop {\n\
				  0% /* etape de l'animation */\n\
				 {\n\
				   transform: translateX(0px);\n\
				   background-color: rgba(220, 76, 65, 1);\n\
				  }\n\
				  25%\n\
				 {\n\
				   transform: translateX(120px) scale(1.5) ;\n\
				   background-color: rgba(220, 76, 65, 1);/* à mettre apres transform, l'animation */\n\
				   border-radius: 80px;\n\
				  }\n\
				  50%\n\
				 {\n\
				   transform: translateX(240px) scale(1.1);\n\
				   background-color: rgba(26, 161, 95, 1);\n\
				   border-radius: 0px;\n\
				  }\n\
				  75%\n\
				 {\n\
				   transform: translateX(120px) scale(1.5);\n\
				   background-color: rgb(255, 206, 69);\n\
				   border-radius: 80px;\n\
				  }\n\
				  100%\n\
				 {\n\
				   transform: translateX(0px);\n\
				   background-color: rgba(220, 76, 65, 1)\n\
				  }\n\
				}",
			html: '<div id="giftranslatenewprop" class="block"></div>'
		},
		{
			text: "Animation sur plusieurs Div",
			css: bloc_css + "\n\
				#gifinnercircle {\n\
				  animation-name:innercircle;\n\
				  border-radius: 80px;\n\
				  animation-duration: 2s;\n\
				}\n\
				@keyframes innercircle {\n\
				    from /*équivalent à 0% */\n\
				      {\n\
				       transform:rotate(0deg);\n\
				      }\n\
				    to /* équivalent à 100% */\n\
				      {\n\
				       transform:rotate(-360deg);\n\
				      }\n\
				}",
			html: '<div id="gifinnercircle" class="block"></div>'
		}];


	var exercices = new Array();

	var list = document.getElementById('list');
	for (var i = 0; i < fournituresExercices.length; i++) {
		var tmp_exercice = new Exercice(i, fournituresExercices[i]);
		list.innerHTML += tmp_exercice.getExercice(i);
		exercices.push(tmp_exercice);
	};
	
	var list_section = document.querySelectorAll('#list > section');
	for (var i = 0; i < list_section.length; i++) {
		list_section[i].addEventListener('click', function(e)
		{	
			var nb = this.getAttribute('data-nb');
			var popup = new Popup(exercices[nb]);
			//console.log(editor_css.getValue());
		});
	};


	function choiceLng(element)
	{
		var lng = element.toElement.innerText;
		if (lng == "HTML") {
			document.querySelector('form > #html').style.display = "block";
			document.querySelector('#btn-html').className = "active";
			document.querySelector('form > #css').style.display = "none";
			document.querySelector('#btn-css').className = "";
		}
		if (lng == "CSS") {
			document.querySelector('form > #css').style.display = "block";
			document.querySelector('#btn-css').className = "active";
			document.querySelector('form > #html').style.display = "none";
			document.querySelector('#btn-html').className = "";
		}
	}

	document.getElementById('btn-html').addEventListener('click', choiceLng);
	document.getElementById('btn-css').addEventListener('click', choiceLng);

	document.getElementById('close').addEventListener('click', function(e)
	{	
		var popup = document.getElementById('popup');
		popup.style.opacity = "0";
		setTimeout(function() {
			popup.setAttribute('style', popup.getAttribute('style') + '-webkit-filter: blur(50px);');
			popup.setAttribute('style', 'display: none');
		}, 300)
		document.body.setAttribute('style', 'overflow:auto;')
		document.getElementById('mfs').style.visibility = "hidden";
	});


	window.addEventListener('resize', function(){
		/*
		console.log('bodyWidth: ',document.body.clientWidth)
		console.log('bodyHeight: ',document.body.clientHeight)
		console.log('WindowWidth: ',window.innerWidth)
		console.log('WindowHeight: ',window.innerHeight)
		*/
		if (window.innerWidth > 992) {
			document.getElementById('btn-choice').style.display = "none";
		} else {
			document.getElementById('btn-choice').style.display = "block";
		}
	}, true)

	function afficheMessageForFullScreen(){
		document.getElementById('mfs').style.visibility = "visible";
	}

	editor_css.on("focus", afficheMessageForFullScreen)

}</script>


</div> <!-- END PAGE -->

<?php include'../footer.php'; ?>