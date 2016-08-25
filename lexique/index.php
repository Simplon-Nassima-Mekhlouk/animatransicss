<?php 
// Nom du fichier css
// $fichier_css = "style.css"
$fichier_css = "style.css";

include'../head.php'; 
?>
</div> <!-- END SIDEBAR -->

<div class="page">




<div class="row">
	<h1>Transition</h1>
	<p>
		Les transitions CSS permettent de créer des transitions harmonieuses entre les valeurs des propriétés CSS concernées. Elles permettent aussi de définir leur évolution (accélération/décélération), via les fonctions de minutage. 
	</p>
	<h3>Propriétés :</h3>
	<section data-toggle="false">
		<h3 id="test" onclick="toggle(this)">transition-delay<i class="fa fa-1x fa-chevron-right" aria-hidden="true"></i></h3>
		<div class="contenu">
			<p>
				La propriété transition-delay indique la durée à attendre avant de débuter la transition qui s'applique pour un changement de propriété.
			</p>
			<p>
				Une valeur de 0s ou 0ms indique que l'animation correspondante démarrera immédiatement lorsque la valeur sera modifiée. Une valeur positive permettra d'attendre avant de démarrer l'effet de transition. Une valeur négative lancera l'animation immédiatement mais à partir d'un état intermédiaire (comme si la  transition avait déjà commencé).
			</p>
			<div class="bloc">
				<h2>Syntaxe</h2>
				<pre class="line-numbers language-css">
				<code>/* Valeurs temporelles */
				/* Type &#139;time&#155; */
				transition-delay: 3s;
				transition-delay: 2s, 4ms;

				/* Valeurs globales */
				transition-delay: inherit;
				transition-delay: initial;
				transition-delay: unset;</code>
				</pre>
			</div>
		</div>
	</section>

	<section data-toggle="false">
		<h3 id="test" onclick="toggle(this)">transition-duration<i class="fa fa-1x fa-chevron-right" aria-hidden="true"></i></h3>
		<div class="contenu">
			<p>
				La propriété transition-duration définit le nombre de secondes ou de millisecondes que doit durer une animation. La valeur par défaut, 0s, indique qu'il n'y aura aucune animation.
			</p>
			<div class="bloc">
				<h2>Syntaxe</h2>
				<pre class="line-numbers language-css">
					<code>/* Valeurs temporelles */
					/* Type &#139;time&#155; */
					transition-duration: 6s;
					transition-duration: 120ms;
					transition-duration: 1s, 15s;
					transition-duration: 10s, 30s, 230ms;

					/* Valeurs globales */
					transition-duration: inherit;
					transition-duration: initial;
					transition-duration: unset;</code>
				</pre>
			</div>
		</div>
	</section>

	<section data-toggle="false">
		<h3 id="test" onclick="toggle(this)">transition-property<i class="fa fa-1x fa-chevron-right" aria-hidden="true"></i></h3>
		<div class="contenu">
			<p>
				La propriété transition-property est utilisée pour désigner les noms des propriétés CSS sur lesquelles un effet de transition devrait être appliqué.
			</p>
			<p>
				Si vous définissez une propriété raccourcie (par exemple background), toutes les propriétés détaillées correspondantes seront animées de la même façon.
			</p>
			<div class="bloc">
				<h2>Valeur initiale</h2>
				<pre class="line-numbers language-css">
					<code>all</code>
				</pre>
			</div>
			<div class="bloc">
				<h2>Syntaxe</h2>
				<pre class="line-numbers language-css">
					<code>/* Avec un mot-clé */
					transition-property: none;
					transition-property: all;
					transition-property: test_05;
					transition-property: -specific;
					transition-property: sliding-vertically;

					transition-property: test1;
					transition-property: test1, animation4;
					transition-property: all, height, all;
					transition-property: all, -moz-specific, sliding;

					/* Avec des valeurs globales */
					transition-property: inherit;
					transition-property: initial;
					transition-property: unset;</code>
				</pre>
			</div>
		</div>
	</section>

	<section data-toggle="false">
		<h3 id="test" onclick="toggle(this)">transition-timing-function<i class="fa fa-1x fa-chevron-right" aria-hidden="true"></i></h3>
		<div class="contenu">
			<p>
				La propriété transition-timing-function est utilisée pour décrire comment les valeurs intermédiaires des propriétés CSS affectées par un effet de transition sont calculées. Ceci permet donc de définir une courbe d'accelération, de manière à ce que la vitesse de la transition varie au cours de sa durée.
			</p>
			<p>
				Cette courbe d'accelération est définie en utilisant une &#139;timing-function&#155; pour chacune des propriétés à animer.
			</p>

			<p>
				Il est possible de définir plusieurs fonctions de temporisation ; chacune sera appliquée à la propriété correspondante listée avec la propriété transition-property, qui agit comme liste maîtresse. S'il y a moins de fonctions définies que d'éléments dans la liste, les valeurs manquantes sont remplacées par la valeur par défaut (<span class="code">ease</span>). S'il y a trop de fonctions de temporisation, la liste est simplement tronquée à la bonne dimension. Dans les deux cas, la déclaration CSS reste valide.
			</p>
			<div class="bloc">
				<h2>Valeur initial</h2>
				<pre class="line-numbers language-css">
					<code>ease</code>
				</pre>
			</div>
			<div class="bloc">
				<h2>Syntaxe</h2>
				<pre class="line-numbers language-css">
					<code>/* Avec un mot-clé */
					transition-timing-function: ease;
					transition-timing-function: ease-in;
					transition-timing-function: ease-out;
					transition-timing-function: ease-in-out;
					transition-timing-function: linear;
					transition-timing-function: step-start;
					transition-timing-function: step-end;

					/* Avec des valeurs de type fonction */
					transition-timing-function: steps(4, end);
					transition-timing-function: cubic-bezier(0.1, 0.7, 1.0, 0.1);

					/* Avec plusieurs fonctions de temps */
					transition-timing-function: ease, step-start, cubic-bezier(0.1, 0.7, 1.0, 0.1);

					/* Valeurs globales */
					transition-timing-function: inherit;
					transition-timing-function: initial;
					transition-timing-function: unset;</code>
				</pre>
			</div>
		</div>
	</section>

	<section data-toggle="false">
		<h3 id="test" onclick="toggle(this)">transition (raccourci) <i class="fa fa-1x fa-chevron-right" aria-hidden="true"></i></h3>
		<div class="contenu">
			<p>
				La propriété transition est une propriété raccourci pour les propriétés transition-property, transition-duration, transition-timing-function et transition-delay. Elle permet de définir la transition entre deux états d'un élément. Les différents états peuvent être définis à l'aide de pseudo-classes telles que <span class="code">:hover</span> ou <span class="code">:active</span> ou être définis dynamiquement avec JavaScript.
			</p>
			<div class="bloc">
				<h2>Valeurs Initiales</h2>
				<p>
				Valeur initiale	pour chaque propriété individuelle de la propriété raccourci :
				</p>				
				<pre class="language-css">
					<code>transition-delay: 0s
					transition-duration: 0s
					transition-property: all
					transition-timing-function: ease</code>
				</pre>
			</div>
			<div class="bloc">
			<h2>Syntaxe</h2>
				<pre class="line-numbers language-css">
				<code>/* S'applique à une propriété */
				/* on a le nom et la durée */
				transition: margin-left 4s;

				/* nom de la propriété | durée | retard */
				transition: margin-left 4s 1s;

				/* nom | durée | fonction | retard */
				transition: margin-left 4s ease-in-out 1s;

				/* S'applique à deux propriétés */
				transition: margin-left 4s, color 1s;

				/* S'applique à toutes les propriétés modifiées */
				transition: all 0.5s ease-out;

				/* Valeurs globales */
				transition: inherit;
				transition: initial;
				transition: unset;</code>
				</pre>
			</div>
		</div>
	</section>
