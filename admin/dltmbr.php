
<?php

include "include/connection.php";


if (isset($_GET["id"])) {
	
	$id=$_GET["id"];

	mysqli_query($con, "delete from members where id=$id");
	?>
	<script type="text/javascript">
		
		window.location ="home.php";

	</script>
	
	<?php
}else{

	?>
	 <br>
                 <div class="col-md-8">
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button class="btn btn-danger">Failed</button>
                 </div>
<?php
}

?>
