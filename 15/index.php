<?php include "inc/header.php";?>
jQuery : AddClass
<hr>

<?php
	$bg        = "background-color";
	$bgvalue   = "#ddd";

	$clr      = "color";
	$clrvalue = "#fff";

	$pdd      = "padding";
	$pddvalue = "30px";

	$wdd      = "width";
	$wddvalue = "300px";

?>
<script type="text/javascript">
	$(document).ready(function(){
		$("#style").click(function(){
			$("p").css({
				"<?php echo $bg;?>":"<?php echo $bgvalue;?>",
				"<?php echo $clr;?>":"<?php echo $clrvalue;?>",
				"<?php echo $pdd;?>":"<?php echo $pddvalue;?>",
				"<?php echo $wdd;?>":"<?php echo $wddvalue;?>",
				"font-size" : "30px",
				"text-align" : "center"
			});
		});

	

	});
</script>

<button id="style">Add css</button>


<div class="para">
 <!--<div class="inside">
 	
 </div>	-->
 <p >We are learning jQuery.</p>
</div>

			
<?php include "inc/footer.php";?>