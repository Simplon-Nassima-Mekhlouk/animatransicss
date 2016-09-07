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
 <!--
<div class="ball1" id="ball100">
</div>
<div class="ball1" id="ball101">
</div>
<div class="ball1" id="ball103">
</div>
<div class="ball1" id="ball104">
</div>
<div class="ball1" id="ball105">
</div>
<div class="ball1" id="ball106">
</div>
<div class="ball2" id="ball200">
</div>
<div class="ball2" id="ball201">
</div>
-->
</div>
<script>
1
var CreateBalls = {
	pickColor: "",
	obj:"",
	color: ["red","green","yellow","blue","purple","grey","black","orange","pink"],
	randomColor: function() {
		var randomNumber =  Math.floor(Math.random()* this.color.length);
	 	this.pickColor = this.color[randomNumber];
	},
	ball: function() {
		this.randomColor();
		this.obj = document.createElement('div');
		this.obj.innerText = "LOL";
		this.obj.id = "ball1";
		this.obj.style.backgroundColor = this.pickColor;
		var container = document.querySelector('#balles');
		// container.appendChild(this.obj);
	}

}
// setInterval(function(){ CreateBalls.ball();console.log(CreateBalls.obj); }, 1000);

CreateBalls.ball();
console.log(CreateBalls.obj);
</script>

<?php include 'footer.php'; ?>
