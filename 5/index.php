<?php include "inc/header.php";?>
jQuery : hide(), Show(), Toggle()
<hr>
<script type="text/javascript">
	$(document).ready(function(){
		$("#animation").click(function(){
			$(".inside").animate({
				left: "660px",
				opacity: "0.5",
				height: "200px",
				weight: "200px"

			},4000 );
		});

		$("#stop").click(function(){
			$(".inside").stop();
		});

		
	
	});
</script>

<button id="animation">Start Animation</button>
<button id="stop">Stop Animation</button>

<div class="para">
	<div class="inside">
		
	</div>   
</div>

			
<?php include "inc/footer.php";?>