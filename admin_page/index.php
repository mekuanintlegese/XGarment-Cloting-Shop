<?php 

    session_start();
    include("includes/db.php");
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{
        ini_set ('display_errors', 1);  
        ini_set ('display_startup_errors', 1);  
        error_reporting (E_ALL); 
        
        $admin_session = $_SESSION['admin_email'];
        
        $get_admin = "select * from admins where admin_email='$admin_session'";
        
        $run_admin = mysqli_query($con,$get_admin);
        
        $row_admin = mysqli_fetch_array($run_admin);
        
        $admin_id = $row_admin['admin_id'];
        
        $admin_name = $row_admin['admin_name'];
        
        $admin_email = $row_admin['admin_email'];
        
        $admin_image = $row_admin['admin_image'];
        
        $admin_country = $row_admin['admin_country'];
        
        $admin_about = $row_admin['admin_about'];
        
        $admin_contact = $row_admin['admin_contact'];
        
        $admin_job = $row_admin['admin_job'];
        
        $get_products = "select * from products";
        
        $run_products = mysqli_query($con,$get_products);
        
        $count_products = mysqli_num_rows($run_products);
        
        $get_customers = "select * from users";
        
        $run_customers = mysqli_query($con,$get_customers);
        
        $count_customers = mysqli_num_rows($run_customers);
        
        $time_now = date("Y-m-d");

        $get_p_categories = "select * from customer_orders where order_date='$time_now' AND payment IS NOT NULL";
        
        $run_p_categories = mysqli_query($con,$get_p_categories);
        
        $count_today_orders = mysqli_num_rows($run_p_categories);
        
        $get_pending_orders = "select * from customer_orders where payment IS NOT NULL and payment != ''";
        
        $run_pending_orders = mysqli_query($con,$get_pending_orders);
        
        $count_pending_orders = mysqli_num_rows($run_pending_orders);

        $today = date("Y-m-d");

        $delete_orders = "delete from customer_orders where payment IS NULL and order_date != '$today' or payment = ''";

        $run_pending_orders = mysqli_query($con,$delete_orders);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="title" content="Xclusive  with all Ethiopian Fashions E-Commerce ">
    <meta name="description" content="Xclusive  is an Ethiopian e-commerce fashion committed to make cool fashion to all We deliver affordable clothes to customers around Ethiopia">
    <meta name="keywords" content="Xclusive,Exclusive,Ethiopian,Ethiopian e-commerce, fashion, Xclusive , Xclusive , Ethiopian Fashion, Ethiopian Payment, Ethiopian Cultural Clothes, Ethiopian Wedding Clothes, ethiopia,buy ethiopia">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="author" content="Mekuanint Legese">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Xclusive Shop | Admin Area</title>
    <link rel="stylesheet" href="css/bootstrap-337.min.css">
    <link rel="shortcut icon" href="./favicon_io/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div id="wrapper"><!-- #wrapper begin -->
       
       <?php include("includes/sidebar.php"); ?>
       
        <div id="page-wrapper"><!-- #page-wrapper begin -->
            <div class="container-fluid"><!-- container-fluid begin -->
                
                <?php
                
                    if(isset($_GET['dashboard'])){
                        
                        include("dashboard.php");
                        
                }   if(isset($_GET['insert_product'])){
                        
                        include("insert_product.php");
                        
                }   if(isset($_GET['view_products'])){
                        
                        include("view_products.php");
                        
                }   if(isset($_GET['delete_product'])){
                        
                        include("delete_product.php");
                        
                }   if(isset($_GET['edit_product'])){
                        
                        include("edit_product.php");
                        
                }   if(isset($_GET['insert_p_cat'])){
                        
                        include("insert_p_cat.php");
                        
                }   if(isset($_GET['today_orders'])){
                        
                        include("today_orders.php");
                        
                }   if(isset($_GET['delete_p_cat'])){
                        
                        include("delete_p_cat.php");
                        
                }   if(isset($_GET['edit_p_cat'])){
                        
                        include("edit_p_cat.php");
                        
                }   if(isset($_GET['insert_cat'])){
                        
                        include("insert_cat.php");
                        
                }   if(isset($_GET['view_cats'])){
                        
                        include("view_cats.php");
                        
                }   if(isset($_GET['edit_cat'])){
                        
                        include("edit_cat.php");
                        
                }    if(isset($_GET['edit_status'])){
                        
                        include("edit_status.php");
                        
                }   if(isset($_GET['delete_cat'])){
                        
                        include("delete_cat.php");
                        
                }   if(isset($_GET['insert_slide'])){
                        
                        include("insert_slide.php");
                        
                }   if(isset($_GET['view_slides'])){
                        
                        include("view_slides.php");
                        
                }   if(isset($_GET['delete_slide'])){
                        
                        include("delete_slide.php");
                        
                }   if(isset($_GET['edit_slide'])){
                        
                        include("edit_slide.php");
                        
                }   if(isset($_GET['insert_box'])){
                        
                        include("insert_box.php");
                        
                }   if(isset($_GET['view_boxes'])){
                        
                        include("view_boxes.php");
                        
                }   if(isset($_GET['delete_box'])){
                        
                        include("delete_box.php");
                        
                }   if(isset($_GET['edit_box'])){
                        
                        include("edit_box.php");
                        
                }   if(isset($_GET['view_customers'])){
                        
                        include("view_customers.php");
                        
                }   if(isset($_GET['delete_customer'])){
                        
                        include("delete_customer.php");
                        
                }   if(isset($_GET['view_orders'])){
                        
                        include("view_orders.php");
                        
                }   if(isset($_GET['delete_order'])){
                        
                        include("delete_order.php");
                        
                }   if(isset($_GET['view_payments'])){
                        
                        include("view_payments.php");
                        
                }   if(isset($_GET['delete_payment'])){
                        
                        include("delete_payment.php");
                        
                }   if(isset($_GET['view_users'])){
                        
                        include("view_users.php");
                        
                }   if(isset($_GET['delete_user'])){
                        
                        include("delete_user.php");
                        
                }   if(isset($_GET['insert_user'])){
                        
                        include("insert_user.php");
                        
                }   if(isset($_GET['user_profile'])){
                        
                        include("user_profile.php");
                        
                }   if(isset($_GET['insert_terms'])){
                        
                        include("insert_terms.php");
                        
                }   if(isset($_GET['view_terms'])){
                        
                        include("view_terms.php");
                        
                }   if(isset($_GET['delete_term'])){
                        
                        include("delete_term.php");
                        
                }   if(isset($_GET['edit_term'])){
                        
                        include("edit_term.php");
                        
                }   if(isset($_GET['edit_css'])){
                        
                        include("edit_css.php");
                        
                }   if(isset($_GET['insert_manufacturer'])){
                        
                        include("insert_manufacturer.php");
                        
                }   if(isset($_GET['view_manufacturers'])){
                        
                        include("view_manufacturers.php");
                        
                }   if(isset($_GET['delete_manufacturer'])){
                        
                        include("delete_manufacturer.php");
                        
                }   if(isset($_GET['edit_manufacturer'])){
                        
                        include("edit_manufacturer.php");
                        
                }   if(isset($_GET['insert_coupon'])){
                        
                        include("insert_coupon.php");
                        
                }   if(isset($_GET['view_coupons'])){
                        
                        include("view_coupons.php");
                        
                }   if(isset($_GET['view_order'])){
                        
                        include("view_order.php");
                        
                }    if(isset($_GET['view_soldouts'])){
                        
                        include("view_soldouts.php");
                        
                }     if(isset($_GET['bank_accounts'])){
                        
                        include("bank_accounts.php");
                        
                }      if(isset($_GET['edit_account'])){
                        
                        include("edit_account.php");
                        
                }      if(isset($_GET['delete_account'])){
                        
                        include("delete_account.php");
                        
                }      if(isset($_GET['home_covers'])){
                        
                        include("home_covers.php");
                        
                }     if(isset($_GET['cat_covers'])){
                        
                        include("cat_covers.php");
                        
                }      if(isset($_GET['size_covers'])){
                        
                        include("size_covers.php");
                        
                }       if(isset($_GET['cultural_covers'])){
                        
                        include("cultural_covers.php");
                        
                }     
                ?>
                
            </div><!-- container-fluid finish -->
        </div><!-- #page-wrapper finish -->
    </div><!-- wrapper finish -->

<script src="js/jquery-331.min.js"></script>     
<script src="js/bootstrap-337.min.js"></script>       
</body>
</html>


<?php } ?>