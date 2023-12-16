<?php 

    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['edit_product'])){        
        $edit_id = $_GET['edit_product'];        
        $get_p = "select * from products where product_id='$edit_id'";        
        $run_edit = mysqli_query($con,$get_p);        
        $row_edit = mysqli_fetch_array($run_edit);        
        $p_id = $row_edit['product_id'];        
        $p_title = $row_edit['product_title'];        
        $p_cat = $row_edit['p_cat_id'];      
        $get_cat = "select * from categories where cat_id='$p_cat'";  
        $run_cat = mysqli_query($con,$get_cat);        
        $row_cat = mysqli_fetch_array($run_cat);      
        $cat_tit = $row_cat['cat_title'];
        $cat = $row_edit['cat_id'];               
        $p_price = $row_edit['product_price'];        
        $p_desc = $row_edit['product_desc'];        
        $p_status = $row_edit['product_status'];
                       
        $pro_img1 = $row_edit['product_img1'];                        
        $pro_img2 = $row_edit['product_img2'];                        
        $pro_img3 = $row_edit['product_img3'];                        
        $pro_img4 = $row_edit['product_img4'];                        
        $pro_img5 = $row_edit['product_img5'];
        $pro_img6 = $row_edit['product_img6'];                        
        $pro_img7 = $row_edit['product_img7'];                        
        $pro_img8 = $row_edit['product_img8'];                        
        $pro_img9 = $row_edit['product_img9'];                        
        $pro_img10 = $row_edit['product_img10'];
                               
        $pro_img11 = $row_edit['product_img11'];                        
        $pro_img12 = $row_edit['product_img12'];                        
        $pro_img13 = $row_edit['product_img13'];                        
        $pro_img14 = $row_edit['product_img14'];                        
        $pro_img15 = $row_edit['product_img15'];
        $pro_img16 = $row_edit['product_img16'];                        
        $pro_img17 = $row_edit['product_img17'];                        
        $pro_img18 = $row_edit['product_img18'];                        
        $pro_img19 = $row_edit['product_img19'];                        
        $pro_img20 = $row_edit['product_img20'];
                               
        $pro_img21 = $row_edit['product_img21'];                        
        $pro_img22 = $row_edit['product_img22'];                        
        $pro_img23 = $row_edit['product_img23'];                        
        $pro_img24 = $row_edit['product_img24'];                        
        $pro_img25 = $row_edit['product_img25'];
        $pro_img26 = $row_edit['product_img26'];                        
        $pro_img27 = $row_edit['product_img27'];                        
        $pro_img28 = $row_edit['product_img28'];                        
        $pro_img29 = $row_edit['product_img29'];                        
        $pro_img30 = $row_edit['product_img30'];
                               
        $pro_img31 = $row_edit['product_img31'];                        
        $pro_img32 = $row_edit['product_img32'];                        
        $pro_img33 = $row_edit['product_img33'];                        
        $pro_img34 = $row_edit['product_img34'];                        
        $pro_img35 = $row_edit['product_img35'];
        $pro_img36 = $row_edit['product_img36'];                        
        $pro_img37 = $row_edit['product_img37'];                        
        $pro_img38 = $row_edit['product_img38'];                        
        $pro_img39 = $row_edit['product_img39'];                        
        $pro_img40 = $row_edit['product_img40'];
                               
        $pro_img41 = $row_edit['product_img41'];                        
        $pro_img42 = $row_edit['product_img42'];                        
        $pro_img43 = $row_edit['product_img43'];                        
        $pro_img44 = $row_edit['product_img44'];                        
        $pro_img45 = $row_edit['product_img45'];
        $pro_img46 = $row_edit['product_img46'];                        
        $pro_img47 = $row_edit['product_img47'];                        
        $pro_img48 = $row_edit['product_img48'];                        
        $pro_img49 = $row_edit['product_img49'];                        
        $pro_img50 = $row_edit['product_img50'];

        $c1 = $row_edit['c1']; 
        $c2 = $row_edit['c2']; 
        $c3 = $row_edit['c3']; 
        $c4 = $row_edit['c4']; 
        $c5 = $row_edit['c5'];
        $c6 = $row_edit['c6']; 
        $c7 = $row_edit['c7']; 
        $c8 = $row_edit['c8']; 
        $c9 = $row_edit['c9']; 
        $c10 = $row_edit['c10'];                         

        $c1s = $row_edit['c1s'];
        $c1m = $row_edit['c1m'];
        $c1l = $row_edit['c1l'];
        $c1xl = $row_edit['c1xl'];
        $c1xxl = $row_edit['c1xxl'];

        $c2s = $row_edit['c2s'];
        $c2m = $row_edit['c2m'];
        $c2l = $row_edit['c2l'];
        $c2xl = $row_edit['c2xl'];
        $c2xxl = $row_edit['c2xxl'];

        $c3s = $row_edit['c3s'];
        $c3m = $row_edit['c3m'];
        $c3l = $row_edit['c3l'];
        $c3xl = $row_edit['c3xl'];
        $c3xxl = $row_edit['c3xxl'];

        $c4s = $row_edit['c4s'];
        $c4m = $row_edit['c4m'];
        $c4l = $row_edit['c4l'];
        $c4xl = $row_edit['c4xl'];
        $c4xxl = $row_edit['c4xxl'];
        
        $c5s = $row_edit['c5s'];
        $c5m = $row_edit['c5m'];
        $c5l = $row_edit['c5l'];
        $c5xl = $row_edit['c5xl'];
        $c5xxl = $row_edit['c5xxl'];
        
        $c6s = $row_edit['c6s'];
        $c6m = $row_edit['c6m'];
        $c6l = $row_edit['c6l'];
        $c6xl = $row_edit['c6xl'];
        $c6xxl = $row_edit['c6xxl'];
        
        $c7s = $row_edit['c7s'];
        $c7m = $row_edit['c7m'];
        $c7l = $row_edit['c7l'];
        $c7xl = $row_edit['c7xl'];
        $c7xxl = $row_edit['c7xxl'];
        
        $c8s = $row_edit['c8s'];
        $c8m = $row_edit['c8m'];
        $c8l = $row_edit['c8l'];
        $c8xl = $row_edit['c8xl'];
        $c8xxl = $row_edit['c8xxl'];
        
        $c9s = $row_edit['c9s'];
        $c9m = $row_edit['c9m'];
        $c9l = $row_edit['c9l'];
        $c9xl = $row_edit['c9xl'];
        $c9xxl = $row_edit['c9xxl'];
        
        $c10s = $row_edit['c10s'];
        $c10m = $row_edit['c10m'];
        $c10l = $row_edit['c10l'];
        $c10xl = $row_edit['c10xl'];
        $c10xxl = $row_edit['c10xxl'];


        $s = $c1s + $c2s + $c3s + $c4s + $c5s + $c6s + $c7s + $c8s + $c9s + $c10s;
        $m = $c1m + $c2m + $c3m + $c4m + $c5m + $c6m + $c7m + $c8m + $c9m + $c10m;
        $l = $c1l + $c2l + $c3l + $c4l + $c5l + $c6l + $c7l + $c8l + $c9l + $c10l;
        $xl = $c1xl + $c2xl + $c3xl + $c4xl + $c5xl + $c6xl + $c7xl + $c8xl + $c9xl + $c10xl;
        $xxl = $c1xxl + $c2xxl + $c3xxl + $c4xxl + $c5xxl + $c6xxl + $c7xxl + $c8xxl + $c9xxl + $c10xxl;
        $allsizes = $s + $m + $l + $xl + $xxl;
        
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="title" content="Xclusive with all Ethiopian Fashions E-Commerce ">
    <meta name="description" content="Xclusive is an Ethiopian e-commerce fashion committed to make cool fashion to all We deliver affordable clothes to customers around Ethiopia">
    <meta name="keywords" content="Xclusive,Exclusive,Ethiopian,Ethiopian e-commerce, fashion, Xclusive , Xclusive , Ethiopian Fashion, Ethiopian Payment, Ethiopian Cultural Clothes, Ethiopian Wedding Clothes, ethiopia,buy ethiopia">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="author" content="Mekuanint Legese">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Insert Products </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <script>
        $(document).ready(function() { 
        $('#category').on('change', function(){
            var catID = $(this).val();
            if(catID){
                $.ajax({
                    type:"POST",
                    url: "getsubcategory.php",
                    data:  'p_cat_id='+catID,
                    success:function(html){
                        $('#subcategory').html(html);
                    }
                });
            } else {
                $('#subcategory').html(' <option value=""> Choose Category First</option>');
            } 
            
        });
        });
        </script>
</head>
<body>
    
<div class="row"><!-- row Begin -->
    
    <div class="col-lg-12"><!-- col-lg-12 Begin -->
        
        <ol class="breadcrumb"><!-- breadcrumb Begin -->
            
            <li class="active"><!-- active Begin -->
                
                <i class="fa fa-dashboard"></i> Dashboard / Edit Products
                
            </li><!-- active Finish -->
            
        </ol><!-- breadcrumb Finish -->
        
    </div><!-- col-lg-12 Finish -->
    
</div><!-- row Finish -->
        
<div class="row"><!-- row Begin -->
        
        <div class="col-lg-12"><!-- col-lg-12 Begin -->
            
            <div class="panel panel-default"><!-- panel panel-default Begin -->
                
            <div class="panel-heading"><!-- panel-heading Begin -->
                
                <h3 class="panel-title"><!-- panel-title Begin -->
                    
                    <i class="fa fa-money fa-fw"></i> Update Product 
                    
                </h3><!-- panel-title Finish -->
                
            </div> <!-- panel-heading Finish -->
            
            <div class="panel-body"><!-- panel-body Begin -->
                
                <form method="post" class="form-horizontal" enctype="multipart/form-data" autocomplete="off"> <!-- form-horizontal Begin -->
                    
                    <div class="form-group"><!-- form-group Begin -->
                        
                        <label class="col-md-3 control-label"> Product Title </label> 
                        
                        <div class="col-md-6"><!-- col-md-6 Begin -->
                            
                            <input name="product_title" type="text" class="form-control" required value="<?php echo $p_title; ?>">
                            
                        </div><!-- col-md-6 Finish -->
                        
                    </div><!-- form-group Finish -->

                    <?php 
                    
                    $get_cat = "select * from categories order by cat_title";
                    // $category = mysqli_query($con,$get_cat);
                    $result = $con->query($get_cat);

                    ?>

                    
                    <div class="form-group"><!-- form-group Begin -->
                        
                        <label class="col-md-3 control-label">Product Category </label> 
                        
                        <div class="col-md-6"><!-- col-md-6 Begin -->
                            
                            <select name="cat" id="category" class="form-control"><!-- form-control Begin -->
                                
                                <option selected value="<?php echo $p_cat; ?>"> <?php echo $cat_tit; ?> </option>
                                <?php   
                                if($result->num_rows > 0){
                                    while($row = $result->fetch_assoc()){
                                    echo  '<option value="'.$row['cat_id'].'"> '.$row['cat_title'].' </option>';
                                    }
                                } else {
                                    echo '<option value="">Category Not Available </option>';
                                }
                                
                                ?>
                                
                            </select><!-- form-control Finish -->
                            
                        </div><!-- col-md-6 Finish -->
                        
                    </div><!-- form-group Finish -->
                    
                    <div class="form-group"><!-- form-group Begin -->
                        
                        <label class="col-md-3 control-label"> Sub Category </label> 
                        
                        <div class="col-md-6"><!-- col-md-6 Begin -->
                            
                            <select name="product_cat"  id="subcategory" class="form-control"><!-- form-control Begin -->

                                
                                <option selected value="<?php echo $cat; ?>"> <?php echo $cat; ?> </option> <span style="width: 20px; height: 20px; background-color:aqua;"></span>
                                
                            </select><!-- form-control Finish -->
                            
                        </div><!-- col-md-6 Finish -->
                        
                    </div><!-- form-group Finish -->


                    <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                    <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                    <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
            
                                <div class='form-group'><!-- form-group Begin -->
                                    
                                                            <label class='col-md-3 control-label' style='color: green;'> Change Color 1 Images </label>  
                                                            
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='product_img1' type='file' class='form-control' >
                                                                
                                                            </div><!-- col-md-6 Finish -->                        
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='product_img2' type='file' class='form-control' >
                                                                
                                                            </div><!-- col-md-6 Finish -->                        
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='product_img3' type='file' class='form-control' >
                                                                
                                                            </div><!-- col-md-6 Finish -->                        
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='product_img4' type='file' class='form-control' >
                                                                
                                                            </div><!-- col-md-6 Finish -->                      
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='product_img5' type='file' class='form-control' >
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            
                                                        </div><!-- form-group Finish -->
                                                            <div class='form-group'><!-- form-group Begin -->
                                                            
                                                            <label class='col-md-3 control-label'> Product Color 1 </label> 
                                                            
                                                            <div class='col-md-1' style='display: flex; '>
                                                            <input name='c1' type='color' class='form-control' value='<?php echo $c1; ?>'>
                                                            </div>

                                                            <div class='col-md-6' style='display: flex; padding: 10px 0;'><!-- col-md-6 Begin -->
                                                            
                                                            <img width='70' height='70' style='padding: 0 10px;' src='product_images/<?php echo $pro_img1; ?>'>
                                                            <img width='70' height='70' style='padding: 0 10px;' src='product_images/<?php echo $pro_img2; ?>'>
                                                            <img width='70' height='70' style='padding: 0 10px;' src='product_images/<?php echo $pro_img3; ?>'>
                                                            <img width='70' height='70' style='padding: 0 10px;' src='product_images/<?php echo $pro_img4; ?>'>
                                                            <img width='70' height='70' style='padding: 0 10px;' src='product_images/<?php echo $pro_img5; ?>'>
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            
                                                        </div><!-- form-group Finish -->     
                                                        
                                                        <div class='form-group'><!-- form-group Begin -->
                                                            
                                                            <label class='col-md-3 control-label'> Color 1 Sizes </label> 
                                                            
                                                            <div class='col-md-1' ><!-- col-md-6 Begin -->
                                                                
                                                                <input name='c1small' type='number' min='0' class='form-control' value='<?php echo $c1s; ?>'>
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='c1medium' type='number' min='0' class='form-control' value='<?php echo $c1m; ?>'>
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='c1large' type='number' min='0' class='form-control' value='<?php echo $c1l; ?>'>
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='c1x_large' type='number' min='0' class='form-control' value='<?php echo $c1xl; ?>'>
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            <div class='col-md-2'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='c1xx_large' type='number' min='0' class='form-control' value='<?php echo $c1xxl; ?>'>
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            
                                </div><!-- form-group Finish -->   

                                
                    

                    <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                    <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                    <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                                            <div class='form-group'><!-- form-group Begin -->
                                                            
                                                            <label class='col-md-3 control-label' style='color: green;'> Change Color 2 Images </label>  
                                                            
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='product_img6' type='file' class='form-control' >
                                                                
                                                            </div><!-- col-md-6 Finish -->                        
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='product_img7' type='file' class='form-control' >
                                                                
                                                            </div><!-- col-md-6 Finish -->                        
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='product_img8' type='file' class='form-control' >
                                                                
                                                            </div><!-- col-md-6 Finish -->                        
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='product_img9' type='file' class='form-control' >
                                                                
                                                            </div><!-- col-md-6 Finish -->                      
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='product_img10' type='file' class='form-control' >
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            
                                                        </div><!-- form-group Finish -->
                                                            <div class='form-group'><!-- form-group Begin -->
                                                            
                                                            <label class='col-md-3 control-label'> Product Color 2 </label> 
                                                            
                                                            <div class='col-md-1' style='display: flex; '>
                                                            <input name='c2' type='color' class='form-control' value='<?php echo $c2; ?>'>
                                                            </div>

                                                            <div class='col-md-6' style='display: flex; padding: 10px 0;'><!-- col-md-6 Begin -->
                                                            
                                                            <img width='70' height='70' style='padding: 0 10px;' src='product_images/<?php echo $pro_img6; ?>'>
                                                            <img width='70' height='70' style='padding: 0 10px;' src='product_images/<?php echo $pro_img7; ?>'>
                                                            <img width='70' height='70' style='padding: 0 10px;' src='product_images/<?php echo $pro_img8; ?>'>
                                                            <img width='70' height='70' style='padding: 0 10px;' src='product_images/<?php echo $pro_img9; ?>'>
                                                            <img width='70' height='70' style='padding: 0 10px;' src='product_images/<?php echo $pro_img10; ?>'>
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            
                                                        </div><!-- form-group Finish -->     
                                                        
                                                        <div class='form-group'><!-- form-group Begin -->
                                                            
                                                            <label class='col-md-3 control-label'> Color 2 Sizes </label> 
                                                            
                                                            <div class='col-md-1' ><!-- col-md-6 Begin -->
                                                                
                                                                <input name='c2small' type='number' min='0' class='form-control' value='<?php echo $c2s; ?>'>
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='c2medium' type='number' min='0' class='form-control' value='<?php echo $c2m; ?>'>
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='c2large' type='number' min='0' class='form-control' value='<?php echo $c2l; ?>'>
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='c2x_large' type='number' min='0' class='form-control' value='<?php echo $c2xl; ?>'>
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='c2xx_large' type='number' min='0' class='form-control' value='<?php echo $c2xxl; ?>'>
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            
                                </div><!-- form-group Finish -->   

                                


                        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                        <div class='form-group'><!-- form-group Begin -->
                                                            
                                                            <label class='col-md-3 control-label' style='color: green;'> Change Color 3 Images </label>  
                                                            
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='product_img11' type='file' class='form-control' >
                                                                
                                                            </div><!-- col-md-6 Finish -->                        
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='product_img12' type='file' class='form-control' >
                                                                
                                                            </div><!-- col-md-6 Finish -->                        
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='product_img13' type='file' class='form-control' >
                                                                
                                                            </div><!-- col-md-6 Finish -->                        
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='product_img14' type='file' class='form-control' >
                                                                
                                                            </div><!-- col-md-6 Finish -->                      
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='product_img15' type='file' class='form-control' >
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            
                                                        </div><!-- form-group Finish -->
                                                            <div class='form-group'><!-- form-group Begin -->
                                                            
                                                            <label class='col-md-3 control-label'> Product Color 3 </label> 
                                                            
                                                            <div class='col-md-1' style='display: flex; '>
                                                            <input name='c3' type='color' class='form-control' value='<?php echo $c3; ?>'> 
                                                            </div>

                                                            <div class='col-md-6' style='display: flex; padding: 10px 0;'><!-- col-md-6 Begin -->
                                                            
                                                            <img width='70' height='70' style='padding: 0 10px;' src='product_images/<?php echo $pro_img11; ?>'>
                                                            <img width='70' height='70' style='padding: 0 10px;' src='product_images/<?php echo $pro_img12; ?>'>
                                                            <img width='70' height='70' style='padding: 0 10px;' src='product_images/<?php echo $pro_img13; ?>'>
                                                            <img width='70' height='70' style='padding: 0 10px;' src='product_images/<?php echo $pro_img14; ?>'>
                                                            <img width='70' height='70' style='padding: 0 10px;' src='product_images/<?php echo $pro_img15; ?>'>
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            
                                                        </div><!-- form-group Finish -->     
                                                        
                                                        <div class='form-group'><!-- form-group Begin -->
                                                            
                                                            <label class='col-md-3 control-label'> Color 3 Sizes </label> 
                                                            
                                                            <div class='col-md-1' ><!-- col-md-6 Begin -->
                                                                
                                                                <input name='c3small' type='number' min='0' class='form-control' value='<?php echo $c3s; ?>'>
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='c3medium' type='number' min='0' class='form-control' value='<?php echo $c3m; ?>'>
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='c3large' type='number' min='0' class='form-control' value='<?php echo $c3l; ?>'>
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='c3x_large' type='number' min='0' class='form-control' value='<?php echo $c3xl; ?>'>
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='c3xx_large' type='number' min='0' class='form-control' value='<?php echo $c3xxl; ?>'>
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            
                                </div><!-- form-group Finish -->   

                                


                        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////// --> 

                        <div class='form-group'><!-- form-group Begin -->
                                                            
                                                            <label class='col-md-3 control-label' style='color: green;'> Change Color 4 Images </label>  
                                                            
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='product_img16' type='file' class='form-control' >
                                                                
                                                            </div><!-- col-md-6 Finish -->                        
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='product_img17' type='file' class='form-control' >
                                                                
                                                            </div><!-- col-md-6 Finish -->                        
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='product_img18' type='file' class='form-control' >
                                                                
                                                            </div><!-- col-md-6 Finish -->                        
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='product_img19' type='file' class='form-control' >
                                                                
                                                            </div><!-- col-md-6 Finish -->                      
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='product_img20' type='file' class='form-control' >
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            
                                                        </div><!-- form-group Finish -->
                                                            <div class='form-group'><!-- form-group Begin -->
                                                            
                                                            <label class='col-md-3 control-label'> Product Color 4 </label> 
                                                            
                                                            <div class='col-md-1' style='display: flex; '>
                                                            <input name='c4' type='color' class='form-control' value='<?php echo $c4; ?>'>
                                                            </div>

                                                            <div class='col-md-6' style='display: flex; padding: 10px 0;'><!-- col-md-6 Begin -->
                                                            
                                                            <img width='70' height='70' style='padding: 0 10px;' src='product_images/<?php echo $pro_img16; ?>'>
                                                            <img width='70' height='70' style='padding: 0 10px;' src='product_images/<?php echo $pro_img17; ?>'>
                                                            <img width='70' height='70' style='padding: 0 10px;' src='product_images/<?php echo $pro_img18; ?>'>
                                                            <img width='70' height='70' style='padding: 0 10px;' src='product_images/<?php echo $pro_img19; ?>'>
                                                            <img width='70' height='70' style='padding: 0 10px;' src='product_images/<?php echo $pro_img20; ?>'>
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            
                                                        </div><!-- form-group Finish -->     
                                                        
                                                        <div class='form-group'><!-- form-group Begin -->
                                                            
                                                            <label class='col-md-3 control-label'> Color 4 Sizes </label> 
                                                            
                                                            <div class='col-md-1' ><!-- col-md-6 Begin -->
                                                                
                                                                <input name='c4small' type='number' min='0' class='form-control' value='<?php echo $c4s; ?>'>
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='c4medium' type='number' min='0' class='form-control' value='<?php echo $c4m; ?>'>
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='c4large' type='number' min='0' class='form-control' value='<?php echo $c4l; ?>'>
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='c4x_large' type='number' min='0' class='form-control' value='<?php echo $c4xl; ?>'>
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='c4xx_large' type='number' min='0' class='form-control' value='<?php echo $c4xxl; ?>'>
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            
                                </div><!-- form-group Finish -->   

                                


                        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

                        <div class='form-group'><!-- form-group Begin -->
                                                            
                                                            <label class='col-md-3 control-label' style='color: green;'> Change Color 5 Images </label>  
                                                            
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='product_img21' type='file' class='form-control' >
                                                                
                                                            </div><!-- col-md-6 Finish -->                        
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='product_img22' type='file' class='form-control' >
                                                                
                                                            </div><!-- col-md-6 Finish -->                        
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='product_img23' type='file' class='form-control' >
                                                                
                                                            </div><!-- col-md-6 Finish -->                        
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='product_img24' type='file' class='form-control' >
                                                                
                                                            </div><!-- col-md-6 Finish -->                      
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='product_img25' type='file' class='form-control' >
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            
                                                        </div><!-- form-group Finish -->
                                                            <div class='form-group'><!-- form-group Begin -->
                                                            
                                                            <label class='col-md-3 control-label'> Product Color 5 </label> 
                                                            
                                                            <div class='col-md-1' style='display: flex; '>
                                                            <input name='c5' type='color' class='form-control' value='<?php echo $c5; ?>'>
                                                            </div>

                                                            <div class='col-md-6' style='display: flex; padding: 10px 0;'><!-- col-md-6 Begin -->
                                                            
                                                            <img width='70' height='70' style='padding: 0 10px;' src='product_images/<?php echo $pro_img21; ?>'>
                                                            <img width='70' height='70' style='padding: 0 10px;' src='product_images/<?php echo $pro_img22; ?>'>
                                                            <img width='70' height='70' style='padding: 0 10px;' src='product_images/<?php echo $pro_img23; ?>'>
                                                            <img width='70' height='70' style='padding: 0 10px;' src='product_images/<?php echo $pro_img24; ?>'>
                                                            <img width='70' height='70' style='padding: 0 10px;' src='product_images/<?php echo $pro_img25; ?>'>
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            
                                                        </div><!-- form-group Finish -->     
                                                        
                                                        <div class='form-group'><!-- form-group Begin -->
                                                            
                                                            <label class='col-md-3 control-label'> Color 5 Sizes </label> 
                                                            
                                                            <div class='col-md-1' ><!-- col-md-6 Begin -->
                                                                
                                                                <input name='c5small' type='number' min='0' class='form-control' value='<?php echo $c5s; ?>'>
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='c5medium' type='number' min='0' class='form-control' value='<?php echo $c5m; ?>'>
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='c5large' type='number' min='0' class='form-control' value='<?php echo $c5l; ?>'>
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='c5x_large' type='number' min='0' class='form-control' value='<?php echo $c5xl; ?>'>
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='c5xx_large' type='number' min='0' class='form-control' value='<?php echo $c5xxl; ?>'>
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            
                                </div><!-- form-group Finish -->   

                                


                        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////// --> 

                        <div class='form-group'><!-- form-group Begin -->
                                                            
                                                            <label class='col-md-3 control-label' style='color: green;'> Change Color 6 Images </label>  
                                                            
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='product_img26' type='file' class='form-control' >
                                                                
                                                            </div><!-- col-md-6 Finish -->                        
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='product_img27' type='file' class='form-control' >
                                                                
                                                            </div><!-- col-md-6 Finish -->                        
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='product_img28' type='file' class='form-control' >
                                                                
                                                            </div><!-- col-md-6 Finish -->                        
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='product_img29' type='file' class='form-control' >
                                                                
                                                            </div><!-- col-md-6 Finish -->                      
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='product_img30' type='file' class='form-control' >
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            
                                                        </div><!-- form-group Finish -->
                                                            <div class='form-group'><!-- form-group Begin -->
                                                            
                                                            <label class='col-md-3 control-label'> Product Color 6 </label> 
                                                            
                                                            <div class='col-md-1' style='display: flex; '>
                                                            <input name='c6' type='color' class='form-control' value='<?php echo $c6; ?>'>
                                                            </div>

                                                            <div class='col-md-6' style='display: flex; padding: 10px 0;'><!-- col-md-6 Begin -->
                                                            
                                                            <img width='70' height='70' style='padding: 0 10px;' src='product_images/<?php echo $pro_img26; ?>'>
                                                            <img width='70' height='70' style='padding: 0 10px;' src='product_images/<?php echo $pro_img27; ?>'>
                                                            <img width='70' height='70' style='padding: 0 10px;' src='product_images/<?php echo $pro_img28; ?>'>
                                                            <img width='70' height='70' style='padding: 0 10px;' src='product_images/<?php echo $pro_img29; ?>'>
                                                            <img width='70' height='70' style='padding: 0 10px;' src='product_images/<?php echo $pro_img30; ?>'>
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            
                                                        </div><!-- form-group Finish -->     
                                                        
                                                        <div class='form-group'><!-- form-group Begin -->
                                                            
                                                            <label class='col-md-3 control-label'> Color 6 Sizes </label> 
                                                            
                                                            <div class='col-md-1' ><!-- col-md-6 Begin -->
                                                                
                                                                <input name='c6small' type='number' min='0' class='form-control' value='<?php echo $c6s; ?>'>
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='c6medium' type='number' min='0' class='form-control' value='<?php echo $c6m; ?>'>
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='c6large' type='number' min='0' class='form-control' value='<?php echo $c6l; ?>'>
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='c6x_large' type='number' min='0' class='form-control' value='<?php echo $c6xl; ?>'>
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='c6xx_large' type='number' min='0' class='form-control' value='<?php echo $c6xxl; ?>'>
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            
                                </div><!-- form-group Finish -->   

                                


                        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

                        <div class='form-group'><!-- form-group Begin -->
                                                            
                                                            <label class='col-md-3 control-label' style='color: green;'> Change Color 7 Images </label>  
                                                            
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='product_img31' type='file' class='form-control' >
                                                                
                                                            </div><!-- col-md-6 Finish -->                        
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='product_img32' type='file' class='form-control' >
                                                                
                                                            </div><!-- col-md-6 Finish -->                        
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='product_img33' type='file' class='form-control' >
                                                                
                                                            </div><!-- col-md-6 Finish -->                        
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='product_img34' type='file' class='form-control' >
                                                                
                                                            </div><!-- col-md-6 Finish -->                      
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='product_img35' type='file' class='form-control' >
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            
                                                        </div><!-- form-group Finish -->
                                                            <div class='form-group'><!-- form-group Begin -->
                                                            
                                                            <label class='col-md-3 control-label'> Product Color 7 </label> 
                                                            
                                                            <div class='col-md-1' style='display: flex; '>
                                                            <input name='c7' type='color' class='form-control' value='<?php echo $c7; ?>'>
                                                            </div>

                                                            <div class='col-md-6' style='display: flex; padding: 10px 0;'><!-- col-md-6 Begin -->
                                                            
                                                            <img width='70' height='70' style='padding: 0 10px;' src='product_images/<?php echo $pro_img31; ?>'>
                                                            <img width='70' height='70' style='padding: 0 10px;' src='product_images/<?php echo $pro_img32; ?>'>
                                                            <img width='70' height='70' style='padding: 0 10px;' src='product_images/<?php echo $pro_img33; ?>'>
                                                            <img width='70' height='70' style='padding: 0 10px;' src='product_images/<?php echo $pro_img34; ?>'>
                                                            <img width='70' height='70' style='padding: 0 10px;' src='product_images/<?php echo $pro_img35; ?>'>
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            
                                                        </div><!-- form-group Finish -->     
                                                        
                                                        <div class='form-group'><!-- form-group Begin -->
                                                            
                                                            <label class='col-md-3 control-label'> Color 3 Sizes </label> 
                                                            
                                                            <div class='col-md-1' ><!-- col-md-6 Begin -->
                                                                
                                                                <input name='c7small' type='number' min='0' class='form-control' value='<?php echo $c7s; ?>'>
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='c7medium' type='number' min='0' class='form-control' value='<?php echo $c7m; ?>'>
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='c7large' type='number' min='0' class='form-control' value='<?php echo $c7l; ?>'>
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='c7x_large' type='number' min='0' class='form-control' value='<?php echo $c7xl; ?>'>
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='c7xx_large' type='number' min='0' class='form-control' value='<?php echo $c7xxl; ?>'>
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            
                                </div><!-- form-group Finish -->   

                                


                        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////// --> 

                        <div class='form-group'><!-- form-group Begin -->
                                                            
                                                            <label class='col-md-3 control-label' style='color: green;'> Change Color 8 Images </label>  
                                                            
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='product_img36' type='file' class='form-control' >
                                                                
                                                            </div><!-- col-md-6 Finish -->                        
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='product_img37' type='file' class='form-control' >
                                                                
                                                            </div><!-- col-md-6 Finish -->                        
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='product_img38' type='file' class='form-control' >
                                                                
                                                            </div><!-- col-md-6 Finish -->                        
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='product_img39' type='file' class='form-control' >
                                                                
                                                            </div><!-- col-md-6 Finish -->                      
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='product_img40' type='file' class='form-control' >
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            
                                                        </div><!-- form-group Finish -->
                                                            <div class='form-group'><!-- form-group Begin -->
                                                            
                                                            <label class='col-md-3 control-label'> Product Color 8 </label> 
                                                            
                                                            <div class='col-md-1' style='display: flex; '>
                                                            <input name='c8' type='color' class='form-control' value='<?php echo $c8; ?>'>
                                                            </div>

                                                            <div class='col-md-6' style='display: flex; padding: 10px 0;'><!-- col-md-6 Begin -->
                                                            
                                                            <img width='70' height='70' style='padding: 0 10px;' src='product_images/<?php echo $pro_img36; ?>'>
                                                            <img width='70' height='70' style='padding: 0 10px;' src='product_images/<?php echo $pro_img37; ?>'>
                                                            <img width='70' height='70' style='padding: 0 10px;' src='product_images/<?php echo $pro_img38; ?>'>
                                                            <img width='70' height='70' style='padding: 0 10px;' src='product_images/<?php echo $pro_img39; ?>'>
                                                            <img width='70' height='70' style='padding: 0 10px;' src='product_images/<?php echo $pro_img40; ?>'>
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            
                                                        </div><!-- form-group Finish -->     
                                                        
                                                        <div class='form-group'><!-- form-group Begin -->
                                                            
                                                            <label class='col-md-3 control-label'> Color 4 Sizes </label> 
                                                            
                                                            <div class='col-md-1' ><!-- col-md-6 Begin -->
                                                                
                                                                <input name='c8small' type='number' min='0' class='form-control' value='<?php echo $c8s; ?>'>
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='c8medium' type='number' min='0' class='form-control' value='<?php echo $c8m; ?>'>
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='c8large' type='number' min='0' class='form-control' value='<?php echo $c8l; ?>'>
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='c8x_large' type='number' min='0' class='form-control' value='<?php echo $c8xl; ?>'>
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='c8xx_large' type='number' min='0' class='form-control' value='<?php echo $c8xxl; ?>'>
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            
                                </div><!-- form-group Finish -->   

                                


                        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                        <div class='form-group'><!-- form-group Begin -->
                                                            
                                                            <label class='col-md-3 control-label' style='color: green;'> Change Color 9 Images </label>  
                                                            
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='product_img41' type='file' class='form-control' >
                                                                
                                                            </div><!-- col-md-6 Finish -->                        
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='product_img42' type='file' class='form-control' >
                                                                
                                                            </div><!-- col-md-6 Finish -->                        
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='product_img43' type='file' class='form-control' >
                                                                
                                                            </div><!-- col-md-6 Finish -->                        
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='product_img44' type='file' class='form-control' >
                                                                
                                                            </div><!-- col-md-6 Finish -->                      
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='product_img45' type='file' class='form-control' >
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            
                                                        </div><!-- form-group Finish -->
                                                            <div class='form-group'><!-- form-group Begin -->
                                                            
                                                            <label class='col-md-3 control-label'> Product Color 9 </label> 
                                                            
                                                            <div class='col-md-1' style='display: flex; '>
                                                            <input name='c9' type='color' class='form-control' value='<?php echo $c9; ?>'>
                                                            </div>

                                                            <div class='col-md-6' style='display: flex; padding: 10px 0;'><!-- col-md-6 Begin -->
                                                            
                                                            <img width='70' height='70' style='padding: 0 10px;' src='product_images/<?php echo $pro_img41; ?>'>
                                                            <img width='70' height='70' style='padding: 0 10px;' src='product_images/<?php echo $pro_img42; ?>'>
                                                            <img width='70' height='70' style='padding: 0 10px;' src='product_images/<?php echo $pro_img43; ?>'>
                                                            <img width='70' height='70' style='padding: 0 10px;' src='product_images/<?php echo $pro_img44; ?>'>
                                                            <img width='70' height='70' style='padding: 0 10px;' src='product_images/<?php echo $pro_img45; ?>'>
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            
                                                        </div><!-- form-group Finish -->     
                                                        
                                                        <div class='form-group'><!-- form-group Begin -->
                                                            
                                                            <label class='col-md-3 control-label'> Color 9 Sizes </label> 
                                                            
                                                            <div class='col-md-1' ><!-- col-md-6 Begin -->
                                                                
                                                                <input name='c9small' type='number' min='0' class='form-control' value='<?php echo $c9s; ?>'>
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='c9medium' type='number' min='0' class='form-control' value='<?php echo $c9m; ?>'>
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='c9large' type='number' min='0' class='form-control' value='<?php echo $c9l; ?>'>
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='c9x_large' type='number' min='0' class='form-control' value='<?php echo $c9xl; ?>'>
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='c9xx_large' type='number' min='0' class='form-control' value='<?php echo $c9xxl; ?>'>
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            
                                        </div><!-- form-group Finish -->   

                                


                        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////// --> 

                        <div class='form-group'><!-- form-group Begin -->
                                                            
                                                            <label class='col-md-3 control-label' style='color: green;'> Change Color 10 Images </label>  
                                                            
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='product_img46' type='file' class='form-control' >
                                                                
                                                            </div><!-- col-md-6 Finish -->                        
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='product_img47' type='file' class='form-control' >
                                                                
                                                            </div><!-- col-md-6 Finish -->                        
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='product_img48' type='file' class='form-control' >
                                                                
                                                            </div><!-- col-md-6 Finish -->                        
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='product_img49' type='file' class='form-control' >
                                                                
                                                            </div><!-- col-md-6 Finish -->                      
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='product_img50' type='file' class='form-control' >
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            
                                                        </div><!-- form-group Finish -->
                                                            <div class='form-group'><!-- form-group Begin -->
                                                            
                                                            <label class='col-md-3 control-label'> Product Color 10 </label> 
                                                            
                                                            <div class='col-md-1' style='display: flex; '>
                                                            <input name='c10' type='color' class='form-control' value='<?php echo $c10; ?>'>
                                                            </div>

                                                            <div class='col-md-6' style='display: flex; padding: 10px 0;'><!-- col-md-6 Begin -->
                                                            
                                                            <img width='70' height='70' style='padding: 0 10px;' src='product_images/<?php echo $pro_img46; ?>'>
                                                            <img width='70' height='70' style='padding: 0 10px;' src='product_images/<?php echo $pro_img47; ?>'>
                                                            <img width='70' height='70' style='padding: 0 10px;' src='product_images/<?php echo $pro_img48; ?>'>
                                                            <img width='70' height='70' style='padding: 0 10px;' src='product_images/<?php echo $pro_img49; ?>'>
                                                            <img width='70' height='70' style='padding: 0 10px;' src='product_images/<?php echo $pro_img50; ?>'>
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            
                                                        </div><!-- form-group Finish -->     
                                                        
                                                        <div class='form-group'><!-- form-group Begin -->
                                                            
                                                            <label class='col-md-3 control-label'> Color 4 Sizes </label> 
                                                            
                                                            <div class='col-md-1' ><!-- col-md-6 Begin -->
                                                                
                                                                <input name='c10small' type='number' min='0' class='form-control' value='<?php echo $c10s; ?>'>
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='c10medium' type='number' min='0' class='form-control' value='<?php echo $c10m; ?>'>
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='c10large' type='number' min='0' class='form-control' value='<?php echo $c10l; ?>'>
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='c10x_large' type='number' min='0' class='form-control' value='<?php echo $c10xl; ?>'>
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            <div class='col-md-1'><!-- col-md-6 Begin -->
                                                                
                                                                <input name='c10xx_large' type='number' min='0' class='form-control' value='<?php echo $c10xxl; ?>'>
                                                                
                                                            </div><!-- col-md-6 Finish -->
                                                            
                                </div><!-- form-group Finish -->   

                                


                        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


                                
                                <div class="form-group"><!-- form-group Begin -->
                                    
                                    <label class="col-md-3 control-label"> Product Price </label> 
                                    
                                    <div class="col-md-6"><!-- col-md-6 Begin -->
                                        
                                        <input name="product_price" type="number" class="form-control" required value="<?php echo $p_price; ?>">
                                        
                                    </div><!-- col-md-6 Finish -->
                                    
                                </div><!-- form-group Finish -->

                                <div class="form-group"><!-- form-group Begin -->
                                    
                                    <label class="col-md-3 control-label" style="color: green;">All Total Sizes </label> 
                                    
                                    <div class="col-md-1" ><!-- col-md-6 Begin -->
                                        
                                        <input name="small" type="number" class="form-control" required value="<?php echo $s; ?>" disabled>
                                        
                                    </div><!-- col-md-6 Finish -->
                                    <div class="col-md-1"><!-- col-md-6 Begin -->
                                        
                                        <input name="medium" type="number" class="form-control" required value="<?php echo $m; ?>" disabled>
                                        
                                    </div><!-- col-md-6 Finish -->
                                    <div class="col-md-1"><!-- col-md-6 Begin -->
                                        
                                        <input name="large" type="number" class="form-control" required value="<?php echo $l; ?>" disabled>
                                        
                                    </div><!-- col-md-6 Finish -->
                                    <div class="col-md-1"><!-- col-md-6 Begin -->
                                        
                                        <input name="x_large" type="number" class="form-control" required value="<?php echo $xl; ?>" disabled>
                                        
                                    </div><!-- col-md-6 Finish -->
                                    <div class="col-md-2"><!-- col-md-6 Begin -->
                                        
                                        <input name="xx_large" type="number" class="form-control" required value="<?php echo $xxl; ?>" disabled>
                                        
                                    </div><!-- col-md-6 Finish -->
                                    
                                </div><!-- form-group Finish -->

 

                    
                    <div class="form-group"><!-- form-group Begin -->
                        
                        <label class="col-md-3 control-label"> Product Desc </label> 
                        
                        <div class="col-md-6"><!-- col-md-6 Begin -->
                            
                            <textarea name="product_desc" cols="19" rows="6" class="form-control">
                                <?php echo $p_desc; ?>
                            </textarea>
                            
                        </div><!-- col-md-6 Finish -->
                        
                    </div><!-- form-group Finish -->
                    
                    <div class="form-group"><!-- form-group Begin -->
                        
                        <label class="col-md-3 control-label"> Product Status </label> 
                        
                        <div class="col-md-6"><!-- col-md-6 Begin -->
                            
                        <div class="mobie_bank" style="display: flex; gap: 10px;">
                            <?php 
                                    if($p_status == 'Active'){
                                        echo  "<input class='payment_radio' type='radio' name='status_update' value='Active' checked='checked' required /> Active<br>
                                               <input class='payment_radio' type='radio' name='status_update' value='Inactive' required /> Inactive <br>";
                                    } else {
                                        echo  "<input class='payment_radio' type='radio' name='status_update' value='Active' required /> Active<br>
                                               <input class='payment_radio' type='radio' name='status_update' value='Inactive' checked='checked' required /> Inactive <br>";
                                    }
                            ?>
                        </div>
                            
                        </div><!-- col-md-6 Finish -->
                        
                    </div><!-- form-group Finish -->

                    
                    <div class="form-group"><!-- form-group Begin -->
                        
                        <label class="col-md-3 control-label"></label> 
                        
                        <div class="col-md-6"><!-- col-md-6 Begin -->
                            
                            <input name="update" value="Update Product" type="submit" class="btn btn-primary form-control">
                            
                        </div><!-- col-md-6 Finish -->
                        
                    </div><!-- form-group Finish -->
                    
                </form><!-- form-horizontal Finish -->
                
            </div><!-- panel-body Finish -->
                
            </div><!-- canel panel-default Finish -->
            
        </div><!-- col-lg-12 Finish -->
        
    </div><!-- row Finish -->
    
        <script src="js/tinymce/tinymce.min.js"></script>
        <script>tinymce.init({ selector:'textarea'});</script>
    </body>
    </html>



<?php 

if(isset($_POST['update'])){
    
    ini_set ('display_errors', 1);  
    ini_set ('display_startup_errors', 1);  
    error_reporting (E_ALL); 
    
    $product_title = $_POST['product_title'];
    $product_cat = $_POST['product_cat'];
    $pro_status = $_POST['status_update'];
    $cat = $_POST['cat'];
    $product_price = $_POST['product_price'];
    $product_desc = $_POST['product_desc'];
    $date_added = date('Y-m-d');
                
    $c1 = $_POST['c1'];
    $c2 = $_POST['c2'];
    $c3 = $_POST['c3'];
    $c4 = $_POST['c4'];
    $c5 = $_POST['c5'];    
    $c6 = $_POST['c6'];
    $c7 = $_POST['c7'];
    $c8 = $_POST['c8'];
    $c9 = $_POST['c9'];
    $c10 = $_POST['c10'];




    $c1s = $_POST['c1small'];
    $c1m = $_POST['c1medium'];
    $c1l = $_POST['c1large'];
    $c1xl = $_POST['c1x_large'];
    $c1xxl = $_POST['c1xx_large'];

    $c2s = $_POST['c2small'];
    $c2m = $_POST['c2medium'];
    $c2l = $_POST['c2large'];
    $c2xl = $_POST['c2x_large'];
    $c2xxl = $_POST['c2xx_large'];

    $c3s = $_POST['c3small'];
    $c3m = $_POST['c3medium'];
    $c3l = $_POST['c3large'];
    $c3xl = $_POST['c3x_large'];
    $c3xxl = $_POST['c3xx_large'];

    $c4s = $_POST['c4small'];
    $c4m = $_POST['c4medium'];
    $c4l = $_POST['c4large'];
    $c4xl = $_POST['c4x_large'];
    $c4xxl = $_POST['c4xx_large'];
    
    $c5s = $_POST['c5small'];
    $c5m = $_POST['c5medium'];
    $c5l = $_POST['c5large'];
    $c5xl = $_POST['c5x_large'];
    $c5xxl = $_POST['c5xx_large'];
    
    $c6s = $_POST['c6small'];
    $c6m = $_POST['c6medium'];
    $c6l = $_POST['c6large'];
    $c6xl = $_POST['c6x_large'];
    $c6xxl = $_POST['c6xx_large'];
    
    $c7s = $_POST['c7small'];
    $c7m = $_POST['c7medium'];
    $c7l = $_POST['c7large'];
    $c7xl = $_POST['c7x_large'];
    $c7xxl = $_POST['c7xx_large'];
    
    $c8s = $_POST['c8small'];
    $c8m = $_POST['c8medium'];
    $c8l = $_POST['c8large'];
    $c8xl = $_POST['c8x_large'];
    $c8xxl = $_POST['c8xx_large'];
    
    $c9s = $_POST['c9small'];
    $c9m = $_POST['c9medium'];
    $c9l = $_POST['c9large'];
    $c9xl = $_POST['c9x_large'];
    $c9xxl = $_POST['c9xx_large'];
    
    $c10s = $_POST['c10small'];
    $c10m = $_POST['c10medium'];
    $c10l = $_POST['c10large'];
    $c10xl = $_POST['c10x_large'];
    $c10xxl = $_POST['c10xx_large'];
    

    if ($_FILES['product_img1']['size'] != 0 || $_FILES['product_img2']['size'] != 0 || $_FILES['product_img3']['size'] != 0 || $_FILES['product_img4']['size'] != 0 || $_FILES['product_img5']['size'] != 0) {
        // product_img1 is empty (and not an error)
        $product_img1 = $_FILES['product_img1']['name'];
        $product_img2 = $_FILES['product_img2']['name'];
        $product_img3 = $_FILES['product_img3']['name'];
        $product_img4 = $_FILES['product_img4']['name'];
        $product_img5 = $_FILES['product_img5']['name'];
        $extension1 = pathinfo($product_img1, PATHINFO_EXTENSION); 
        $extension2 = pathinfo($product_img2, PATHINFO_EXTENSION); 
        $extension3 = pathinfo($product_img3, PATHINFO_EXTENSION); 
        $extension4 = pathinfo($product_img4, PATHINFO_EXTENSION); 
        $extension5 = pathinfo($product_img5, PATHINFO_EXTENSION); 
        $rename1 = 'XclusiveGarmentProduct'.date('YmdHis01');  
        $rename2 = 'XclusiveGarmentProduct'.date('YmdHis02');  
        $rename3 = 'XclusiveGarmentProduct'.date('YmdHis03');  
        $rename4 = 'XclusiveGarmentProduct'.date('YmdHis04');  
        $rename5 = 'XclusiveGarmentProduct'.date('YmdHis05');  
        $newname1 = $rename1.'.'.$extension1;   
        $newname2 = $rename2.'.'.$extension2;   
        $newname3 = $rename3.'.'.$extension3;   
        $newname4 = $rename4.'.'.$extension4;   
        $newname5 = $rename5.'.'.$extension5;   
        $temp_name1 = $_FILES['product_img1']['tmp_name'];
        $temp_name2 = $_FILES['product_img2']['tmp_name'];
        $temp_name3 = $_FILES['product_img3']['tmp_name'];
        $temp_name4 = $_FILES['product_img4']['tmp_name'];
        $temp_name5 = $_FILES['product_img5']['tmp_name'];
        move_uploaded_file($temp_name1,"./product_images/$newname1");
        move_uploaded_file($temp_name2,"./product_images/$newname2");
        move_uploaded_file($temp_name3,"./product_images/$newname3");
        move_uploaded_file($temp_name4,"./product_images/$newname4");
        move_uploaded_file($temp_name5,"./product_images/$newname5");
        
        $update_slide = "update products set p_cat_id='$cat',cat_id='$product_cat',date='$date_added',product_title='$product_title',product_img1='$newname1',product_img2='$newname2',product_img3='$newname3',product_img4='$newname4',product_img5='$newname5',product_price='$product_price',c1s='$c1s',c1m='$c1m',c1l='$c1l',c1xl='$c1xl',c1xxl='$c1xxl',c2s='$c2s',c2m='$c2m',c2l='$c2l',c2xl='$c2xl',c2xxl='$c2xxl',c3s='$c3s',c3m='$c3m',c3l='$c3l',c3xl='$c3xl',c3xxl='$c3xxl',c4s='$c4s',c4m='$c4m',c4l='$c4l',c4xl='$c4xl',c4xxl='$c4xxl',c5s='$c5s',c5m='$c5m',c5l='$c5l',c5xl='$c5xl',c5xxl='$c5xxl',c6s='$c6s',c6m='$c6m',c6l='$c6l',c6xl='$c6xl',c6xxl='$c6xxl',c7s='$c7s',c7m='$c7m',c7l='$c7l',c7xl='$c7xl',c7xxl='$c7xxl',c8s='$c8s',c8m='$c8m',c8l='$c8l',c8xl='$c8xl',c8xxl='$c8xxl',c9s='$c9s',c9m='$c9m',c9l='$c9l',c9xl='$c9xl',c9xxl='$c9xxl',c10s='$c10s',c10m='$c10m',c10l='$c10l',c10xl='$c10xl',c10xxl='$c10xxl',c1='$c1',c2='$c2',c3='$c3',c4='$c4',c5='$c5',c6='$c6',c7='$c7',c8='$c8',c9='$c9',c10='$c10',product_desc='$product_desc',product_status='$pro_status' where product_id='$p_id'";
        $run_update_slide = mysqli_query($con,$update_slide);
        
        if($run_update_slide){                
            echo "<script>alert('Color 1 Images has been Updated Successfully')</script>";            
            echo "<script>window.open('index.php?edit_product=$p_id;','_self')</script>";                
        }

    } 
    if ($_FILES['product_img6']['size'] != 0 || $_FILES['product_img7']['size'] != 0 || $_FILES['product_img8']['size'] != 0 || $_FILES['product_img9']['size'] != 0 || $_FILES['product_img10']['size'] != 0) {
        // product_img1 is empty (and not an error)
        $product_img6 = $_FILES['product_img6']['name'];
        $product_img7 = $_FILES['product_img7']['name'];
        $product_img8 = $_FILES['product_img8']['name'];
        $product_img9 = $_FILES['product_img9']['name'];
        $product_img10 = $_FILES['product_img10']['name'];
        $extension6 = pathinfo($product_img6, PATHINFO_EXTENSION); 
        $extension7 = pathinfo($product_img7, PATHINFO_EXTENSION); 
        $extension8 = pathinfo($product_img8, PATHINFO_EXTENSION); 
        $extension9 = pathinfo($product_img9, PATHINFO_EXTENSION); 
        $extension10 = pathinfo($product_img10, PATHINFO_EXTENSION); 
        $rename6 = 'XclusiveGarmentProduct'.date('YmdHis06');  
        $rename7 = 'XclusiveGarmentProduct'.date('YmdHis07');  
        $rename8 = 'XclusiveGarmentProduct'.date('YmdHis08');  
        $rename9 = 'XclusiveGarmentProduct'.date('YmdHis09');  
        $rename10 = 'XclusiveGarmentProduct'.date('YmdHis10');  
        $newname6 = $rename6.'.'.$extension6;   
        $newname7 = $rename7.'.'.$extension7;   
        $newname8 = $rename8.'.'.$extension8;   
        $newname9 = $rename9.'.'.$extension9;   
        $newname10 = $rename10.'.'.$extension10;   
        $temp_name6 = $_FILES['product_img6']['tmp_name'];
        $temp_name7 = $_FILES['product_img7']['tmp_name'];
        $temp_name8 = $_FILES['product_img8']['tmp_name'];
        $temp_name9 = $_FILES['product_img9']['tmp_name'];
        $temp_name10 = $_FILES['product_img10']['tmp_name'];
        move_uploaded_file($temp_name6,"./product_images/$newname6");
        move_uploaded_file($temp_name7,"./product_images/$newname7");
        move_uploaded_file($temp_name8,"./product_images/$newname8");
        move_uploaded_file($temp_name9,"./product_images/$newname9");
        move_uploaded_file($temp_name10,"./product_images/$newname10");
        
        $update_slide = "update products set p_cat_id='$cat',cat_id='$product_cat',date='$date_added',product_title='$product_title',product_img6='$newname6',product_img7='$newname7',product_img8='$newname8',product_img9='$newname9',product_img10='$newname10',product_price='$product_price',c1s='$c1s',c1m='$c1m',c1l='$c1l',c1xl='$c1xl',c1xxl='$c1xxl',c2s='$c2s',c2m='$c2m',c2l='$c2l',c2xl='$c2xl',c2xxl='$c2xxl',c3s='$c3s',c3m='$c3m',c3l='$c3l',c3xl='$c3xl',c3xxl='$c3xxl',c4s='$c4s',c4m='$c4m',c4l='$c4l',c4xl='$c4xl',c4xxl='$c4xxl',c5s='$c5s',c5m='$c5m',c5l='$c5l',c5xl='$c5xl',c5xxl='$c5xxl',c6s='$c6s',c6m='$c6m',c6l='$c6l',c6xl='$c6xl',c6xxl='$c6xxl',c7s='$c7s',c7m='$c7m',c7l='$c7l',c7xl='$c7xl',c7xxl='$c7xxl',c8s='$c8s',c8m='$c8m',c8l='$c8l',c8xl='$c8xl',c8xxl='$c8xxl',c9s='$c9s',c9m='$c9m',c9l='$c9l',c9xl='$c9xl',c9xxl='$c9xxl',c10s='$c10s',c10m='$c10m',c10l='$c10l',c10xl='$c10xl',c10xxl='$c10xxl',c1='$c1',c2='$c2',c3='$c3',c4='$c4',c5='$c5',c6='$c6',c7='$c7',c8='$c8',c9='$c9',c10='$c10',product_desc='$product_desc',product_status='$pro_status' where product_id='$p_id'";
        $run_update_slide = mysqli_query($con,$update_slide);
        
        if($run_update_slide){                
            echo "<script>alert('Color 2 Images has been Updated Successfully')</script>";            
            echo "<script>window.open('index.php?edit_product=$p_id;','_self')</script>";                
        }
        
    }     

    if ($_FILES['product_img11']['size'] != 0 || $_FILES['product_img12']['size'] != 0 || $_FILES['product_img13']['size'] != 0 || $_FILES['product_img14']['size'] != 0 || $_FILES['product_img15']['size'] != 0) {
        // product_img1 is empty (and not an error)
        $product_img11 = $_FILES['product_img11']['name'];
        $product_img12 = $_FILES['product_img12']['name'];
        $product_img13 = $_FILES['product_img13']['name'];
        $product_img14 = $_FILES['product_img14']['name'];
        $product_img15 = $_FILES['product_img15']['name'];
        $extension11 = pathinfo($product_img11, PATHINFO_EXTENSION); 
        $extension12 = pathinfo($product_img12, PATHINFO_EXTENSION); 
        $extension13 = pathinfo($product_img13, PATHINFO_EXTENSION); 
        $extension14 = pathinfo($product_img14, PATHINFO_EXTENSION); 
        $extension15 = pathinfo($product_img15, PATHINFO_EXTENSION); 
        $rename11 = 'XclusiveGarmentProduct'.date('YmdHis01');  
        $rename12 = 'XclusiveGarmentProduct'.date('YmdHis02');  
        $rename13 = 'XclusiveGarmentProduct'.date('YmdHis03');  
        $rename14 = 'XclusiveGarmentProduct'.date('YmdHis04');  
        $rename15 = 'XclusiveGarmentProduct'.date('YmdHis05');  
        $newname11 = $rename11.'.'.$extension11;   
        $newname12 = $rename12.'.'.$extension12;   
        $newname13 = $rename13.'.'.$extension13;   
        $newname14 = $rename14.'.'.$extension14;   
        $newname15 = $rename15.'.'.$extension15;   
        $temp_name11 = $_FILES['product_img11']['tmp_name'];
        $temp_name12 = $_FILES['product_img12']['tmp_name'];
        $temp_name13 = $_FILES['product_img13']['tmp_name'];
        $temp_name14 = $_FILES['product_img14']['tmp_name'];
        $temp_name15 = $_FILES['product_img15']['tmp_name'];
        move_uploaded_file($temp_name11,"./product_images/$newname11");
        move_uploaded_file($temp_name12,"./product_images/$newname12");
        move_uploaded_file($temp_name13,"./product_images/$newname13");
        move_uploaded_file($temp_name14,"./product_images/$newname14");
        move_uploaded_file($temp_name15,"./product_images/$newname15");
        
        $update_slide = "update products set p_cat_id='$cat',cat_id='$product_cat',date='$date_added',product_title='$product_title',product_img11='$newname11',product_img12='$newname12',product_img13='$newname13',product_img14='$newname14',product_img15='$newname15',product_price='$product_price',c1s='$c1s',c1m='$c1m',c1l='$c1l',c1xl='$c1xl',c1xxl='$c1xxl',c2s='$c2s',c2m='$c2m',c2l='$c2l',c2xl='$c2xl',c2xxl='$c2xxl',c3s='$c3s',c3m='$c3m',c3l='$c3l',c3xl='$c3xl',c3xxl='$c3xxl',c4s='$c4s',c4m='$c4m',c4l='$c4l',c4xl='$c4xl',c4xxl='$c4xxl',c5s='$c5s',c5m='$c5m',c5l='$c5l',c5xl='$c5xl',c5xxl='$c5xxl',c6s='$c6s',c6m='$c6m',c6l='$c6l',c6xl='$c6xl',c6xxl='$c6xxl',c7s='$c7s',c7m='$c7m',c7l='$c7l',c7xl='$c7xl',c7xxl='$c7xxl',c8s='$c8s',c8m='$c8m',c8l='$c8l',c8xl='$c8xl',c8xxl='$c8xxl',c9s='$c9s',c9m='$c9m',c9l='$c9l',c9xl='$c9xl',c9xxl='$c9xxl',c10s='$c10s',c10m='$c10m',c10l='$c10l',c10xl='$c10xl',c10xxl='$c10xxl',c1='$c1',c2='$c2',c3='$c3',c4='$c4',c5='$c5',c6='$c6',c7='$c7',c8='$c8',c9='$c9',c10='$c10',product_desc='$product_desc',product_status='$pro_status' where product_id='$p_id'";
        $run_update_slide = mysqli_query($con,$update_slide);
        
        if($run_update_slide){                
            echo "<script>alert('Color 3 Images has been Updated Successfully')</script>";            
            echo "<script>window.open('index.php?edit_product=$p_id;','_self')</script>";                
        }

    } 
    if ($_FILES['product_img16']['size'] != 0 || $_FILES['product_img17']['size'] != 0 || $_FILES['product_img18']['size'] != 0 || $_FILES['product_img19']['size'] != 0 || $_FILES['product_img20']['size'] != 0) {
        // product_img11 is empty (and not an error)
        $product_img16 = $_FILES['product_img16']['name'];
        $product_img17 = $_FILES['product_img17']['name'];
        $product_img18 = $_FILES['product_img18']['name'];
        $product_img19 = $_FILES['product_img19']['name'];
        $product_img20 = $_FILES['product_img20']['name'];
        $extension16 = pathinfo($product_img16, PATHINFO_EXTENSION); 
        $extension17 = pathinfo($product_img17, PATHINFO_EXTENSION); 
        $extension18 = pathinfo($product_img18, PATHINFO_EXTENSION); 
        $extension19 = pathinfo($product_img19, PATHINFO_EXTENSION); 
        $extension20 = pathinfo($product_img20, PATHINFO_EXTENSION); 
        $rename16 = 'XclusiveGarmentProduct'.date('YmdHis06');  
        $rename17 = 'XclusiveGarmentProduct'.date('YmdHis07');  
        $rename18 = 'XclusiveGarmentProduct'.date('YmdHis08');  
        $rename19 = 'XclusiveGarmentProduct'.date('YmdHis09');  
        $rename20 = 'XclusiveGarmentProduct'.date('YmdHis10');  
        $newname16 = $rename16.'.'.$extension16;   
        $newname17 = $rename17.'.'.$extension17;   
        $newname18 = $rename18.'.'.$extension18;   
        $newname19 = $rename19.'.'.$extension19;   
        $newname20 = $rename20.'.'.$extension20;   
        $temp_name16 = $_FILES['product_img16']['tmp_name'];
        $temp_name17 = $_FILES['product_img17']['tmp_name'];
        $temp_name18 = $_FILES['product_img18']['tmp_name'];
        $temp_name19 = $_FILES['product_img19']['tmp_name'];
        $temp_name20 = $_FILES['product_img20']['tmp_name'];
        move_uploaded_file($temp_name16,"./product_images/$newname16");
        move_uploaded_file($temp_name17,"./product_images/$newname17");
        move_uploaded_file($temp_name18,"./product_images/$newname18");
        move_uploaded_file($temp_name19,"./product_images/$newname19");
        move_uploaded_file($temp_name20,"./product_images/$newname20");
        
        $update_slide = "update products set p_cat_id='$cat',cat_id='$product_cat',date='$date_added',product_title='$product_title',product_img16='$newname16',product_img17='$newname17',product_img18='$newname18',product_img19='$newname19',product_img20='$newname20',product_price='$product_price',c1s='$c1s',c1m='$c1m',c1l='$c1l',c1xl='$c1xl',c1xxl='$c1xxl',c2s='$c2s',c2m='$c2m',c2l='$c2l',c2xl='$c2xl',c2xxl='$c2xxl',c3s='$c3s',c3m='$c3m',c3l='$c3l',c3xl='$c3xl',c3xxl='$c3xxl',c4s='$c4s',c4m='$c4m',c4l='$c4l',c4xl='$c4xl',c4xxl='$c4xxl',c5s='$c5s',c5m='$c5m',c5l='$c5l',c5xl='$c5xl',c5xxl='$c5xxl',c6s='$c6s',c6m='$c6m',c6l='$c6l',c6xl='$c6xl',c6xxl='$c6xxl',c7s='$c7s',c7m='$c7m',c7l='$c7l',c7xl='$c7xl',c7xxl='$c7xxl',c8s='$c8s',c8m='$c8m',c8l='$c8l',c8xl='$c8xl',c8xxl='$c8xxl',c9s='$c9s',c9m='$c9m',c9l='$c9l',c9xl='$c9xl',c9xxl='$c9xxl',c10s='$c10s',c10m='$c10m',c10l='$c10l',c10xl='$c10xl',c10xxl='$c10xxl',c1='$c1',c2='$c2',c3='$c3',c4='$c4',c5='$c5',c6='$c6',c7='$c7',c8='$c8',c9='$c9',c10='$c10',product_desc='$product_desc',product_status='$pro_status' where product_id='$p_id'";
        $run_update_slide = mysqli_query($con,$update_slide);
        
        if($run_update_slide){                
            echo "<script>alert('Color 4 Images has been Updated Successfully')</script>";            
            echo "<script>window.open('index.php?edit_product=$p_id;','_self')</script>";                
        }
        
    }
    if ($_FILES['product_img21']['size'] != 0 || $_FILES['product_img22']['size'] != 0 || $_FILES['product_img23']['size'] != 0 || $_FILES['product_img24']['size'] != 0 || $_FILES['product_img25']['size'] != 0) {
        // product_img21 is empty (and not an error)
        $product_img21 = $_FILES['product_img21']['name'];
        $product_img22 = $_FILES['product_img22']['name'];
        $product_img23 = $_FILES['product_img23']['name'];
        $product_img24 = $_FILES['product_img24']['name'];
        $product_img25 = $_FILES['product_img25']['name'];
        $extension21 = pathinfo($product_img21, PATHINFO_EXTENSION); 
        $extension22 = pathinfo($product_img22, PATHINFO_EXTENSION); 
        $extension23 = pathinfo($product_img23, PATHINFO_EXTENSION); 
        $extension24 = pathinfo($product_img24, PATHINFO_EXTENSION); 
        $extension25 = pathinfo($product_img25, PATHINFO_EXTENSION); 
        $rename21 = 'XclusiveGarmentProduct'.date('YmdHis01');  
        $rename22 = 'XclusiveGarmentProduct'.date('YmdHis02');  
        $rename23 = 'XclusiveGarmentProduct'.date('YmdHis03');  
        $rename24 = 'XclusiveGarmentProduct'.date('YmdHis04');  
        $rename25 = 'XclusiveGarmentProduct'.date('YmdHis05');  
        $newname21 = $rename21.'.'.$extension21;   
        $newname22 = $rename22.'.'.$extension22;   
        $newname23 = $rename23.'.'.$extension23;   
        $newname24 = $rename24.'.'.$extension24;   
        $newname25 = $rename25.'.'.$extension25;   
        $temp_name21 = $_FILES['product_img21']['tmp_name'];
        $temp_name22 = $_FILES['product_img22']['tmp_name'];
        $temp_name23 = $_FILES['product_img23']['tmp_name'];
        $temp_name24 = $_FILES['product_img24']['tmp_name'];
        $temp_name25 = $_FILES['product_img25']['tmp_name'];
        move_uploaded_file($temp_name21,"./product_images/$newname21");
        move_uploaded_file($temp_name22,"./product_images/$newname22");
        move_uploaded_file($temp_name23,"./product_images/$newname23");
        move_uploaded_file($temp_name24,"./product_images/$newname24");
        move_uploaded_file($temp_name25,"./product_images/$newname25");
        
        $update_slide = "update products set p_cat_id='$cat',cat_id='$product_cat',date='$date_added',product_title='$product_title',product_img21='$newname21',product_img22='$newname22',product_img23='$newname23',product_img24='$newname24',product_img25='$newname25',product_price='$product_price',c1s='$c1s',c1m='$c1m',c1l='$c1l',c1xl='$c1xl',c1xxl='$c1xxl',c2s='$c2s',c2m='$c2m',c2l='$c2l',c2xl='$c2xl',c2xxl='$c2xxl',c3s='$c3s',c3m='$c3m',c3l='$c3l',c3xl='$c3xl',c3xxl='$c3xxl',c4s='$c4s',c4m='$c4m',c4l='$c4l',c4xl='$c4xl',c4xxl='$c4xxl',c5s='$c5s',c5m='$c5m',c5l='$c5l',c5xl='$c5xl',c5xxl='$c5xxl',c6s='$c6s',c6m='$c6m',c6l='$c6l',c6xl='$c6xl',c6xxl='$c6xxl',c7s='$c7s',c7m='$c7m',c7l='$c7l',c7xl='$c7xl',c7xxl='$c7xxl',c8s='$c8s',c8m='$c8m',c8l='$c8l',c8xl='$c8xl',c8xxl='$c8xxl',c9s='$c9s',c9m='$c9m',c9l='$c9l',c9xl='$c9xl',c9xxl='$c9xxl',c10s='$c10s',c10m='$c10m',c10l='$c10l',c10xl='$c10xl',c10xxl='$c10xxl',c1='$c1',c2='$c2',c3='$c3',c4='$c4',c5='$c5',c6='$c6',c7='$c7',c8='$c8',c9='$c9',c10='$c10',product_desc='$product_desc',product_status='$pro_status' where product_id='$p_id'";
        $run_update_slide = mysqli_query($con,$update_slide);
        
        if($run_update_slide){                
            echo "<script>alert('Color 5 Images has been Updated Successfully')</script>";            
            echo "<script>window.open('index.php?edit_product=$p_id;','_self')</script>";                
        }

    } 
    if ($_FILES['product_img26']['size'] != 0 || $_FILES['product_img27']['size'] != 0 || $_FILES['product_img28']['size'] != 0 || $_FILES['product_img29']['size'] != 0 || $_FILES['product_img30']['size'] != 0) {
        // product_img21 is empty (and not an error)
        $product_img26 = $_FILES['product_img26']['name'];
        $product_img27 = $_FILES['product_img27']['name'];
        $product_img28 = $_FILES['product_img28']['name'];
        $product_img29 = $_FILES['product_img29']['name'];
        $product_img30 = $_FILES['product_img30']['name'];
        $extension26 = pathinfo($product_img26, PATHINFO_EXTENSION); 
        $extension27 = pathinfo($product_img27, PATHINFO_EXTENSION); 
        $extension28 = pathinfo($product_img28, PATHINFO_EXTENSION); 
        $extension29 = pathinfo($product_img29, PATHINFO_EXTENSION); 
        $extension30 = pathinfo($product_img30, PATHINFO_EXTENSION); 
        $rename26 = 'XclusiveGarmentProduct'.date('YmdHis06');  
        $rename27 = 'XclusiveGarmentProduct'.date('YmdHis07');  
        $rename28 = 'XclusiveGarmentProduct'.date('YmdHis08');  
        $rename29 = 'XclusiveGarmentProduct'.date('YmdHis09');  
        $rename30 = 'XclusiveGarmentProduct'.date('YmdHis10');  
        $newname26 = $rename26.'.'.$extension26;   
        $newname27 = $rename27.'.'.$extension27;   
        $newname28 = $rename28.'.'.$extension28;   
        $newname29 = $rename29.'.'.$extension29;   
        $newname30 = $rename30.'.'.$extension30;   
        $temp_name26 = $_FILES['product_img26']['tmp_name'];
        $temp_name27 = $_FILES['product_img27']['tmp_name'];
        $temp_name28 = $_FILES['product_img28']['tmp_name'];
        $temp_name29 = $_FILES['product_img29']['tmp_name'];
        $temp_name30 = $_FILES['product_img30']['tmp_name'];
        move_uploaded_file($temp_name26,"./product_images/$newname26");
        move_uploaded_file($temp_name27,"./product_images/$newname27");
        move_uploaded_file($temp_name28,"./product_images/$newname28");
        move_uploaded_file($temp_name29,"./product_images/$newname29");
        move_uploaded_file($temp_name30,"./product_images/$newname30");
        
        $update_slide = "update products set p_cat_id='$cat',cat_id='$product_cat',date='$date_added',product_title='$product_title',product_img26='$newname26',product_img27='$newname27',product_img28='$newname28',product_img29='$newname29',product_img30='$newname30',product_price='$product_price',c1s='$c1s',c1m='$c1m',c1l='$c1l',c1xl='$c1xl',c1xxl='$c1xxl',c2s='$c2s',c2m='$c2m',c2l='$c2l',c2xl='$c2xl',c2xxl='$c2xxl',c3s='$c3s',c3m='$c3m',c3l='$c3l',c3xl='$c3xl',c3xxl='$c3xxl',c4s='$c4s',c4m='$c4m',c4l='$c4l',c4xl='$c4xl',c4xxl='$c4xxl',c5s='$c5s',c5m='$c5m',c5l='$c5l',c5xl='$c5xl',c5xxl='$c5xxl',c6s='$c6s',c6m='$c6m',c6l='$c6l',c6xl='$c6xl',c6xxl='$c6xxl',c7s='$c7s',c7m='$c7m',c7l='$c7l',c7xl='$c7xl',c7xxl='$c7xxl',c8s='$c8s',c8m='$c8m',c8l='$c8l',c8xl='$c8xl',c8xxl='$c8xxl',c9s='$c9s',c9m='$c9m',c9l='$c9l',c9xl='$c9xl',c9xxl='$c9xxl',c10s='$c10s',c10m='$c10m',c10l='$c10l',c10xl='$c10xl',c10xxl='$c10xxl',c1='$c1',c2='$c2',c3='$c3',c4='$c4',c5='$c5',c6='$c6',c7='$c7',c8='$c8',c9='$c9',c10='$c10',product_desc='$product_desc',product_status='$pro_status' where product_id='$p_id'";
        $run_update_slide = mysqli_query($con,$update_slide);
        
        if($run_update_slide){                
            echo "<script>alert('Color 6 Images has been Updated Successfully')</script>";            
            echo "<script>window.open('index.php?edit_product=$p_id;','_self')</script>";                
        }
        
    } 
    
    if ($_FILES['product_img31']['size'] != 0 || $_FILES['product_img32']['size'] != 0 || $_FILES['product_img33']['size'] != 0 || $_FILES['product_img34']['size'] != 0 || $_FILES['product_img35']['size'] != 0) {
        // product_img31 is empty (and not an error)
        $product_img31 = $_FILES['product_img31']['name'];
        $product_img32 = $_FILES['product_img32']['name'];
        $product_img33 = $_FILES['product_img33']['name'];
        $product_img34 = $_FILES['product_img34']['name'];
        $product_img35 = $_FILES['product_img35']['name'];
        $extension31 = pathinfo($product_img31, PATHINFO_EXTENSION); 
        $extension32 = pathinfo($product_img32, PATHINFO_EXTENSION); 
        $extension33 = pathinfo($product_img33, PATHINFO_EXTENSION); 
        $extension34 = pathinfo($product_img34, PATHINFO_EXTENSION); 
        $extension35 = pathinfo($product_img35, PATHINFO_EXTENSION); 
        $rename31 = 'XclusiveGarmentProduct'.date('YmdHis01');  
        $rename32 = 'XclusiveGarmentProduct'.date('YmdHis02');  
        $rename33 = 'XclusiveGarmentProduct'.date('YmdHis03');  
        $rename34 = 'XclusiveGarmentProduct'.date('YmdHis04');  
        $rename35 = 'XclusiveGarmentProduct'.date('YmdHis05');  
        $newname31 = $rename31.'.'.$extension31;   
        $newname32 = $rename32.'.'.$extension32;   
        $newname33 = $rename33.'.'.$extension33;   
        $newname34 = $rename34.'.'.$extension34;   
        $newname35 = $rename35.'.'.$extension35;   
        $temp_name31 = $_FILES['product_img31']['tmp_name'];
        $temp_name32 = $_FILES['product_img32']['tmp_name'];
        $temp_name33 = $_FILES['product_img33']['tmp_name'];
        $temp_name34 = $_FILES['product_img34']['tmp_name'];
        $temp_name35 = $_FILES['product_img35']['tmp_name'];
        move_uploaded_file($temp_name31,"./product_images/$newname31");
        move_uploaded_file($temp_name32,"./product_images/$newname32");
        move_uploaded_file($temp_name33,"./product_images/$newname33");
        move_uploaded_file($temp_name34,"./product_images/$newname34");
        move_uploaded_file($temp_name35,"./product_images/$newname35");
        
        $update_slide = "update products set p_cat_id='$cat',cat_id='$product_cat',date='$date_added',product_title='$product_title',product_img31='$newname31',product_img32='$newname32',product_img33='$newname33',product_img34='$newname34',product_img35='$newname35',product_price='$product_price',c1s='$c1s',c1m='$c1m',c1l='$c1l',c1xl='$c1xl',c1xxl='$c1xxl',c2s='$c2s',c2m='$c2m',c2l='$c2l',c2xl='$c2xl',c2xxl='$c2xxl',c3s='$c3s',c3m='$c3m',c3l='$c3l',c3xl='$c3xl',c3xxl='$c3xxl',c4s='$c4s',c4m='$c4m',c4l='$c4l',c4xl='$c4xl',c4xxl='$c4xxl',c5s='$c5s',c5m='$c5m',c5l='$c5l',c5xl='$c5xl',c5xxl='$c5xxl',c6s='$c6s',c6m='$c6m',c6l='$c6l',c6xl='$c6xl',c6xxl='$c6xxl',c7s='$c7s',c7m='$c7m',c7l='$c7l',c7xl='$c7xl',c7xxl='$c7xxl',c8s='$c8s',c8m='$c8m',c8l='$c8l',c8xl='$c8xl',c8xxl='$c8xxl',c9s='$c9s',c9m='$c9m',c9l='$c9l',c9xl='$c9xl',c9xxl='$c9xxl',c10s='$c10s',c10m='$c10m',c10l='$c10l',c10xl='$c10xl',c10xxl='$c10xxl',c1='$c1',c2='$c2',c3='$c3',c4='$c4',c5='$c5',c6='$c6',c7='$c7',c8='$c8',c9='$c9',c10='$c10',product_desc='$product_desc',product_status='$pro_status' where product_id='$p_id'";
        $run_update_slide = mysqli_query($con,$update_slide);
        
        if($run_update_slide){                
            echo "<script>alert('Color 7 Images has been Updated Successfully')</script>";            
            echo "<script>window.open('index.php?edit_product=$p_id;','_self')</script>";                
        }

    } 
    if ($_FILES['product_img36']['size'] != 0 || $_FILES['product_img37']['size'] != 0 || $_FILES['product_img38']['size'] != 0 || $_FILES['product_img39']['size'] != 0 || $_FILES['product_img40']['size'] != 0) {
        // product_img31 is empty (and not an error)
        $product_img36 = $_FILES['product_img36']['name'];
        $product_img37 = $_FILES['product_img37']['name'];
        $product_img38 = $_FILES['product_img38']['name'];
        $product_img39 = $_FILES['product_img39']['name'];
        $product_img40 = $_FILES['product_img40']['name'];
        $extension36 = pathinfo($product_img36, PATHINFO_EXTENSION); 
        $extension37 = pathinfo($product_img37, PATHINFO_EXTENSION); 
        $extension38 = pathinfo($product_img38, PATHINFO_EXTENSION); 
        $extension39 = pathinfo($product_img39, PATHINFO_EXTENSION); 
        $extension40 = pathinfo($product_img40, PATHINFO_EXTENSION); 
        $rename36 = 'XclusiveGarmentProduct'.date('YmdHis06');  
        $rename37 = 'XclusiveGarmentProduct'.date('YmdHis07');  
        $rename38 = 'XclusiveGarmentProduct'.date('YmdHis08');  
        $rename39 = 'XclusiveGarmentProduct'.date('YmdHis09');  
        $rename40 = 'XclusiveGarmentProduct'.date('YmdHis40');  
        $newname36 = $rename36.'.'.$extension36;   
        $newname37 = $rename37.'.'.$extension37;   
        $newname38 = $rename38.'.'.$extension38;   
        $newname39 = $rename39.'.'.$extension39;   
        $newname40 = $rename40.'.'.$extension40;   
        $temp_name36 = $_FILES['product_img36']['tmp_name'];
        $temp_name37 = $_FILES['product_img37']['tmp_name'];
        $temp_name38 = $_FILES['product_img38']['tmp_name'];
        $temp_name39 = $_FILES['product_img39']['tmp_name'];
        $temp_name40 = $_FILES['product_img40']['tmp_name'];
        move_uploaded_file($temp_name36,"./product_images/$newname36");
        move_uploaded_file($temp_name37,"./product_images/$newname37");
        move_uploaded_file($temp_name38,"./product_images/$newname38");
        move_uploaded_file($temp_name39,"./product_images/$newname39");
        move_uploaded_file($temp_name40,"./product_images/$newname40");
        
        $update_slide = "update products set p_cat_id='$cat',cat_id='$product_cat',date='$date_added',product_title='$product_title',product_img36='$newname36',product_img37='$newname37',product_img38='$newname38',product_img39='$newname39',product_img40='$newname40',product_price='$product_price',c1s='$c1s',c1m='$c1m',c1l='$c1l',c1xl='$c1xl',c1xxl='$c1xxl',c2s='$c2s',c2m='$c2m',c2l='$c2l',c2xl='$c2xl',c2xxl='$c2xxl',c3s='$c3s',c3m='$c3m',c3l='$c3l',c3xl='$c3xl',c3xxl='$c3xxl',c4s='$c4s',c4m='$c4m',c4l='$c4l',c4xl='$c4xl',c4xxl='$c4xxl',c5s='$c5s',c5m='$c5m',c5l='$c5l',c5xl='$c5xl',c5xxl='$c5xxl',c6s='$c6s',c6m='$c6m',c6l='$c6l',c6xl='$c6xl',c6xxl='$c6xxl',c7s='$c7s',c7m='$c7m',c7l='$c7l',c7xl='$c7xl',c7xxl='$c7xxl',c8s='$c8s',c8m='$c8m',c8l='$c8l',c8xl='$c8xl',c8xxl='$c8xxl',c9s='$c9s',c9m='$c9m',c9l='$c9l',c9xl='$c9xl',c9xxl='$c9xxl',c10s='$c10s',c10m='$c10m',c10l='$c10l',c10xl='$c10xl',c10xxl='$c10xxl',c1='$c1',c2='$c2',c3='$c3',c4='$c4',c5='$c5',c6='$c6',c7='$c7',c8='$c8',c9='$c9',c10='$c10',product_desc='$product_desc',product_status='$pro_status' where product_id='$p_id'";
        $run_update_slide = mysqli_query($con,$update_slide);
        
        if($run_update_slide){                
            echo "<script>alert('Color 8 Images has been Updated Successfully')</script>";            
            echo "<script>window.open('index.php?edit_product=$p_id;','_self')</script>";                
        }
        
    }     
    if ($_FILES['product_img41']['size'] != 0 || $_FILES['product_img42']['size'] != 0 || $_FILES['product_img43']['size'] != 0 || $_FILES['product_img44']['size'] != 0 || $_FILES['product_img45']['size'] != 0) {
        // product_img41 is empty (and not an error)
        $product_img41 = $_FILES['product_img41']['name'];
        $product_img42 = $_FILES['product_img42']['name'];
        $product_img43 = $_FILES['product_img43']['name'];
        $product_img44 = $_FILES['product_img44']['name'];
        $product_img45 = $_FILES['product_img45']['name'];
        $extension41 = pathinfo($product_img41, PATHINFO_EXTENSION); 
        $extension42 = pathinfo($product_img42, PATHINFO_EXTENSION); 
        $extension43 = pathinfo($product_img43, PATHINFO_EXTENSION); 
        $extension44 = pathinfo($product_img44, PATHINFO_EXTENSION); 
        $extension45 = pathinfo($product_img45, PATHINFO_EXTENSION); 
        $rename41 = 'XclusiveGarmentProduct'.date('YmdHis01');  
        $rename42 = 'XclusiveGarmentProduct'.date('YmdHis02');  
        $rename43 = 'XclusiveGarmentProduct'.date('YmdHis03');  
        $rename44 = 'XclusiveGarmentProduct'.date('YmdHis04');  
        $rename45 = 'XclusiveGarmentProduct'.date('YmdHis05');  
        $newname41 = $rename41.'.'.$extension41;   
        $newname42 = $rename42.'.'.$extension42;   
        $newname43 = $rename43.'.'.$extension43;   
        $newname44 = $rename44.'.'.$extension44;   
        $newname45 = $rename45.'.'.$extension45;   
        $temp_name41 = $_FILES['product_img41']['tmp_name'];
        $temp_name42 = $_FILES['product_img42']['tmp_name'];
        $temp_name43 = $_FILES['product_img43']['tmp_name'];
        $temp_name44 = $_FILES['product_img44']['tmp_name'];
        $temp_name45 = $_FILES['product_img45']['tmp_name'];
        move_uploaded_file($temp_name41,"./product_images/$newname41");
        move_uploaded_file($temp_name42,"./product_images/$newname42");
        move_uploaded_file($temp_name43,"./product_images/$newname43");
        move_uploaded_file($temp_name44,"./product_images/$newname44");
        move_uploaded_file($temp_name45,"./product_images/$newname45");
        
        $update_slide = "update products set p_cat_id='$cat',cat_id='$product_cat',date='$date_added',product_title='$product_title',product_img41='$newname41',product_img42='$newname42',product_img43='$newname43',product_img44='$newname44',product_img45='$newname45',product_price='$product_price',c1s='$c1s',c1m='$c1m',c1l='$c1l',c1xl='$c1xl',c1xxl='$c1xxl',c2s='$c2s',c2m='$c2m',c2l='$c2l',c2xl='$c2xl',c2xxl='$c2xxl',c3s='$c3s',c3m='$c3m',c3l='$c3l',c3xl='$c3xl',c3xxl='$c3xxl',c4s='$c4s',c4m='$c4m',c4l='$c4l',c4xl='$c4xl',c4xxl='$c4xxl',c5s='$c5s',c5m='$c5m',c5l='$c5l',c5xl='$c5xl',c5xxl='$c5xxl',c6s='$c6s',c6m='$c6m',c6l='$c6l',c6xl='$c6xl',c6xxl='$c6xxl',c7s='$c7s',c7m='$c7m',c7l='$c7l',c7xl='$c7xl',c7xxl='$c7xxl',c8s='$c8s',c8m='$c8m',c8l='$c8l',c8xl='$c8xl',c8xxl='$c8xxl',c9s='$c9s',c9m='$c9m',c9l='$c9l',c9xl='$c9xl',c9xxl='$c9xxl',c10s='$c10s',c10m='$c10m',c10l='$c10l',c10xl='$c10xl',c10xxl='$c10xxl',c1='$c1',c2='$c2',c3='$c3',c4='$c4',c5='$c5',c6='$c6',c7='$c7',c8='$c8',c9='$c9',c10='$c10',product_desc='$product_desc',product_status='$pro_status' where product_id='$p_id'";
        $run_update_slide = mysqli_query($con,$update_slide);
        
        if($run_update_slide){                
            echo "<script>alert('Color 9 Images has been Updated Successfully')</script>";            
            echo "<script>window.open('index.php?edit_product=$p_id;','_self')</script>";                
        }

    } 
    if ($_FILES['product_img46']['size'] != 0 || $_FILES['product_img47']['size'] != 0 || $_FILES['product_img48']['size'] != 0 || $_FILES['product_img49']['size'] != 0 || $_FILES['product_img50']['size'] != 0) {
        // product_img41 is empty (and not an error)
        $product_img46 = $_FILES['product_img46']['name'];
        $product_img47 = $_FILES['product_img47']['name'];
        $product_img48 = $_FILES['product_img48']['name'];
        $product_img49 = $_FILES['product_img49']['name'];
        $product_img50 = $_FILES['product_img50']['name'];
        $extension46 = pathinfo($product_img46, PATHINFO_EXTENSION); 
        $extension47 = pathinfo($product_img47, PATHINFO_EXTENSION); 
        $extension48 = pathinfo($product_img48, PATHINFO_EXTENSION); 
        $extension49 = pathinfo($product_img49, PATHINFO_EXTENSION); 
        $extension50 = pathinfo($product_img50, PATHINFO_EXTENSION); 
        $rename46 = 'XclusiveGarmentProduct'.date('YmdHis06');  
        $rename47 = 'XclusiveGarmentProduct'.date('YmdHis07');  
        $rename48 = 'XclusiveGarmentProduct'.date('YmdHis08');  
        $rename49 = 'XclusiveGarmentProduct'.date('YmdHis09');  
        $rename50 = 'XclusiveGarmentProduct'.date('YmdHis50');  
        $newname46 = $rename46.'.'.$extension46;   
        $newname47 = $rename47.'.'.$extension47;   
        $newname48 = $rename48.'.'.$extension48;   
        $newname49 = $rename49.'.'.$extension49;   
        $newname50 = $rename50.'.'.$extension50;   
        $temp_name46 = $_FILES['product_img46']['tmp_name'];
        $temp_name47 = $_FILES['product_img47']['tmp_name'];
        $temp_name48 = $_FILES['product_img48']['tmp_name'];
        $temp_name49 = $_FILES['product_img49']['tmp_name'];
        $temp_name50 = $_FILES['product_img50']['tmp_name'];
        move_uploaded_file($temp_name46,"./product_images/$newname46");
        move_uploaded_file($temp_name47,"./product_images/$newname47");
        move_uploaded_file($temp_name48,"./product_images/$newname48");
        move_uploaded_file($temp_name49,"./product_images/$newname49");
        move_uploaded_file($temp_name50,"./product_images/$newname50");
        
        $update_slide = "update products set p_cat_id='$cat',cat_id='$product_cat',date='$date_added',product_title='$product_title',product_img46='$newname46',product_img47='$newname47',product_img48='$newname48',product_img49='$newname49',product_img50='$newname50',product_price='$product_price',c1s='$c1s',c1m='$c1m',c1l='$c1l',c1xl='$c1xl',c1xxl='$c1xxl',c2s='$c2s',c2m='$c2m',c2l='$c2l',c2xl='$c2xl',c2xxl='$c2xxl',c3s='$c3s',c3m='$c3m',c3l='$c3l',c3xl='$c3xl',c3xxl='$c3xxl',c4s='$c4s',c4m='$c4m',c4l='$c4l',c4xl='$c4xl',c4xxl='$c4xxl',c5s='$c5s',c5m='$c5m',c5l='$c5l',c5xl='$c5xl',c5xxl='$c5xxl',c6s='$c6s',c6m='$c6m',c6l='$c6l',c6xl='$c6xl',c6xxl='$c6xxl',c7s='$c7s',c7m='$c7m',c7l='$c7l',c7xl='$c7xl',c7xxl='$c7xxl',c8s='$c8s',c8m='$c8m',c8l='$c8l',c8xl='$c8xl',c8xxl='$c8xxl',c9s='$c9s',c9m='$c9m',c9l='$c9l',c9xl='$c9xl',c9xxl='$c9xxl',c10s='$c10s',c10m='$c10m',c10l='$c10l',c10xl='$c10xl',c10xxl='$c10xxl',c1='$c1',c2='$c2',c3='$c3',c4='$c4',c5='$c5',c6='$c6',c7='$c7',c8='$c8',c9='$c9',c10='$c10',product_desc='$product_desc',product_status='$pro_status' where product_id='$p_id'";
        $run_update_slide = mysqli_query($con,$update_slide);
        
        if($run_update_slide){                
            echo "<script>alert('Color 10 Images has been Updated Successfully')</script>";            
            echo "<script>window.open('index.php?edit_product=$p_id;','_self')</script>";                
        }
        
    }   

          
     else {
        $product_title = $_POST['product_title'];
        $product_cat = $_POST['product_cat'];
        $pro_status = $_POST['status_update'];
        $cat = $_POST['cat'];
        $product_price = $_POST['product_price'];
        $product_desc = $_POST['product_desc'];
        $date_added = date('Y-m-d');
                    
        $c1 = $_POST['c1'];
        $c2 = $_POST['c2'];
        $c3 = $_POST['c3'];
        $c4 = $_POST['c4'];
        $c5 = $_POST['c5'];    
        $c6 = $_POST['c6'];
        $c7 = $_POST['c7'];
        $c8 = $_POST['c8'];
        $c9 = $_POST['c9'];
        $c10 = $_POST['c10'];
    
    
    
    
        $c1s = $_POST['c1small'];
        $c1m = $_POST['c1medium'];
        $c1l = $_POST['c1large'];
        $c1xl = $_POST['c1x_large'];
        $c1xxl = $_POST['c1xx_large'];
    
        $c2s = $_POST['c2small'];
        $c2m = $_POST['c2medium'];
        $c2l = $_POST['c2large'];
        $c2xl = $_POST['c2x_large'];
        $c2xxl = $_POST['c2xx_large'];
    
        $c3s = $_POST['c3small'];
        $c3m = $_POST['c3medium'];
        $c3l = $_POST['c3large'];
        $c3xl = $_POST['c3x_large'];
        $c3xxl = $_POST['c3xx_large'];
    
        $c4s = $_POST['c4small'];
        $c4m = $_POST['c4medium'];
        $c4l = $_POST['c4large'];
        $c4xl = $_POST['c4x_large'];
        $c4xxl = $_POST['c4xx_large'];
        
        $c5s = $_POST['c5small'];
        $c5m = $_POST['c5medium'];
        $c5l = $_POST['c5large'];
        $c5xl = $_POST['c5x_large'];
        $c5xxl = $_POST['c5xx_large'];
        
        $c6s = $_POST['c6small'];
        $c6m = $_POST['c6medium'];
        $c6l = $_POST['c6large'];
        $c6xl = $_POST['c6x_large'];
        $c6xxl = $_POST['c6xx_large'];
        
        $c7s = $_POST['c7small'];
        $c7m = $_POST['c7medium'];
        $c7l = $_POST['c7large'];
        $c7xl = $_POST['c7x_large'];
        $c7xxl = $_POST['c7xx_large'];
        
        $c8s = $_POST['c8small'];
        $c8m = $_POST['c8medium'];
        $c8l = $_POST['c8large'];
        $c8xl = $_POST['c8x_large'];
        $c8xxl = $_POST['c8xx_large'];
        
        $c9s = $_POST['c9small'];
        $c9m = $_POST['c9medium'];
        $c9l = $_POST['c9large'];
        $c9xl = $_POST['c9x_large'];
        $c9xxl = $_POST['c9xx_large'];
        
        $c10s = $_POST['c10small'];
        $c10m = $_POST['c10medium'];
        $c10l = $_POST['c10large'];
        $c10xl = $_POST['c10x_large'];
        $c10xxl = $_POST['c10xx_large'];

        // work when no update image        
        $update_product = "update products set p_cat_id='$cat',cat_id='$product_cat',date='$date_added',product_title='$product_title',product_price='$product_price',c1s='$c1s',c1m='$c1m',c1l='$c1l',c1xl='$c1xl',c1xxl='$c1xxl',c2s='$c2s',c2m='$c2m',c2l='$c2l',c2xl='$c2xl',c2xxl='$c2xxl',c3s='$c3s',c3m='$c3m',c3l='$c3l',c3xl='$c3xl',c3xxl='$c3xxl',c4s='$c4s',c4m='$c4m',c4l='$c4l',c4xl='$c4xl',c4xxl='$c4xxl',c5s='$c5s',c5m='$c5m',c5l='$c5l',c5xl='$c5xl',c5xxl='$c5xxl',c6s='$c6s',c6m='$c6m',c6l='$c6l',c6xl='$c6xl',c6xxl='$c6xxl',c7s='$c7s',c7m='$c7m',c7l='$c7l',c7xl='$c7xl',c7xxl='$c7xxl',c8s='$c8s',c8m='$c8m',c8l='$c8l',c8xl='$c8xl',c8xxl='$c8xxl',c9s='$c9s',c9m='$c9m',c9l='$c9l',c9xl='$c9xl',c9xxl='$c9xxl',c10s='$c10s',c10m='$c10m',c10l='$c10l',c10xl='$c10xl',c10xxl='$c10xxl',c1='$c1',c2='$c2',c3='$c3',c4='$c4',c5='$c5',c6='$c6',c7='$c7',c8='$c8',c9='$c9',c10='$c10',product_desc='$product_desc',product_status='$pro_status' where product_id='$p_id'";
        $run_product = mysqli_query($con,$update_product);
        
        if($run_product){
            
        echo "<script>alert('Your product has been updated Successfully')</script>";             
        echo "<script>window.open('index.php?view_products','_self')</script>"; 
            
        }
    }
    
}

?>


<?php } ?>