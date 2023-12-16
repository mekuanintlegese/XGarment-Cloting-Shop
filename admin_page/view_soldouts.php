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
                
                <i class="fa fa-dashboard"></i> Dashboard / View Sold Out Products
                
            </li><!-- active finish -->
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
               <h3 class="panel-title"><!-- panel-title begin -->
               <?php 
                    $get_pro = "select * from products where c1s=0 and c2s=0 and c3s=0 and c4s=0  and c5s=0  and c6s=0 and c7s=0 and c8s=0 and c9s=0 and c10s=0 and c1m=0 and c2m=0 and c3m=0 and c4m=0  and c5m=0  and c6m=0 and c7m=0 and c8m=0 and c9m=0 and c10m=0 and c1l=0 and c2l=0 and c3l=0 and c4l=0 and c5l=0  and c6l=0 and c7l=0 and c8l=0 and c9l=0 and c10l=0 and c1xl=0 and c2xl=0 and c3xl=0 and c4xl=0  and c5xl=0  and c6xl=0 and c7xl=0 and c8xl=0 and c9xl=0 and c10xl=0 and c1xxl=0 and c2xxl=0 and c3xxl=0 and c4xxl=0  and c5xxl=0  and c6xxl=0 and c7xxl=0 and c8xxl=0 and c9xxl=0 and c10xxl=0 order by product_id desc";                                
                    $run_pro = mysqli_query($con,$get_pro); 
                    $all_sold_outs = mysqli_num_rows($run_pro);
               ?>
               
                   <i class="fa fa-tags"></i>  View Sold Out Products <a href="#" style="color: green;"> (<?php echo $all_sold_outs; ?>)</a>
                
               </h3><!-- panel-title finish --> 
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-striped table-bordered table-hover"><!-- table table-striped table-bordered table-hover begin -->
                        
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> No: </th>
                                <th> Title: </th>
                                <th> Image: </th>
                                <th> Price: </th>
                                <th> Sold: </th>
                                <th> S </th>
                                <th> M </th>
                                <th> L </th>
                                <th> XL </th>
                                <th> XXL </th>

                                <th> Sold Status </th>
                                <th> Edit: </th>
                                <th> Delete: </th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            
                            <?php           
                                $i=0;                            
                                $get_pro =  "select * from products where c1s=0 and c2s=0 and c3s=0 and c4s=0  and c5s=0  and c6s=0 and c7s=0 and c8s=0 and c9s=0 and c10s=0 and c1m=0 and c2m=0 and c3m=0 and c4m=0  and c5m=0  and c6m=0 and c7m=0 and c8m=0 and c9m=0 and c10m=0 and c1l=0 and c2l=0 and c3l=0 and c4l=0 and c5l=0  and c6l=0 and c7l=0 and c8l=0 and c9l=0 and c10l=0 and c1xl=0 and c2xl=0 and c3xl=0 and c4xl=0  and c5xl=0  and c6xl=0 and c7xl=0 and c8xl=0 and c9xl=0 and c10xl=0 and c1xxl=0 and c2xxl=0 and c3xxl=0 and c4xxl=0  and c5xxl=0  and c6xxl=0 and c7xxl=0 and c8xxl=0 and c9xxl=0 and c10xxl=0 order by product_id desc";                               
                                $run_pro = mysqli_query($con,$get_pro);         
                                while($row_pro=mysqli_fetch_array($run_pro)){                                    
                                    $pro_id = $row_pro['product_id'];                                    
                                    $product_title = $row_pro['product_title'];                                    
                                    $pro_img1 = $row_pro['product_img1'];                                    
                                    $pro_price = $row_pro['product_price'];                                    
                                    $pro_date = $row_pro['date'];

            
                                    

                                    $c1s = $row_pro['c1s'];
                                    $c1m = $row_pro['c1m'];
                                    $c1l = $row_pro['c1l'];
                                    $c1xl = $row_pro['c1xl'];
                                    $c1xxl = $row_pro['c1xxl'];
                            
                                    $c2s = $row_pro['c2s'];
                                    $c2m = $row_pro['c2m'];
                                    $c2l = $row_pro['c2l'];
                                    $c2xl = $row_pro['c2xl'];
                                    $c2xxl = $row_pro['c2xxl'];
                            
                                    $c3s = $row_pro['c3s'];
                                    $c3m = $row_pro['c3m'];
                                    $c3l = $row_pro['c3l'];
                                    $c3xl = $row_pro['c3xl'];
                                    $c3xxl = $row_pro['c3xxl'];
                            
                                    $c4s = $row_pro['c4s'];
                                    $c4m = $row_pro['c4m'];
                                    $c4l = $row_pro['c4l'];
                                    $c4xl = $row_pro['c4xl'];
                                    $c4xxl = $row_pro['c4xxl'];
                                    
                                    $c5s = $row_pro['c5s'];
                                    $c5m = $row_pro['c5m'];
                                    $c5l = $row_pro['c5l'];
                                    $c5xl = $row_pro['c5xl'];
                                    $c5xxl = $row_pro['c5xxl'];
                                    
                                    $c6s = $row_pro['c6s'];
                                    $c6m = $row_pro['c6m'];
                                    $c6l = $row_pro['c6l'];
                                    $c6xl = $row_pro['c6xl'];
                                    $c6xxl = $row_pro['c6xxl'];
                                    
                                    $c7s = $row_pro['c7s'];
                                    $c7m = $row_pro['c7m'];
                                    $c7l = $row_pro['c7l'];
                                    $c7xl = $row_pro['c7xl'];
                                    $c7xxl = $row_pro['c7xxl'];
                                    
                                    $c8s = $row_pro['c8s'];
                                    $c8m = $row_pro['c8m'];
                                    $c8l = $row_pro['c8l'];
                                    $c8xl = $row_pro['c8xl'];
                                    $c8xxl = $row_pro['c8xxl'];
                                    
                                    $c9s = $row_pro['c9s'];
                                    $c9m = $row_pro['c9m'];
                                    $c9l = $row_pro['c9l'];
                                    $c9xl = $row_pro['c9xl'];
                                    $c9xxl = $row_pro['c9xxl'];
                                    
                                    $c10s = $row_pro['c10s'];
                                    $c10m = $row_pro['c10m'];
                                    $c10l = $row_pro['c10l'];
                                    $c10xl = $row_pro['c10xl'];
                                    $c10xxl = $row_pro['c10xxl'];
                            
                            
                                    $s = $c1s + $c2s + $c3s + $c4s + $c5s + $c6s + $c7s + $c8s + $c9s + $c10s;
                                    $m = $c1m + $c2m + $c3m + $c4m + $c5m + $c6m + $c7m + $c8m + $c9m + $c10m;
                                    $l = $c1l + $c2l + $c3l + $c4l + $c5l + $c6l + $c7l + $c8l + $c9l + $c10l;
                                    $xl = $c1xl + $c2xl + $c3xl + $c4xl + $c5xl + $c6xl + $c7xl + $c8xl + $c9xl + $c10xl;
                                    $xxl = $c1xxl + $c2xxl + $c3xxl + $c4xxl + $c5xxl + $c6xxl + $c7xxl + $c8xxl + $c9xxl + $c10xxl;
                                    $allsizes = $s + $m + $l + $xl + $xxl;
                                    
                                    $pro_status = $row_pro['product_status'];  
                                    $pro_title = ellipsis($product_title,20);                                   
                                    $i++;                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $i; ?> </td>
                                <td> <a style="padding: 0; margin: 0;" href='https://Xclusiveexclusive.com/detail.php?product=<?php echo $pro_id; ?>'> <?php echo $pro_title; ?> </a> </td>
                                <td> <img src="product_images/<?php echo $pro_img1; ?>" width="60" height="60"></td>
                                <td> <?php echo $pro_price; ?> Birr </td>
                                <td style="color: green"> 
                                <strong><?php 
                                    $qty = 0;
                                    $get_sold = "select * from customer_orders where payment is not null and payment != '' and product_id='$pro_id'";                                    
                                    $run_sold = mysqli_query($con,$get_sold);  
                                    $count = mysqli_num_rows($run_sold); 
                                    while($row_oder=mysqli_fetch_array($run_sold)){
                                        $quantity = $row_oder['qty'];
                                        $qty += $quantity; 
                                    }  
                                    if($count > 0){
                                        echo $qty;                               
                                    } else {
                                        echo  "<p style='color: red; padding: 5px;'>0</p>";
                                    }
                  
                                 ?> 

                                </strong> 
                                </td>
                                
                                <td style='color: red; padding: 5px;'> <?php echo $s; ?> </td>
                                <td style='color: red; padding: 5px;'> <?php echo $m; ?> </td>
                                <td style='color: red; padding: 5px;'> <?php echo $l; ?> </td>
                                <td style='color: red; padding: 5px;'> <?php echo $xl; ?> </td>
                                <td style='color: red; padding: 5px;'> <?php echo $xxl; ?> </td>
                                
                                <td> <?php 
                                if($pro_status == 'Active') {
                                  echo  "<p style='color: green; background: pink; padding: 5px 10px;'>Sold Out</p>";
                                } else {
                                    echo  "<p style='color: #fff; background: rgb(204, 0, 0); padding: 5px 10px;'>$pro_status</p>";
                                }
                                ?> </td>
                                <td>                                      
                                     <a href="index.php?edit_product=<?php echo $pro_id; ?>">                                     
                                        <i class="fa fa-pencil"></i> Edit                                    
                                     </a>                                     
                                </td>
                                <td>                                      
                                     <a onclick="checker()" href="index.php?delete_product=<?php echo $pro_id; ?>">                                     
                                        <i class="fa fa-trash-o"></i> Delete                                    
                                     </a>                                      
                                </td>
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
            var result = confirm('Are you sure you want to delete this product?')
            if(result == false){
                    event.preventDefault();
            }
    }
</script>