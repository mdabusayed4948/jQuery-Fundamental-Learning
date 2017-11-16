<?php include "inc/header.php";?>
jQuery : hide(), Show(), Toggle()
<hr>
<script type="text/javascript">
	$(document).ready(function(){
		$("#slidedown").click(function(){
			$(".para").slideDown("slow");
		});

		$("#slideup").click(function(){
			$(".para").slideUp("slow");
		});

		$("#slidetoggle").click(function(){
			$(".para").slideToggle(3000);
		});


		
	
	});
</script>

<button id="slidedown">Slide Down</button>
<button id="slideup">Slide Up</button>
<button id="slidetoggle">Slide Toggle</button>

<div class="para">
	<h3>We are learning jQuery.</h3>
	<p>We are learning jQuery.We are learning jQuery.We are learning jQuery.We are learning jQuery.We are learning jQuery.We are learning jQuery.We are learning jQuery.We are learning jQuery.We are learning jQuery.We are learning jQuery.We are learning jQuery.We are learning jQuery.We are learning jQuery.We are learning jQuery.We are learning jQuery.We are learning jQuery.</p>      
</div>

			
<?php include "inc/footer.php";?>