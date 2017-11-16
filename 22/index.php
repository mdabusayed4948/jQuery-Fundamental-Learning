<?php include "inc/header.php";?>
jQuery with JSON
<hr>


<script type="text/javascript">
	$(document).ready(function(){
		var personJSON = {
		"sayed" : {
			"name":"sayed",
			"skill":"PHP",
			"email":"sayed@gmail.com",
		},
		"hasan" : {
			"name":"hasan",
			"skill":"PHP and JAVA",
			"email":"hasan@gmail.com",
		}
		};
		//var result = " ";
		//result+=  "Name  : "+personJSON.name+"<br/>";
		//result+=  "Skill : "+personJSON.skill+"<br/>";
		//result+=  "Email : "+personJSON.email;

		//$("#state").html(result);

		$("#state").html(personJSON.hasan.name);

	});
</script>

 
<div class="para">
  
<div id="state"></div>
</div>

			
<?php include "inc/footer.php";?>