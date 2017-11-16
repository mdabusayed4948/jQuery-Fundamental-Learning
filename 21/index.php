<?php include "inc/header.php";?>
jQuery : jQuery AJAX post() Method ---
<hr>


<script type="text/javascript">
	$(document).ready(function(){

		$("#myform").submit(function(){
			$.post("content.php",$("#myform").serialize(),function(data){
				$("#state").html(data);

			});
			clear();
			return false;

		});


	});

	function clear(){
		$("#myform :input").each(function(){
			$(this).val("");
		});
	}

	
</script>



<div class="para">
<div id="state"></div>
 <form id="myform">
 	<table>
 		<tr>
 			<td>Name</td>
 			<td><input type="text" name="name" ></td>
 		</tr>
 		<tr>
 			<td>Skill</td>
 			<td><input type="text" name="skill" ></td>
 		</tr>
 		<tr>
 			<td>Email</td>
 			<td><input type="text" name="email" ></td>
 		</tr>
 		<tr>
 			<td></td>
 			<td><button type="submit">Submit</button></td>
 		</tr>
 	</table>
 </form>

</div>

			
<?php include "inc/footer.php";?>