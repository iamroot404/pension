<?php
include("include/connection.php");
include("hdr.php");
if (!isset($_SESSION['employee_number'])) {
  header("location: index.php");
}
else{


?>



                <!-- Begin Page Content -->
                <div class="container-fluid">

                           <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                           <!-- Topbar Search -->


                    <form
                        class="form-inline mr-auto w-100 navbar-search" method="post" >
                        <div class="input-group">
                            <input type="text" name="srch" class="form-control bg-light border-0 small" placeholder="ID Number"
                                aria-label="Search" aria-describedby="basic-addon2" required>
                            <div class="input-group-append">
                                <button class="btn btn-primary"  name="sub">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>&nbsp&nbsp&nbsp

                                <a href="addmbr.php" class="  btn btn-success "><i
                                class="fas fa-plus fa-sm text-white-50"></i> Add Member</a>
                            
                        </div>  
                    </form>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table " id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Phone Number</th>
                                            <th>Contribution</th>
                                            <th>Disbursment</th>
                                            <th>Balance</th>
                                            <th>Statement</th>


                                        </tr>
                                    </thead>

                                    <?php
            

                if (isset($_POST['srch'])) {

                     $search_query = htmlentities($_POST['srch']);
                     $query = "select * from members where id='$search_query'";

                       $run_user = mysqli_query($con, $query);

               
                     while ($row_user=mysqli_fetch_array($run_user)) {

                        $member_id = $row_user['id'];
                        $member_name = $row_user['fullname'];
                        $member_phone = $row_user['phone'];
                        $member_dis = $row_user['deduction'];
                        $member_bal = $row_user['balance'];
                        
                        $member_cont = $row_user['contribution'];
                     
                        
                       

                        echo "

                         <tbody>
                                        
                                        <tr>
                                            <td>$member_name</td>
                                            <td>0$member_phone</td>
                                            <td>$member_cont</td>
                                            <td>$member_dis</td>
                                            <td>$member_bal</td>
                                            <td><a href='state.php?id=$member_id'>View Statement</td>

                                        </tr>
                                  
                                       <tr>
                                           <td><a href='updmbr.php?id=$member_id' class=' btn btn-success '><i
                                class='fas fa-pen fa-sm text-white-50'></i> Update Member</a> </td>
                                <td><a href='addcont.php?id=$member_id' class=' btn btn-info '><i
                                class='fas fa-dollar-sign fa-sm text-white-50'></i>Add Contributions</a> </td>
                                <td><a href='claimcont.php?id=$member_id' class=' btn btn-warning '><i
                                class='fas fa-dollar-sign fa-sm text-white-50'></i>Disbursment</a></td>
                                <td><a href='dltmbr.php?id=$member_id' class=' btn btn-danger '><i
                                class='fas fa-trash fa-sm text-white-50'></i> Delete Member</a></td>
                                       </tr> 
                        </tbody>
 

                        ";
                     }

                  
                 }

        
                 ?>
                                   
                                    
                                </table>
                            </div>
                        </div>
                    </div>

                   
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->






<?php include("ftr.php");?>

 <?php
}
?>