<?php include "inc/header.php";?>
jQuery : Set Attributes 
<hr>
<?php
	function inputname(){
		echo "Md Abu Sayed";
	}

	function department(){
		echo "<b>Accounting</b>";
	}

	function skill(){
		echo "Java, PHP";
	}
?>


<script type="text/javascript">
	$(document).ready(function(){
		$("#show").click(function(){
			$("#live").attr({
				"href": "http://www.idbscholarsforum.com/",
				"title": "IDB Scholars Forum",
			});
		});
	

	});
</script>

<button id="show">Change Value</button>

<div class="para">
 	<p><a href="http://www.trainingwithliveproject.com" title="trainingwithliveproject" id="live">Training with live project</a></p>
</div>

			
<?php include "inc/footer.php";?>