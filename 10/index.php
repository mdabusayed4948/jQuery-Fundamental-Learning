<?php include "inc/header.php";?>
jQuery : Set Content 
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
		$("#name").click(function(){
			$("#getname").val("<?php inputname()?>");
		});

		$("#dep").click(function(){
			$("#line1").html("<?php department()?>");
		});

		$("#skill").click(function(){
			$("#line2").text("<?php skill()?>");
		});
	
	

	});
</script>

<button id="name">Show Name</button>
<button id="dep">Show Department</button>
<button id="skill">Show Skill</button>
<div class="para">
<div>
	Name: <input type="text" id="getname" value="name will be here...." name="">
</div>
	<p id="line1">
	 <strong>Department</strong>
	</p>
	<p id="line2">
	 Skill
	</p> 
</div>

			
<?php include "inc/footer.php";?>