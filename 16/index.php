<?php include "inc/header.php";?>
jQuery : AddClass
<hr>


<script type="text/javascript">
	$(document).ready(function(){
		$("#select").click(function(){
			var val = "";
			val += "Width is: "+$(".dimen").width()+"</br>";
			val += "Height is: "+$(".dimen").height()+"</br>";
			val += "Innerwidth is: "+$(".dimen").innerWidth()+"</br>";
			val += "InnerHeight is: "+$(".dimen").innerHeight()+"</br>";
			$("#state").html(val);
			val += "Outerwidth is: "+$(".dimen").outerWidth()+"</br>";
			val += "OuterHeight is: "+$(".dimen").outerHeight()+"</br>";
			$("#state").html(val);
			val += "Outerwidth is: "+$(".dimen").outerWidth(true)+"</br>";
			val += "OuterHeight is: "+$(".dimen").outerHeight(true)+"</br>";
			$("#state").html(val);
		});	
	

	});
</script>

<button id="select">Display</button>

  <div id="state"></div>
<div class="para">
  
 <p class="dimen">We are learning jQuery.</p>
</div>

			
<?php include "inc/footer.php";?>