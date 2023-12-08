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

       $userid = $row['id']; 
      $pass =$row['pass'];
      
     

     

      ?>

                           <!-- DataTales Example -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Change Password!</h4>
                                </div>
                                <div class="card-body">
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>Enter old password</label>
                                                     <input type="password" class="form-control"  placeholder="Password"  name="oldpass" required>
                                                </div>
                                            </div>

                                             <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>Enter new password</label>
                                                     <input type="password" class="form-control"  placeholder="Password"  name="newpass" required>
                                                </div>
                                            </div>
                                            
                                            
                                        </div> 
                                       

        
                                        
                                        
                                        <button name="update" class="btn btn-info btn-fill pull-right">Submit</button>
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
	
	$pass = md5(htmlentities(mysqli_real_escape_string($con,$_POST['oldpass'])));
    $npass = htmlentities(mysqli_real_escape_string($con,$_POST['newpass']));


	$select_user = "select * from members where id ='$userid' AND pass='$pass'";

    $query = mysqli_query($con, $select_user);
    $check_user = mysqli_num_rows($query);

    if ($check_user==1) {


        $insert = "update members set pass=md5('$npass') where id = $userid";

    $query = mysqli_query($con, $insert);

    ?>
         <script type="text/javascript">
    window.location="changeps.php?id=<?php echo $userid;?>"

</script>
        <?php

        
       
    }else{
        ?>
        
                
<br>
                 <div class="col-md-8">
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button class="btn btn-danger">Old Password don't match!</button>
                 </div>


        <?php
    }


	}

?>


<?php include("ftr.php");?>
