<?php include "inc/header.php";?>
jQuery : hide(), Show(), Toggle()
<hr>

<?php
	function test(){
		echo "Callback Started.";
	}
?>

<script type="text/javascript">
	$(document).ready(function(){
		$("#animation").click(function(){
			$(".inside").animate({
				left: "660px",
				opacity: "0.5",
				height: "200px",
				weight: "200px"

			},4000, function(){
				alert("<?php echo test();?>");
			} );
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