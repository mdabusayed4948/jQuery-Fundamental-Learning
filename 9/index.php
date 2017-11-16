<?php include "inc/header.php";?>
jQuery : Get Content and Attributes
<hr>


<script type="text/javascript">
	$(document).ready(function(){
		$("#show").click(function(){
			alert("The Text is: " +$("#line").text());
		});

		$("#source").click(function(){
			alert("The html is: " +$("#line").html());
		});

		$("#testval").click(function(){
			alert("The value is: " +$("#name").val());
		});
	
	

	});
</script>

<button id="show">Show text</button>
<button id="source">Show html</button>
<button id="testval">Show Value</button>
<div class="para">
<div>
	Name: <input type="text" id="name" value="Md Abu Sayed" name="">
</div>
	<p id="line">
	Training with live <strong>project</strong>
	</p> 
</div>

			
<?php include "inc/footer.php";?>