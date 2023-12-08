<?php include("hdr.php");
include("include/connection.php");
?>

<!-- Begin Page Content -->
                <div class="container-fluid">

                           <!-- DataTales Example -->
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Add New Member</h4>
                                </div>
                                <div class="card-body">
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-3 pr-1">
                                                <div class="form-group">
                                                    <label>ID Number</label>
                                                     <input type="text" class="form-control"  placeholder="ID Number" required value="" name="idno">
                                                </div>
                                            </div>
                                            <div class="col-md-3 px-1">
                                                <div class="form-group">
                                                    <label>Full Name</label>
                                                    <input type="text" class="form-control"  placeholder="Full Name" required value="" name="fname">
                                                </div>
                                            </div>
                                            <div class="col-md-3 pl-1">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Email</label>
                                                   <input type="email" class="form-control"  placeholder="you@email.com" required value="" name="memail">
                                                </div>
                                            </div>
                                             <div class="col-md-3 pl-1">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Date of Birth</label>
                                                   <input type="text" class="form-control"  placeholder="Date of Birth" required value="" name="mdob">
                                                </div>
                                            </div>
                                        </div>                   

                                        <div class="row">
                                           <div class="col-md-4 pr-1">
                                                <label>Gender</label>
                                         <div class="select-list">
                                             <select name="mgender" class="form-control">
                                            <option style="color: black">Male</option>
                                            <option style="color: black">Female</option>
                                            <option style="color: black">Others</option>
                                                 </select>
                                      	</div>
                                        </div> 

                                        <div class="col-md-4 pr-1">
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input type="password" class="form-control" placeholder="Password" required value="" name="mpass">
                                                </div>
                                            </div>

                                            <div class="col-md-4 pr-1">
                                                <div class="form-group">
                                                    <label>City</label>
                                                    <input type="text" class="form-control" placeholder="City" required value="" name="mtown">
                                                </div>
                                            </div>



                                        </div>

                                        <div class="row">
                                            <div class="col-md-3 pl-1">
                                                <div class="form-group">
                                                    <label>Contributions</label>
                                                    <input type="number" class="form-control" placeholder="Contributions" required value="" name="mcont">
                                                </div>
                                            </div>
                                            <div class="col-md-3 pr-1">
                                                <div class="form-group">
                                                    <label>Payment Method</label>
                                                    <div class="select-list">
                                             <select name="mpay" class="form-control">
                                            <option style="color: black">Cash</option>
                                            <option style="color: black">Mpesa</option>
                                            <option style="color: black">Bank</option>
                                                 </select>
                                             </div>
                                             </div>
                                            </div>
                                            <div class="col-md-3 pl-1">
                                                <div class="form-group">
                                                    <label>Mpesa/Bank Code</label>
                                                    <input type="text" class="form-control" placeholder="Code" required value="" name="mcode">
                                                </div>
                                            </div>
                                            <div class="col-md-3 pl-1">
                                                <div class="form-group">
                                                    <label>Phone Number</label>
                                                    <input type="number" class="form-control" placeholder="Phone Number" required value="" name="mphone">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <button name="update" class="btn btn-info btn-fill pull-right">Add Member</button>
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
	$pass = htmlentities(mysqli_real_escape_string($con,$_POST['mpass']));
	$contrib = htmlentities(mysqli_real_escape_string($con,$_POST['mcont']));
    $method = htmlentities(mysqli_real_escape_string($con,$_POST['mpay']));
    $code = htmlentities(mysqli_real_escape_string($con,$_POST['mcode']));
	$town = htmlentities(mysqli_real_escape_string($con,$_POST['mtown']));
	$phone = htmlentities(mysqli_real_escape_string($con,$_POST['mphone']));
     $rand = str_shuffle('4739GPDSKB');
	
	$check_id = "select * from members where id='$id_number'";
	$run_id = mysqli_query($con, $check_id);


	$checkid = mysqli_num_rows($run_id);

	if($checkid == 1){
		?>
		<br>
				 <div class="col-md-8">
				 	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button class="btn btn-danger">Member already added please confrim ID!</button>
				 </div>
        
        



		<?php
		
		exit();
	}


	$check_email = "select * from members where email='$email'";
	$run_email = mysqli_query($con, $check_email);


	$check = mysqli_num_rows($run_email);

	if($check == 1){
		?>
		
				
<br>
				 <div class="col-md-8">
				 	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button class="btn btn-danger">Email already exists please try using another email!</button>
				 </div>


		<?php
		
		exit();
	}

	


	$insert = "insert into members (id, fullname, phone, email, dob, gender, city, pass, contribution, deduction,balance, code)
	values('$id_number', '$fullname', '$phone', '$email', '$dob', '$gender', '$town', md5('$pass'),'$contrib','0','$contrib','$rand')";

	$query = mysqli_query($con, $insert);

	if ($query) {

        $insert = "insert into statement (id, transaction, cont,dis,method,code)
    values('$id_number', '$rand', '$contrib','0','$method','$code')";

    $query2 = mysqli_query($con, $insert);
    if ($query2) {
        
        ?>
        <br>
                 <div class="col-md-8">
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button class="btn btn-success">Member Added Successfully</button>
                 </div>



        <?php
    }
		
	
	}
	
}

?>


<?php include("ftr.php");?>
