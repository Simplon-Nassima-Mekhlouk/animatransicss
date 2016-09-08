<?php
$index = true;
include 'head.php';
?>
</div> <!-- END SIDEBAR -->

<div class="page">


	<a href="animation/">
		<div class="animation">
			<h1>Animation</h1>
		</div>
	</a>
	<a href="transition/">
		<div class="transition">
			<h1>Transition</h1>
		</div>
	</a>


</div> <!-- END PAGE -->
 <div id="balles">
</div>
<style id="newstylecss">

</style>
<script>
var CreateBalls = {
	pickColor: "",
	obj:"",
	color: ["red","green","yellow","blue","purple","grey","black","orange","pink"],
	addKeyframe: function() {
	 var screenSize = window.innerWidth;
	 var randomTranslate = function() {
		 return Math.floor(Math.random()* screenSize)
	 };
	 var randomAnimDuration = function() {
		 return Math.floor(Math.random()* 10000)
	 }; // var pour appliqué une durée aléatoirement. || animation-duration:" + randomAnimDuration() +"ms;"+ "\n\
	 var styleDiv = document.querySelector("#newstylecss");
	 var ballcss = "#ball" + i + "{\n\
		animation-name: animball" + i + ";" + "\n\
		animation-delay:" + randomAnimDuration() +"ms;"+ "\n\
	 }\n\
	 @keyframes animball" + i + " {\n\
		 0% {\n\
				 transform: translate(" + randomTranslate() + "px, " + randomTranslate() + "px);\n\
				 opacity: 1;\n\
		 }\n\
		 20% {\n\
				 transform: translate(" + randomTranslate() + "px, " + randomTranslate() + "px);\n\
				 opacity: 1;\n\
		 }\n\
		 40% {\n\
				 transform: translate(" + randomTranslate() + "px, " + randomTranslate() + "px);\n\
				 opacity: 1;\n\
		 }\n\
		 60% {\n\
				 transform: translate(" + randomTranslate() + "px, " + randomTranslate() + "px);\n\
				 opacity: 1;\n\
		 }\n\
		 80% {\n\
				 transform: translate(" + randomTranslate() + "px, " + randomTranslate() + "px);\n\
				 opacity: 1;\n\
		 }\n\
		 100% {\n\
				 transform: translate(" + randomTranslate() + "px, " + randomTranslate() + "px);\n\
				 opacity: 1;\n\
		 }\n\
	 }\n\
	 ";
	 console.log(ballcss);
	 styleDiv.innerHTML += ballcss;
 							 },
	randomColor: function() {
		var randomNumber =  Math.floor(Math.random()* this.color.length);
	 	this.pickColor = this.color[randomNumber];
							 },
	ball: function() {
		var container = document.querySelector('#balles');
		this.randomColor();
		this.addKeyframe();
		this.obj = document.createElement('div');
		this.obj.innerText = "";
		this.obj.id = "ball" + i;
		this.obj.className = "ball";
		this.obj.style.backgroundColor = this.pickColor;
		container.appendChild(this.obj);
			  }

}

for (var i = 0; i < 100; i++){
CreateBalls.ball();

};
</script>

<?php include 'footer.php'; ?>
