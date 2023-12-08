<?php 
include("hdr.php");
include("include/connection.php");
?>

<!-- Begin Page Content -->
 
                <div class="container-fluid">

                    <!-- DataTales Example -->

                     <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">My Statement</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Transaction Code</th>
                                            <th>Contribution</th>
                                            <th>Disbursement</th>
                                            <th>Payment Method</th>
                                            <th>Bank/Mpesa Code</th>
                                            <th>Date</th>
                                           
                                        </tr>
                                    </thead>

                                    <?php 
     
        $id=$_GET["id"];
      $get_upl = "select * from statement where id=$id";
      $run_upl = mysqli_query($con, $get_upl);
      
      while ($row_user=mysqli_fetch_array($run_upl)) {

                       
                        $member_tran = $row_user['transaction'];
                        $member_cont = $row_user['cont'];
                        $member_dis = $row_user['dis'];
                        $member_meth = $row_user['method'];
                        $member_code = $row_user['code'];
                        $origDate = $row_user['date'];
 
                                            $newDate = date('d-M-Y H:i A ', strtotime($origDate));
                                            
                        
                     
                     echo"

                                         <tbody>
                                        <tr>
                                            <td>$name</td>
                                            <td>$member_tran</td>
                                            <td>$member_cont</td>
                                            <td>$member_dis</td>
                                            <td>$member_meth</td>
                                            <td>$member_code</td>
                                            <td>$newDate</td>
                                            
                                        </tr>
                               
                                    </tbody>


                     ";

     
}
                                
                                    
                     ?>
                                
                                </table>
                                <form method="post">
                                <button class='btn btn-info' name="print" type="submit">Print</button>

                                <?php
                                if (isset($_POST['print'])) {
                                    echo "<script>
                                    window.print();
                                  </script>";
                                  


                            }

                                ?>
                                </form>

                            </div>
                        </div>
                    </div>

                    
                   
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->



<?php include("ftr.php");?>
