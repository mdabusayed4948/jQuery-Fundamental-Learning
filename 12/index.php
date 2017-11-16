<?php include "inc/header.php";?>
jQuery : Add Element(append(),prepend(),after(),befor(),)
<hr>
<?php

	function add(){
		echo " Project.";
	}

	function before(){
		echo " Training With ";
	}

	function after(){
		echo " Project.";
	}
?>

<script type="text/javascript">
	$(document).ready(function(){
		$("#add").click(function(){
			$("p").append("<?php add();?>");
		});

		$("#before").click(function(){
			$("p").before("<?php before();?>");
		});

		$("#after").click(function(){
			$("p").after("<?php after();?>");
		});
	

	});
</script>

<button id="add">Append</button>
<button id="before">Before</button>
<button id="after">After</button>

<div class="para">
 <p><span style="color: red">Live</span></p>	
</div>

			
<?php include "inc/footer.php";?>