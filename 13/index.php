<?php include "inc/header.php";?>
jQuery : Remove Element(remove(),empty(),)
<hr>

<script type="text/javascript">
	$(document).ready(function(){
		$("#remove").click(function(){
			$(".para").remove();
		});

		$("#empty").click(function(){
			$(".para").empty();
		});
	
	

	});
</script>

<button id="remove">Remove</button>
<button id="empty">Empty</button>

<div class="para">
 <div class="inside">
 	
 </div>	
 <p style="float: right">We are learning jQuery.</p>
</div>

			
<?php include "inc/footer.php";?>