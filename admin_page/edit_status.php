<?php 

    ini_set ('display_errors', 1);  
    ini_set ('display_startup_errors', 1);  
    error_reporting (E_ALL); 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>



<?php
function ellipsis($text, $max=50, $append='&hellip;')
{
    if (strlen($text) <= $max) return $text;
    $out = substr($text,0,$max);
    if (strpos($text,' ') === FALSE) return $out.$append;
    return preg_replace('/\w+$/','',$out).$append;
}
?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li class="active"><!-- active begin -->
                
                <i class="fa fa-dashboard"></i> Dashboard / Edit Status
                
            </li><!-- active finish -->
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
               <h3 class="panel-title"><!-- panel-title begin -->
               
                   <i class="fa fa-tags"></i>  Edit Orders Status
                
               </h3><!-- panel-title finish --> 
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-striped table-bordered table-hover"><!-- table table-striped table-bordered table-hover begin -->
                        
                                  
                        
                        <tbody><!-- tbody begin -->
                            
                        <?php
                           if(isset($_GET['edit_status'])){        
                               $i=0;                                            
                               $results_per_page = 250;
                               $total = 0;
                               $order_id = $_GET['edit_status'];

                                            // find out the number of results stored in database
                                            $get_orders = "select * from customer_orders where invoice_no='$order_id'";                                
                                            $run_orders = mysqli_query($con,$get_orders);
                                            $number_of_results = mysqli_num_rows($run_orders);
                                            // determine number of total pages available
                                            $number_of_pages = ceil($number_of_results/$results_per_page);

                                            if($number_of_results > 0) {                        
                                                // determine which page number visitor is currently on
                                                if (!isset($_GET['page'])) {
                                                $page = 1;
                                                } else {
                                                $page = $_GET['page'];
                                                }
                            
                                                // determine the sql LIMIT starting number for the results on the displaying page
                                                $this_page_first_result = ($page-1)*$results_per_page;
                            
                                                // retrieve selected results from database and display them on page
                                                $sql_products="SELECT * FROM customer_orders where invoice_no='$order_id' ORDER BY order_id DESC";
                                                $result = mysqli_query($con, $sql_products);
                                                while($row_order = mysqli_fetch_array($result)) {
                                                    $order_id = $row_order['order_id'];
                                                    $phone = $row_order['phone'];                            
                                                    $c_id = $row_order['customer_id'];                          
                                                    $first_name = $row_order['first_name'];                            
                                                    $last_name = $row_order['last_name'];                             
                                                    $invoice_no = $row_order['invoice_no'];                            
                                                    $product_id = $row_order['product_id'];                            
                                                    $qty = $row_order['qty'];                            
                                                    $size = $row_order['size']; 
                                                    $size = $row_order['order_status']; 
                                                    $pay = $row_order['payment']; 

                                                    // Address ////////
                                                    $region = "";
                                                    $region_num = $row_order['region'];  
                                                    switch ($region_num) {
                                                        case 2:  $region = "Addis Ababa"; break;
                                                        case 3:  $region = "Afar"; break;
                                                        case 4:  $region = "Amhara"; break;
                                                        case 5:  $region = "Benshangul-Gumaz"; break;
                                                        case 6:  $region = "Diredawa"; break;
                                                        case 7:  $region = "Gambela"; break;
                                                        case 8:  $region = "Harari"; break;
                                                        case 9:  $region = "Oromia"; break;
                                                        case 10: $region = "Somalia"; break;
                                                        case 11: $region = "Southern Nations"; break;
                                                        case 12: $region = "Tigray"; break;
                                                        default:
                                                          echo "No Region";
                                                      }                          
                                                    $zone = $row_order['zone'];                            
                                                    $wereda = $row_order['wereda'];   
                                                    $area = $row_order['area'];   
                                                    // Address ////////
                                                    
                                                    $order_status = $row_order['order_status'];
                                                                                        
                                                    $get_products = "select * from products where product_id='$product_id'";
                                                    
                                                    $run_products = mysqli_query($con,$get_products);
                                                    
                                                    $row_products = mysqli_fetch_array($run_products);
                                                    
                                                    $pro_title = $row_products['product_title'];

                                                    $product_title  = ellipsis($pro_title, 20);
                                                    
                                                    $get_customer = "select * from users where id='$c_id'";
                                                    
                                                    $run_customer = mysqli_query($con,$get_customer);
                                                    
                                                    $row_customer = mysqli_fetch_array($run_customer);
                                                    
                                                    $customer_email = $row_customer['email'];
                                                    
                                                    $get_c_order = "select * from customer_orders where order_id='$order_id'";
                                                    
                                                    $run_c_order = mysqli_query($con,$get_c_order);
                                                    
                                                    $row_c_order = mysqli_fetch_array($run_c_order);
                                                    
                                                    $order_date = $row_c_order['order_date'];
                                                    
                                                    $order_amount = $row_c_order['due_amount'];

                                                    $total += $order_amount;
                                                    $i++;
                                                }

                                            } else {
                                                echo "   <div class='prod'>
                                                <div class='description'>
                                                    <p style='line-height: 1.5; font-size: 13px; color: grey; text-align: center;'>Currently, No Orders are added yet. Please, Checkout later.</p>
                                                </div>
                                                </div>
                                            ";
                                            }

                                        } else {
                                            echo "   <div class='prod'>
                                            <div class='description'>
                                                <p style='line-height: 1.5; font-size: 13px; color: grey; text-align: center;'>Currently, No Orders are added yet. Please, Checkout later.</p>
                                            </div>
                                            </div>
                                            ";
                                        }

                            ?>

        <form method="post" class="form-horizontal" enctype="multipart/form-data" autocomplete="off"> <!-- form-horizontal Begin -->
                                      
                    <div class="form-group"><!-- form-group Begin -->
                        
                        <label class="col-md-3 control-label" style="padding: 10px; margin-left: 10px;"> Product Status </label> 
                        
                        <div class="col-md-6"><!-- col-md-6 Begin -->
                            
                        <div class="mobie_bank" style="display: flex; gap: 10px; padding: 10px;">
                        <?php 
                        if($order_status == "pending" || $order_status == "Pending") {
                            echo "
                            <input class='payment_radio' type='radio' name='status_update' value='Pending' checked='checked' required /> Pending<br>
                            <input class='payment_radio' type='radio' name='status_update' value='Paid' required /> Paid <br>
                            <input class='payment_radio' type='radio' name='status_update' value='Delivered' required /> Delivered <br>
                            <input class='payment_radio' type='radio' name='status_update' value='Canceled' required /> Canceled <br>
                            ";
                        } else if($order_status == "Paid") {
                            echo " 
                            <input class='payment_radio' type='radio' name='status_update' value='Pending'  required /> Pending<br>
                            <input class='payment_radio' type='radio' name='status_update' value='Paid' checked='checked' required /> Paid <br>
                            <input class='payment_radio' type='radio' name='status_update' value='Delivered' required /> Delivered <br>
                            <input class='payment_radio' type='radio' name='status_update' value='Canceled' required /> Canceled <br>
                            ";
                        }  else if($order_status == "Delivered") {
                            echo " 
                            <input class='payment_radio' type='radio' name='status_update' value='Pending'  required /> Pending<br>
                            <input class='payment_radio' type='radio' name='status_update' value='Paid' required /> Paid <br>
                            <input class='payment_radio' type='radio' name='status_update' value='Delivered'  checked='checked' required /> Delivered <br>
                            <input class='payment_radio' type='radio' name='status_update' value='Canceled' required /> Canceled <br>
                            ";
                        } else if($order_status == "Canceled") {
                            echo " 
                            <input class='payment_radio' type='radio' name='status_update' value='Pending'  required /> Pending<br>
                            <input class='payment_radio' type='radio' name='status_update' value='Paid' required /> Paid <br>
                            <input class='payment_radio' type='radio' name='status_update' value='Delivered'  required /> Delivered <br>
                            <input class='payment_radio' type='radio' name='status_update' value='Canceled'checked='checked'  required /> Canceled <br>
                            ";
                        } else if($order_status == "Waiting") {
                            echo "
                            <input class='payment_radio' type='radio' name='status_update' value='Pending' checked='checked' required /> Pending<br>
                            <input class='payment_radio' type='radio' name='status_update' value='Paid' required /> Paid <br>
                            <input class='payment_radio' type='radio' name='status_update' value='Delivered' required /> Delivered <br>
                            <input class='payment_radio' type='radio' name='status_update' value='Canceled' required /> Canceled <br>
                            ";
                        } else {
                            echo "
                            <input class='payment_radio' type='radio' name='status_update' value='Pending' required /> Pending<br>
                            <input class='payment_radio' type='radio' name='status_update' value='Paid' required /> Paid <br>
                            <input class='payment_radio' type='radio' name='status_update' value='Delivered' required /> Delivered <br>
                            <input class='payment_radio' type='radio' name='status_update' value='Canceled' required /> Canceled <br>
                            ";
                        } 
                        
                        ?>
                                    
                        </div>
                            
                        </div><!-- col-md-6 Finish -->
                        
                    </div><!-- form-group Finish -->

                    
                    <div class="form-group"><!-- form-group Begin -->
                        
                        <label class="col-md-3 control-label"></label> 
                        
                        <div class="col-md-12"><!-- col-md-6 Begin -->
                            
                            <input name="update" value="Update Order Status" type="submit" class="btn btn-primary form-control">
                            
                        </div><!-- col-md-6 Finish -->
                        
                    </div><!-- form-group Finish -->
                    
            </form><!-- form-horizontal Finish -->


</div> 
</section>


</tbody><!-- tbody finish -->

</table><!-- table table-striped table-bordered table-hover finish -->
<!-- <div style="text-align: right; display: flex; justify-content:end; margin-right: 10px; gap: 10px;"><strong>Total Amount: </strong> <p style="color: green;"><?php echo $total; ?> Birr</p></div> -->
                </div><!-- table-responsive finish -->
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->


<?php 

if(isset($_POST['update'])){
    
    ini_set ('display_errors', 1);  
    ini_set ('display_startup_errors', 1);  
    error_reporting (E_ALL); 
    
    $status = $_POST['status_update'];
    $invoice = $_GET['edit_status'];

    $update_product = "update customer_orders set order_status='$status' where invoice_no='$invoice'";
    $run_product = mysqli_query($con,$update_product);

    if($run_product){                
    echo "<script>alert('Order updated Successfully')</script>";                 
    echo "<script>window.open('index.php?view_orders','_self')</script>"; 
            
        }   
    
}

?>


<?php } ?>