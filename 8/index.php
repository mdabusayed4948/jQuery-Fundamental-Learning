<?php include "inc/header.php";?>
jQuery : hide(), Show(), Toggle()
<hr>


<script type="text/javascript">
	$(document).ready(function(){
		
	$("#chain").click(function(){
		$(".para").css("background","blue").slideUp(3000).slideDown(3000);
	});

	});
</script>

<button id="chain">Click here</button>


<div class="para">
	<div class="inside">
		
	</div>   
</div>

			
<?php include "inc/footer.php";?>