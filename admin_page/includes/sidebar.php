<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>
   
<nav class="navbar navbar-inverse navbar-fixed-top"><!-- navbar navbar-inverse navbar-fixed-top begin -->
    <div class="navbar-header"><!-- navbar-header begin -->
        
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><!-- navbar-toggle begin -->
            
            <span class="sr-only">Toggle Navigation</span>
            
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            
        </button><!-- navbar-toggle finish -->
        
        <a href="index.php?dashboard" class="navbar-brand">Admin Area</a>
        
    </div><!-- navbar-header finish -->
    
    <ul class="nav navbar-right top-nav"><!-- nav navbar-right top-nav begin -->
        
        <li class="dropdown"><!-- dropdown begin -->
            
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><!-- dropdown-toggle begin -->
                
                <i class="fa fa-user"></i> <?php echo $admin_name;  ?> <b class="caret"></b>
                
            </a><!-- dropdown-toggle finish -->
            
            <ul class="dropdown-menu"><!-- dropdown-menu begin -->
                <li><!-- li begin -->
                    <a href="index.php?user_profile=<?php echo $admin_id; ?>"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-user"></i> Profile
                        
                    </a><!-- a href finish -->
                </li><!-- li finish -->
                
                <li><!-- li begin -->
                    <a href="index.php?view_products"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-envelope"></i> Products
                        
                        <span class="badge"><?php echo $count_products; ?></span>
                        
                    </a><!-- a href finish -->
                </li><!-- li finish -->
                
                <li><!-- li begin -->
                    <a href="index.php?view_customers"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-users"></i> Customers
                        
                        <span class="badge"><?php echo $count_customers; ?></span>
                        
                    </a><!-- a href finish -->
                </li><!-- li finish -->
                
                <li><!-- li begin -->
                    <a href="index.php?today_orders"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-gear"></i> Today's Order
                        
                        <span class="badge"><?php echo $count_today_orders; ?></span>
                        
                    </a><!-- a href finish -->
                </li><!-- li finish -->
                
                <li class="divider"></li>
                
                <li><!-- li begin -->
                    <a href="logout.php"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-power-off"></i> Log Out
                        
                    </a><!-- a href finish -->
                </li><!-- li finish -->
                
            </ul><!-- dropdown-menu finish -->
            
        </li><!-- dropdown finish -->
        
    </ul><!-- nav navbar-right top-nav finish -->
    
    <div class="collapse navbar-collapse navbar-ex1-collapse"><!-- collapse navbar-collapse navbar-ex1-collapse begin -->
        <ul class="nav navbar-nav side-nav"><!-- nav navbar-nav side-nav begin -->
            <li><!-- li begin -->
                <a href="index.php?dashboard"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-dashboard"></i> Dashboard
                        
                </a><!-- a href finish -->
                
            </li><!-- li finish -->
            
            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#products"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-tag"></i> Products
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="products" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?insert_product"> Insert Product </a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?view_products"> View Products </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
            </li><!-- li finish -->

            
            <li><!-- li begin -->
                <a href="index.php?view_customers"><!-- a href begin -->
                    <i class="fa fa-fw fa-users"></i> View Customers
                </a><!-- a href finish -->
            </li><!-- li finish -->
            
            <li><!-- li begin -->
                <a href="index.php?view_orders"><!-- a href begin -->
                    <i class="fa fa-fw fa-shopping-cart"></i> View Orders
                </a><!-- a href finish -->
            </li><!-- li finish -->            
            <li><!-- li begin -->
                <a href="index.php?view_soldouts"><!-- a href begin -->
                    <i class="fa fa-fw fa-bookmark"></i> View Sold Outs
                </a><!-- a href finish -->
            </li><!-- li finish -->
            
            <li><!-- li begin -->
                <a href="index.php?view_payments"><!-- a href begin -->
                    <i class="fa fa-fw fa-money"></i> View Payments
                </a><!-- a href finish -->
            </li><!-- li finish -->
                        
            <li><!-- li begin -->
                <a href="index.php?bank_accounts"><!-- a href begin -->
                    <i class="fa fa-fw fa-bank"></i> Bank Accounts
                </a><!-- a href finish -->
            </li><!-- li finish -->     


            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#covers"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-image"></i> Cover Photos
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="covers" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?home_covers"> Home Cover </a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?cat_covers"> Woman Cover</a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?size_covers"> +Size Cover</a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?cultural_covers"> Cultural Cover</a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
            </li><!-- li finish -->

            
            <li><!-- li begin -->
                <a href="#" data-toggle="collapse" data-target="#users"><!-- a href begin -->
                        
                        <i class="fa fa-fw fa-users"></i> Users
                        <i class="fa fa-fw fa-caret-down"></i>
                        
                </a><!-- a href finish -->
                
                <ul id="users" class="collapse"><!-- collapse begin -->
                    <li><!-- li begin -->
                        <a href="index.php?insert_user"> Insert User </a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?view_users"> View Users </a>
                    </li><!-- li finish -->
                    <li><!-- li begin -->
                        <a href="index.php?user_profile=<?php echo $admin_id; ?>"> Edit My Profile </a>
                    </li><!-- li finish -->
                </ul><!-- collapse finish -->
                
            </li><!-- li finish -->
            
            <li><!-- li begin -->
                <a href="logout.php"><!-- a href begin -->
                    <i class="fa fa-fw fa-power-off"></i> Log Out
                </a><!-- a href finish -->
            </li><!-- li finish -->
            
        </ul><!-- nav navbar-nav side-nav finish -->
    </div><!-- collapse navbar-collapse navbar-ex1-collapse finish -->
    
</nav><!-- navbar navbar-inverse navbar-fixed-top finish -->


<?php } ?>