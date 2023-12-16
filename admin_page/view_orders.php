<?php 
    
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
                
                <i class="fa fa-dashboard"></i> Dashboard / View Orders
                
            </li><!-- active finish -->
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
               <h3 class="panel-title"><!-- panel-title begin -->
               
                   <i class="fa fa-tags"></i>  View Orders
                
               </h3><!-- panel-title finish --> 
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-striped table-bordered table-hover"><!-- table table-striped table-bordered table-hover begin -->
                        
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> No: </th>
                                <th> Name: </th>
                                <th> Phone No: </th>
                                <th> Order ID: </th>
                                <th> Product: </th>
                                <th> Qty: </th>
                                <th> Size: </th>
                                <th> Color: </th>
                                <th> Date: </th>
                                <th> Address: </th>
                                <th> P.O.Box: </th>
                                <th> Total: </th>
                                <th> Payment: </th>
                                <th> Status: </th>
                                <th> Status: </th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            
                        <?php
                                            $i=0;                                            
                                            $results_per_page = 1000;
                                            // find out the number of results stored in database
                                            $get_orders = "select * from customer_orders where payment is not null and payment != ''";                                
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
                                                $sql_products='SELECT * FROM customer_orders where payment is not null and payment != "" ORDER BY order_id DESC LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
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
                                                    $pro_size = $row_order['size']; 
                                                    $size = ""; 
                                                    if($pro_size == "c1s" || $pro_size == "c2s" || $pro_size == "c3s" || $pro_size == "c4s" || $pro_size == "c5s" || $pro_size == "c6s" || $pro_size == "c7s" || $pro_size == "c8s" || $pro_size == "c9s" || $pro_size == "c10s"){
                                                        $size = "S";
                                                    } else if($pro_size == "c1m" || $pro_size == "c2m" || $pro_size == "c3m" || $pro_size == "c4m" || $pro_size == "c5m" || $pro_size == "c6m" || $pro_size == "c7m" || $pro_size == "c8m" || $pro_size == "c9m" || $pro_size == "c10m"){
                                                        $size = "M";
                                                    } else if($pro_size == "c1l" || $pro_size == "c2l" || $pro_size == "c3l" || $pro_size == "c4l" || $pro_size == "c5l" || $pro_size == "c6l" || $pro_size == "c7l" || $pro_size == "c8l" || $pro_size == "c9l" || $pro_size == "c10l"){
                                                        $size = "L";                                                            
                                                    } else if($pro_size == "c1xl" || $pro_size == "c2xl" || $pro_size == "c3xl" || $pro_size == "c4xl" || $pro_size == "c5xl" || $pro_size == "c6xl" || $pro_size == "c7xl" || $pro_size == "c8xl" || $pro_size == "c9xl" || $pro_size == "c10xl"){
                                                        $size = "XL";                                                            
                                                    } else if($pro_size == "c1xxl" || $pro_size == "c2xxl" || $pro_size == "c3xxl" || $pro_size == "c4xxl" || $pro_size == "c5xxl" || $pro_size == "c6xxl" || $pro_size == "c7xxl" || $pro_size == "c8xxl" || $pro_size == "c9xxl" || $pro_size == "c10xxl"){
                                                        $size = "XXL";                                                            
                                                    };  
                                                    $color = $row_order['color']; 
                                                    $pay = $row_order['payment']; 
                                                    $box = $row_order['pobox']; 

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
                                                    $i++;
                                                    $pbox = "";
                                                    /////
                                                    $fev_color = "";
                                                    //////
                                                    if($color == 'Default'){
                                                        $fev_color = "  <div class='c1 all_colors' id='$color' style='color: grey;'>Default</div>   ";
                                                    } else if ($color != 'Default'){
                                                        $fev_color = "  <div class='c1 all_colors' id='$color' style='padding: 10px; border: 0.5px solid grey; background-color:$color; width: 8px; height: 8px; border-radius: 50%; cursor: pointer;'></div>";
                                                    }
                                                    
                                                    if($box != null){
                                                        $pbox = $box;
                                                    } else {
                                                        $pbox = "None";
                                                    }
                                                    $order_stat = "";
                                                    if($order_status == 'Pending' || $order_status == 'pending'){
                                                        $order_stat = "
                                                        <center>
                                                        <a href='#' class='btn btn-primary btn' style='color: #fff;'> Pending </a>
                                                        </center>
                                                        ";
                                                    } else if($order_status == 'Waiting'){
                                                        $order_stat = "
                                                        <center>
                                                        <a href='#'  class='btn btn-info btn' style='color: #fff;'> Unverified Payment </a>
                                                        </center>
                                                        ";
                                                    } else  if($order_status == 'Paid'){
                                                        $order_stat = "
                                                        <center>
                                                        <a href='#' class='btn btn-warning btn' style='color: #fff;'> Paid </a>
                                                        </center>
                                                        ";
                                                    }  else  if($order_status == 'Delivered'){
                                                        $order_stat = "
                                                        <center>
                                                        <a href='#' class='btn btn-success btn' style='color: #fff;'> Delivered </a>
                                                        </center>
                                                        ";
                                                    }  else  if($order_status == 'Canceled'){
                                                        $order_stat = "
                                                        <center>
                                                        <a href='#'  class='btn btn-danger btn' style='color: #fff;'> Canceled </a>
                                                        </center>
                                                        ";
                                                    };
                                                    

                                        echo "
                                        <tr>
                                        <td >$i </td>
                                        <td '>$first_name $last_name </td>
                                        <td>  $phone </td>
                                        <td style='color: green;'> <a href='index.php?view_order=$invoice_no'>  $invoice_no </a></td>
                                        <td ><a href='https://Xclusiveexclusive.com/detail.php?product=$product_id'>  $product_title </a> </td>
                                        <td>  $qty </td>
                                        <td>  $size</td>
                                        <td>  $fev_color </td>
                                        <td>  $order_date </td>
                                        <td>  $region / $zone / $wereda / $area </td>
                                        <td>  $pbox </td>
                                        <td>  $order_amount Birr </td>
                                        <td> $pay </td>
                                        <td> $order_stat </td>
                                        <td>                                      
                                        <a href='index.php?edit_status=$invoice_no'>                                     
                                           <i class='fa fa-pencil'></i> Edit                                    
                                        </a>                                     
                                        </td>
                                    </tr>
                                                    
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



                                </div> 
                            </section>
                            
                            
                        </tbody><!-- tbody finish -->
                        <section id="pagination" class="section-p1">
                        <?php 
                            if($number_of_results > 0) {  
                                $pr_query = "select * from customer_orders";
                                $pr_result = mysqli_query($con,$pr_query);
                                $total_record = mysqli_num_rows($pr_result );                                    
                                $total_page = ceil($total_record /$results_per_page);
                        
                                if($page>1)
                                {
                                    echo   '<a class="arrow-left" href="tops.php?page=' . ($page-1) .    '"><i class="fal fa-long-arrow-left "></i></a>';
                                }
                        
                                
                                for($i=1;$i<$total_page;$i++)
                                {

                                    echo '<a href="tops.php?page=' . $i . '">' . $i . '</a> ';
                                }
                        
                                if($i>$page)
                                {
                                    echo   '<a href="tops.php?page=' . ($page+1) .    '"><i class="fal fa-long-arrow-right fa-fw"></i></a>';
                                }
                            }

                        ?>
                    </section>
                    </table><!-- table table-striped table-bordered table-hover finish -->
                </div><!-- table-responsive finish -->
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->

<?php } ?>





                        
<script>
    function checker() {
            var result = confirm('Are you sure you want to delete this order?')
            if(result == false){
                    event.preventDefault();
            }
    }
</script>