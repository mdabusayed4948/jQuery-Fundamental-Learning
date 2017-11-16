<?php include "inc/header.php";?>
jQuery : AddClass
<hr>

<?php
	function text(){
		echo "text";
	}

	function bg(){
		echo "bg";
	}
?>
<script type="text/javascript">
	$(document).ready(function(){
		$("#bg").click(function(){
			$("p").removeClass("<?php bg(); ?>");
		});

		$("#all").click(function(){
			$("p").removeClass("<?php text(); ?>");
		});

		$("#toggle").click(function(){
			$("p").toggleClass("<?php bg(); ?>");
		});

	});
</script>

<button id="bg">Remove Background</button>
<button id="all">Remove All</button>
<button id="toggle">Toggle bg</button>

<div class="para">
 <!--<div class="inside">
 	
 </div>	-->
 <p class="text bg">We are learning jQuery.</p>
</div>

			
<?php include "inc/footer.php";?>