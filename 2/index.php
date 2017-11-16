<?php include "inc/header.php";?>
jQuery : hide(), Show(), Toggle()
<hr>
<script type="text/javascript">
	$(document).ready(function(){
		$("#hide").click(function(){
			$(".para").hide("slow");
		});

		$("#show").click(function(){
			$(".para").show("slow");
		});

		$("#toggle").click(function(){
			$("p").toggle("slow");
		});
	
	});
</script>

<button id="hide">Hide</button>
<button id="show">Show</button>
<button id="toggle">Toggle</button>

<div class="para">
	<h3>We are learning jQuery.</h3>
	<p>We are learning jQuery.We are learning jQuery.We are learning jQuery.We are learning jQuery.We are learning jQuery.We are learning jQuery.We are learning jQuery.We are learning jQuery.We are learning jQuery.We are learning jQuery.We are learning jQuery.We are learning jQuery.We are learning jQuery.We are learning jQuery.We are learning jQuery.We are learning jQuery.</p>
</div>

			
<?php include "inc/footer.php";?>