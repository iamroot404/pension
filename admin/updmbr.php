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
      $email =$row['email'];
      $birth =$row['dob'];
      $gender =$row['gender'];
      $town =$row['city'];
      $phone =$row['phone'];
     
      

     

      ?>

                           <!-- DataTales Example -->
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Update Member</h4>
                                </div>
                                <div class="card-body">
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-3 pr-1">
                                                <div class="form-group">
                                                    <label>ID Number</label>
                                                     <input type="text" class="form-control"  placeholder="ID Number" required value="<?php echo $idno;?>" name="idno" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-3 px-1">
                                                <div class="form-group">
                                                    <label>Full Name</label>
                                                    <input type="text" class="form-control"  placeholder="Full Name" required value="<?php echo $name;?>" name="fname" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3 pl-1">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Email</label>
                                                   <input type="email" class="form-control"  placeholder="you@email.com" required value="<?php echo $email;?>" name="memail" required>
                                                </div>
                                            </div>
                                             <div class="col-md-3 pl-1">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Date of Birth</label>
                                                   <input type="text" class="form-control"  placeholder="Date of Birth" required value="<?php echo $birth;?>" name="mdob"required>
                                                </div>
                                            </div>
                                        </div>                   

                                        <div class="row">
                                           <div class="col-md-4 pr-1">
                                                <label>Gender</label>
                                         <div class="select-list">
                                             <select name="mgender" class="form-control" required>
                                            <option style="color: black"><?php echo $gender;?></option>    
                                            <option style="color: black">Male</option>
                                            <option style="color: black">Female</option>
                                            <option style="color: black">Others</option>
                                                 </select>
                                      	</div>
                                        </div> 

                                        <div class="col-md-4 pr-1">
                                                <div class="form-group">
                                                    <label>HomeTown</label>
                                                    <input type="text" class="form-control" placeholder="City" required value="<?php echo $town;?>" name="mtown" required>
                                                </div>
                                            </div>

                                            <div class="col-md-4 pr-1">
                                               <div class="form-group">
                                                    <label>Phone Number</label>
                                                    <input type="number" class="form-control" placeholder="Phone Number" required value="0<?php echo $phone;?>" name="mphone" required>
                                                </div>
                                            </div>



                                        </div>

                                        
                                        
                                        <button name="update" class="btn btn-info btn-fill pull-right">Update Member</button>
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
	
	$id_number = htmlentities(mysqli_real_escape_string($con,$_POST['idno']));
	$fullname = htmlentities(mysqli_real_escape_string($con,$_POST['fname']));
	$email = htmlentities(mysqli_real_escape_string($con,$_POST['memail']));
	$dob = htmlentities(mysqli_real_escape_string($con,$_POST['mdob']));
	$gender = htmlentities(mysqli_real_escape_string($con,$_POST['mgender']));
	$town = htmlentities(mysqli_real_escape_string($con,$_POST['mtown']));
	$phone = htmlentities(mysqli_real_escape_string($con,$_POST['mphone']));

	
	
	


	$insert = "update members set id='$id_number', fullname = '$fullname', phone='$phone', email='$email', dob='$dob', gender='$gender', city='$town' where id = $id";

	$query = mysqli_query($con, $insert);

	if ($query) {

		
		?>
		 <script type="text/javascript">
    window.location="home.php"

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
	
}

?>


<?php include("ftr.php");?>
