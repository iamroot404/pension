<?php 
include("hdr.php");
include("include/connection.php");
?>

<!-- Begin Page Content -->
                <div class="container-fluid">

                    <?php 
     
        $id=$_GET["id"];
      $get_upl = "select * from members where id=$id";
      $run_upl = mysqli_query($con, $get_upl);
      $row = mysqli_fetch_array($run_upl);

        
      $idno =$row['id'];
      $name =$row['fullname'];
      $dis = $row['deduction'];
      $cont =$row['contribution'];
     

     

      ?>

                           <!-- DataTales Example -->
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Return Contributions</h4>
                                </div>
                                <div class="card-body">
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-4 pr-1">
                                                <div class="form-group">
                                                    <label>ID Number</label>
                                                     <input type="text" class="form-control"  placeholder="ID Number" required value="<?php echo $idno;?>" name="idno" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-4 px-1">
                                                <div class="form-group">
                                                    <label>Full Name</label>
                                                    <input type="text" class="form-control"  placeholder="Full Name" required value="<?php echo $name;?>" name="fname" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-4 pl-1">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Total Contributions</label>
                                                   <input type="email" class="form-control"  placeholder="you@email.com" required value="<?php echo $cont;?>" name="mccont" readonly>
                                                </div>
                                            </div>
                                             
                                        </div>
                                        <div class="row">
                                           <div class="col-md-4 pr-1">
                                                <div class="form-group">
                                                    <label>Disbursment Method</label>
                                                    <div class="select-list">
                                             <select name="mpay" class="form-control">
                                            <option style="color: black">Cash</option>
                                            <option style="color: black">Mpesa</option>
                                            <option style="color: black">Bank</option>
                                                 </select>
                                             </div>
                                             </div>
                                            </div>
                                            <div class="col-md-4 pl-1">
                                                <div class="form-group">
                                                    <label>Mpesa/Bank Code</label>
                                                    <input type="text" class="form-control" placeholder="Code" required value="" name="mcode" required>
                                                </div>
                                            </div>
                                             <div class="col-md-4 pl-1">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Add Amount</label>
                                                   <input type="number" class="form-control"  placeholder="Amount" required value="" name="mcont" required>
                                                </div>
                                            </div>
                                        </div>                  

        
                                        
                                        
                                        <button name="update" class="btn btn-info btn-fill pull-right">Return Pension</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                   
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


            <?php

if (isset($_POST['update'])) {
	
	$amount = htmlentities(mysqli_real_escape_string($con,$_POST['mcont']));
    $method = htmlentities(mysqli_real_escape_string($con,$_POST['mpay']));
    $code = htmlentities(mysqli_real_escape_string($con,$_POST['mcode']));

    $rand = str_shuffle('4739GPDSKB');
   

    $deduction = $dis +$amount; 
    $bal = $cont - $deduction;
	
	
	


	$insert = "update members set balance='$bal', deduction = '$deduction',code='$rand' where id = $id";

	$query = mysqli_query($con, $insert);

	if ($query) {

		$insert = "insert into statement (id, transaction, cont,dis,method,code)
    values('$idno', '$rand', '0','$amount','$method','$code')";

    $query2 = mysqli_query($con, $insert);
        if ($query2) {
           ?>
         <script type="text/javascript">
    window.location="home.php"

</script>


        <?php
        }
	}else{
        ?>
        <br>
                 <div class="col-md-8">
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button class="btn btn-danger">Failed</button>
                 </div>



        <?php
    }
	
}

?>


<?php include("ftr.php");?>
