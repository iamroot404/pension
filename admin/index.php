<?php session_start(); ?>
<?php include("include/connection.php");?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin-Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-3 d-none d-lg-block "></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form class="user" method="post">
                                        <div class="form-group">
                                            <input type="text" name ="id" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter User Id" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password" name ="pass" required>
                                        </div>
                                        
                                         
                                         <button name ="sign_in" type="submit" class="btn btn-primary btn-user btn-block">Login</button>
                                        <hr>
                                    <div class="text-center">
                                        <a class="small" href="../">Return Home?</a>
                                    </div>
                                       
                                    </form>

<?php


if (isset($_POST['sign_in'])) {
    

    $userid = htmlentities(mysqli_real_escape_string($con,$_POST['id']));
    $pass = htmlentities(mysqli_real_escape_string($con,$_POST['pass']));

    $select_user = "select * from adm where employee_number ='$userid' AND pass='$pass'";

    $query = mysqli_query($con, $select_user);
    $check_user = mysqli_num_rows($query);

    if ($check_user == 1) {

        $_SESSION['employee_number']=$userid;

        

        $admin = $_SESSION['employee_number'];
        $get_admin = "select * from adm where employee_number='$admin'";
        $run_admin = mysqli_query($con, $get_admin);
        $row = mysqli_fetch_array($run_admin);


        $name = $row['fullname'];
        echo "<script>window.open('home.php?user_name=$name', '_self')</script>";

        
    }
    else{
        ?>
            <br>
                <div class='alert alert-warning w-100 mt-30' >
        <center><h4 style="padding-top: 10px; color: #cc1616">Check User Id or Password!</strong></h4></center>
        </div>



        <?php
        
    }
}


?>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>