<?php include "inc/header.php";?>
jQuery : hide(), Show(), Toggle()
<hr>
<script type="text/javascript">
	$(document).ready(function(){
		$("#fadein").click(function(){
			$(".para").fadeIn(1000);
		});

		$("#fadeout").click(function(){
			$(".para").fadeOut(1000);
		});

		$("#fadeto").click(function(){
			$(".para").fadeTo(1000, 0.4);
		});

		$("#fadetoggle").click(function(){
			$(".para").fadeToggle(1000);
		});


		
	
	});
</script>

<button id="fadein">FadeIn</button>
<button id="fadeout">FadeOut</button>
<button id="fadeto">FadeTo</button>
<button id="fadetoggle">FadeToggle</button>

<div class="para">
	<h3>We are learning jQuery.</h3>
	<p>We are learning jQuery.We are learning jQuery.We are learning jQuery.We are learning jQuery.We are learning jQuery.We are learning jQuery.We are learning jQuery.We are learning jQuery.We are learning jQuery.We are learning jQuery.We are learning jQuery.We are learning jQuery.We are learning jQuery.We are learning jQuery.We are learning jQuery.We are learning jQuery.</p>      
</div>

			
<?php include "inc/footer.php";?>