</div>

<div class="row">
	<h1>Animation</h1>
	<p>
		Les animations CSS sont un module CSS qui définit la façon dont les valeurs des propriétés CSS peuvent être animées au fur et à mesure d'une période via des étapes intermédiaires (keyframes en anglais). Le comportement de ces animations séquencées peut être défini en termes de durée, de nombre de répétitions et de la façon dont elles sont répétées.
	</p>
	<h3>Propriétés CSS:</h3>
	<section data-toggle="false">
		<h3 id="test" onclick="toggle(this)">animation-delay<i class="fa fa-1x fa-chevron-right" aria-hidden="true"></i></h3>
		<div class="contenu">
			<p>
				La propriété animation-delay définit la durée d'attente avant de démarrer une animation une fois qu'elle a été appliquée à un élément.
			</p>

			<p>
				La valeur par défaut, 0s, indique que l'animation doit démarrer dès qu'elle est appliquée. Dans les autres cas, la valeur indique le décalage à observer entre le début de l'animation et le moment où celle-ci a été appliquée sur l'élément.
			</p>

			<p>
				Si des valeurs négatives sont utilisées, l'animation débutera immédiatement en étant déjà « avancée ». Par exemple, si on utilise la valeur -1s comme durée, l'animation commencera immédiatement avec l'état qu'elle aurait « normalement » eue au bout d'une seconde.
			</p>

			<div class="bloc">
				<h2>Syntaxe</h2>
				<pre class="line-numbers language-css">
				<code>animation-delay: 3s;
				animation-delay: 2s, 4ms;</code>
				</pre>
			</div>
		</div>
	</section>
</div>




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