<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li class="active"><!-- active begin -->
                
                <i class="fa fa-dashboard"></i> Dashboard / View Costumers
                
            </li><!-- active finish -->
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
               <h3 class="panel-title"><!-- panel-title begin -->
               
                   <i class="fa fa-tags"></i>  View Costumers
                
               </h3><!-- panel-title finish --> 
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-striped table-bordered table-hover"><!-- table table-striped table-bordered table-hover begin -->
                        
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> No: </th>
                                <th> Name </th>
                                <th> Image </th>
                                <th> E-Mail </th>
                                <th> Address </th>
                                <th> Phone No: </th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            
                            <?php 
          
                                $i=0;
                            
                                $get_c = "select * from users ORDER BY id DESC";
                                
                                $run_c = mysqli_query($con,$get_c);
          
                                while($row_c=mysqli_fetch_array($run_c)){
                                    
                                    $c_id = $row_c['id'];
                                    
                                    $c_name = $row_c['name'];
                                    
                                    $c_img = $row_c['pro_image'];
                                    
                                    $c_email = $row_c['email'];
                                    
                                    $c_address = $row_c['address'];
                                    
                                    $c_contact = $row_c['phone'];
                                    
                                    $i++;
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $c_name; ?> </td>
                               <center><td> <img src="./../customer/customer_image/<?php echo $c_img; ?>" width="60" height="60"></td></center> 
                                <td> <?php echo $c_email; ?> </td>
                                <td> <?php 
                                        if($c_address == "") {
                                            echo "Undefined";
                                        } else {
                                            echo $c_address;
                                        }                                
                                ?> </td>
                                <td> <?php echo $c_contact ?> </td>
                                
                            </tr><!-- tr finish -->
                            
                            <?php } ?>
                            
                        </tbody><!-- tbody finish -->
                        
                    </table><!-- table table-striped table-bordered table-hover finish -->
                </div><!-- table-responsive finish -->
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->

<?php } ?>


<script>
    function checker() {
            var result = confirm('Are you sure you want to delete this user?')
            if(result == false){
                    event.preventDefault();
            }
    }
</script>