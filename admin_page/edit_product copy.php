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
            
                    <?php 
                    if($c1 != '#000000' && $c1 != ''){
                        echo "
                        <div class='form-group'><!-- form-group Begin -->
                        
                        <label class='col-md-3 control-label'> Product Color 1 </label> 
                        
                        <div class='col-md-1' style='display: flex; '>
                        <input name='c1' type='color' class='form-control' value='$c1'>
                        </div>
                        
                        <div class='col-md-6' style='display: flex; padding: 10px 0;'><!-- col-md-6 Begin -->
                        
                          <img width='70' height='70' style='padding: 0 10px;' src='product_images/$pro_img1' alt='$pro_img1'>
                          <img width='70' height='70' style='padding: 0 10px;' src='product_images/$pro_img2' alt='$pro_img2'>
                          <img width='70' height='70' style='padding: 0 10px;' src='product_images/$pro_img3' alt='$pro_img3'>
                          <img width='70' height='70' style='padding: 0 10px;' src='product_images/$pro_img4' alt='$pro_img4'>
                          <img width='70' height='70' style='padding: 0 10px;' src='product_images/$pro_img5' alt='$pro_img5'>
                            
                        </div><!-- col-md-6 Finish -->
                        
                    </div><!-- form-group Finish -->     
                    
                    <div class='form-group'><!-- form-group Begin -->
                        
                        <label class='col-md-3 control-label'> Color 1 Sizes </label> 
                        
                        <div class='col-md-1' ><!-- col-md-6 Begin -->
                            
                            <input name='c1small' type='number' min='0' class='form-control' required value='$c1s'>
                            
                        </div><!-- col-md-6 Finish -->
                        <div class='col-md-1'><!-- col-md-6 Begin -->
                            
                            <input name='c1medium' type='number' min='0' class='form-control' required value='$c1m'>
                            
                        </div><!-- col-md-6 Finish -->
                        <div class='col-md-1'><!-- col-md-6 Begin -->
                            
                            <input name='c1large' type='number' min='0' class='form-control' required value='$c1l'>
                            
                        </div><!-- col-md-6 Finish -->
                        <div class='col-md-1'><!-- col-md-6 Begin -->
                            
                            <input name='c1x_large' type='number' min='0' class='form-control' required value='$c1xl'>
                            
                        </div><!-- col-md-6 Finish -->
                        <div class='col-md-2'><!-- col-md-6 Begin -->
                            
                            <input name='c1xx_large' type='number' min='0' class='form-control' required value='$c1xxl'>
                            
                        </div><!-- col-md-6 Finish -->
                        
                    </div><!-- form-group Finish -->                 
                        
                        
                        ";
                    }  else {
                        echo "
                        <input name='c1' type='hidden' class='form-control' value='$c1'>
                        <input name='c1small' type='hidden' class='form-control' required value='$c1s'>
                        <input name='c1medium' type='hidden' class='form-control' required value='$c1m'>                            
                         <input name='c1large' type='hidden' class='form-control' required value='$c1l'>   
                         <input name='c1x_large' type='hidden' class='form-control' required value='$c1xl'>                     
                         <input name='c1xx_large' type='hidden' class='form-control' required value='$c1xxl'>
                        ";
                    }
                    
                    
                    ?>
                    <?php 
                    if($c2 != '#000000' && $c2 != ''){
                        echo "
                        <div class='form-group'><!-- form-group Begin -->
                        
                        <label class='col-md-3 control-label'> Product Color 2 </label> 
                        
                        <div class='col-md-1' style='display: flex;'>
                        <input name='c2' type='color' class='form-control' value='$c2'>
                        </div>
                        <div class='col-md-6' style='display: flex; padding: 10px 0;'><!-- col-md-6 Begin -->
                        
                          <img width='70' height='70' style='padding: 0 10px;' src='product_images/$pro_img6' alt='$pro_img6'>
                          <img width='70' height='70' style='padding: 0 10px;' src='product_images/$pro_img7' alt='$pro_img7'>
                          <img width='70' height='70' style='padding: 0 10px;' src='product_images/$pro_img8' alt='$pro_img8'>
                          <img width='70' height='70' style='padding: 0 10px;' src='product_images/$pro_img9' alt='$pro_img9'>
                          <img width='70' height='70' style='padding: 0 10px;' src='product_images/$pro_img10' alt='$pro_img10'>
                            
                        </div><!-- col-md-6 Finish -->
                        
                    </div><!-- form-group Finish -->      
                    
                    <div class='form-group'><!-- form-group Begin -->
                        
                        <label class='col-md-3 control-label'> Color 2 Sizes </label> 
                        
                        <div class='col-md-1' ><!-- col-md-6 Begin -->
                            
                            <input name='c2small' type='number' min='0' class='form-control' required value='$c2s'>
                            
                        </div><!-- col-md-6 Finish -->
                        <div class='col-md-1'><!-- col-md-6 Begin -->
                            
                            <input name='c2medium' type='number' min='0' class='form-control' required value='$c2m'>
                            
                        </div><!-- col-md-6 Finish -->
                        <div class='col-md-1'><!-- col-md-6 Begin -->
                            
                            <input name='c2large' type='number' min='0' class='form-control' required value='$c2l'>
                            
                        </div><!-- col-md-6 Finish -->
                        <div class='col-md-1'><!-- col-md-6 Begin -->
                            
                            <input name='c2x_large' type='number' min='0' class='form-control' required value='$c2xl'>
                            
                        </div><!-- col-md-6 Finish -->
                        <div class='col-md-2'><!-- col-md-6 Begin -->
                            
                            <input name='c2xx_large' type='number' min='0' class='form-control' required value='$c2xxl'>
                            
                        </div><!-- col-md-6 Finish -->
                        
                    </div><!-- form-group Finish -->                       
                        
                        
                        ";
                    }  else {
                        echo "
                        <input name='c2' type='hidden' class='form-control' value='$c2'>
                        <input name='c2small' type='hidden' class='form-control' required value='$c2s'>
                        <input name='c2medium' type='hidden' class='form-control' required value='$c2m'>                            
                         <input name='c2large' type='hidden' class='form-control' required value='$c2l'>   
                         <input name='c2x_large' type='hidden' class='form-control' required value='$c2xl'>                     
                         <input name='c2xx_large' type='hidden' class='form-control' required value='$c2xxl'>
                        ";
                    }
                    
                    
                    ?>
                    <?php 
                    if($c3 != '#000000' && $c3 != ''){
                        echo "
                        <div class='form-group'><!-- form-group Begin -->
                        
                        <label class='col-md-3 control-label'> Product Color 3 </label> 
                        
                        <div class='col-md-1' style='display: flex;'>
                        <input name='c3' type='color' class='form-control' value='$c3'>
                        </div>
                        <div class='col-md-6' style='display: flex; padding: 10px 0;'><!-- col-md-6 Begin -->

                        
                          <img width='70' height='70' style='padding: 0 10px;' src='product_images/$pro_img11' alt='$pro_img11'>
                          <img width='70' height='70' style='padding: 0 10px;' src='product_images/$pro_img12' alt='$pro_img12'>
                          <img width='70' height='70' style='padding: 0 10px;' src='product_images/$pro_img13' alt='$pro_img13'>
                          <img width='70' height='70' style='padding: 0 10px;' src='product_images/$pro_img14' alt='$pro_img14'>
                          <img width='70' height='70' style='padding: 0 10px;' src='product_images/$pro_img15' alt='$pro_img15'>
                            
                        </div><!-- col-md-6 Finish -->
                        
                    </div><!-- form-group Finish -->     
                    
                    <div class='form-group'><!-- form-group Begin -->
                        
                        <label class='col-md-3 control-label'> Color 3 Sizes </label> 
                        
                        <div class='col-md-1' ><!-- col-md-6 Begin -->
                            
                            <input name='c3small' type='number' min='0' class='form-control' required value='$c3s'>
                            
                        </div><!-- col-md-6 Finish -->
                        <div class='col-md-1'><!-- col-md-6 Begin -->
                            
                            <input name='c3medium' type='number' min='0' class='form-control' required value='$c3m'>
                            
                        </div><!-- col-md-6 Finish -->
                        <div class='col-md-1'><!-- col-md-6 Begin -->
                            
                            <input name='c3large' type='number' min='0' class='form-control' required value='$c3l'>
                            
                        </div><!-- col-md-6 Finish -->
                        <div class='col-md-1'><!-- col-md-6 Begin -->
                            
                            <input name='c3x_large' type='number' min='0' class='form-control' required value='$c3xl'>
                            
                        </div><!-- col-md-6 Finish -->
                        <div class='col-md-2'><!-- col-md-6 Begin -->
                            
                            <input name='c3xx_large' type='number' min='0' class='form-control' required value='$c3xxl'>
                            
                        </div><!-- col-md-6 Finish -->
                        
                    </div><!-- form-group Finish -->                        
                        
                        
                        ";
                    }  else {
                        echo "
                        <input name='c3' type='hidden' class='form-control' value='$c3'>
                        <input name='c3small' type='hidden' class='form-control' required value='$c3s'>
                        <input name='c3medium' type='hidden' class='form-control' required value='$c3m'>                            
                         <input name='c3large' type='hidden' class='form-control' required value='$c3l'>   
                         <input name='c3x_large' type='hidden' class='form-control' required value='$c3xl'>                     
                         <input name='c3xx_large' type='hidden' class='form-control' required value='$c3xxl'>
                        ";
                    }
                    
                    
                    ?>
                        

                    <?php 
                    if($c4 != '#000000' && $c4 != ''){
                        echo "
                        <div class='form-group'><!-- form-group Begin -->
                        
                        <label class='col-md-3 control-label'> Product Color 4 </label> 
                        
                        <div class='col-md-1' style='display: flex;'>
                        <input name='c4' type='color' class='form-control' value='$c4'>
                        </div>
                        <div class='col-md-6' style='display: flex; padding: 10px 0;'><!-- col-md-6 Begin -->
                        
                          <img width='70' height='70' style='padding: 0 10px;' src='product_images/$pro_img16' alt='$pro_img16'>
                          <img width='70' height='70' style='padding: 0 10px;' src='product_images/$pro_img17' alt='$pro_img17'>
                          <img width='70' height='70' style='padding: 0 10px;' src='product_images/$pro_img18' alt='$pro_img18'>
                          <img width='70' height='70' style='padding: 0 10px;' src='product_images/$pro_img19' alt='$pro_img19'>
                          <img width='70' height='70' style='padding: 0 10px;' src='product_images/$pro_img20' alt='$pro_img20'>
                            
                        </div><!-- col-md-6 Finish -->
                        
                    </div><!-- form-group Finish -->       
                    
                    <div class='form-group'><!-- form-group Begin -->
                        
                        <label class='col-md-3 control-label'> Color 4 Sizes </label> 
                        
                        <div class='col-md-1' ><!-- col-md-6 Begin -->
                            
                            <input name='c4small' type='number' min='0' class='form-control' required value='$c4s'>
                            
                        </div><!-- col-md-6 Finish -->
                        <div class='col-md-1'><!-- col-md-6 Begin -->
                            
                            <input name='c4medium' type='number' min='0' class='form-control' required value='$c4m'>
                            
                        </div><!-- col-md-6 Finish -->
                        <div class='col-md-1'><!-- col-md-6 Begin -->
                            
                            <input name='c4large' type='number' min='0' class='form-control' required value='$c4l'>
                            
                        </div><!-- col-md-6 Finish -->
                        <div class='col-md-1'><!-- col-md-6 Begin -->
                            
                            <input name='c4x_large' type='number' min='0' class='form-control' required value='$c4xl'>
                            
                        </div><!-- col-md-6 Finish -->
                        <div class='col-md-2'><!-- col-md-6 Begin -->
                            
                            <input name='c4xx_large' type='number' min='0' class='form-control' required value='$c4xxl'>
                            
                        </div><!-- col-md-6 Finish -->
                        
                    </div><!-- form-group Finish -->                      
                        
                        
                        ";
                    } else {
                        echo "
                        <input name='c4' type='hidden' class='form-control' value='$c4'>
                        <input name='c4small' type='hidden' class='form-control' required value='$c4s'>
                        <input name='c4medium' type='hidden' class='form-control' required value='$c4m'>                            
                         <input name='c4large' type='hidden' class='form-control' required value='$c4l'>   
                         <input name='c4x_large' type='hidden' class='form-control' required value='$c4xl'>                     
                         <input name='c4xx_large' type='hidden' class='form-control' required value='$c4xxl'>
                        ";
                    }
                    
                    ?>            
                    <?php 
                    if($c5 != '#000000' && $c5 != ''){
                        echo "
                        <div class='form-group'><!-- form-group Begin -->
                        
                        <label class='col-md-3 control-label'> Product Color 5 </label> 
                        
                        <div class='col-md-1' style='display: flex;'>
                        <input name='c5' type='color' class='form-control' value='$c5'>
                        </div>
                        <div class='col-md-6' style='display: flex; padding: 10px 0;'><!-- col-md-6 Begin -->
                        
                          <img width='70' height='70' style='padding: 0 10px;' src='product_images/$pro_img21' alt='$pro_img21'>
                          <img width='70' height='70' style='padding: 0 10px;' src='product_images/$pro_img22' alt='$pro_img22'>
                          <img width='70' height='70' style='padding: 0 10px;' src='product_images/$pro_img23' alt='$pro_img23'>
                          <img width='70' height='70' style='padding: 0 10px;' src='product_images/$pro_img24' alt='$pro_img24'>
                          <img width='70' height='70' style='padding: 0 10px;' src='product_images/$pro_img25' alt='$pro_img25'>
                            
                        </div><!-- col-md-6 Finish -->
                        
                    </div><!-- form-group Finish -->         
                    
                    <div class='form-group'><!-- form-group Begin -->
                        
                        <label class='col-md-3 control-label'> Color 5 Sizes </label> 
                        
                        <div class='col-md-1' ><!-- col-md-6 Begin -->
                            
                            <input name='c5small' type='number' min='0' class='form-control' required value='$c5s'>
                            
                        </div><!-- col-md-6 Finish -->
                        <div class='col-md-1'><!-- col-md-6 Begin -->
                            
                            <input name='c5medium' type='number' min='0' class='form-control' required value='$c5m'>
                            
                        </div><!-- col-md-6 Finish -->
                        <div class='col-md-1'><!-- col-md-6 Begin -->
                            
                            <input name='c5large' type='number' min='0' class='form-control' required value='$c5l'>
                            
                        </div><!-- col-md-6 Finish -->
                        <div class='col-md-1'><!-- col-md-6 Begin -->
                            
                            <input name='c5x_large' type='number' min='0' class='form-control' required value='$c5xl'>
                            
                        </div><!-- col-md-6 Finish -->
                        <div class='col-md-2'><!-- col-md-6 Begin -->
                            
                            <input name='c5xx_large' type='number' min='0' class='form-control' required value='$c5xxl'>
                            
                        </div><!-- col-md-6 Finish -->
                        
                    </div><!-- form-group Finish -->                    
                        
                        
                        ";
                    }  else {
                        echo "
                        <input name='c5' type='hidden' class='form-control' value='$c5'>
                        <input name='c5small' type='hidden' class='form-control' required value='$c5s'>
                        <input name='c5medium' type='hidden' class='form-control' required value='$c5m'>                            
                         <input name='c5large' type='hidden' class='form-control' required value='$c5l'>   
                         <input name='c5x_large' type='hidden' class='form-control' required value='$c5xl'>                     
                         <input name='c5xx_large' type='hidden' class='form-control' required value='$c5xxl'>
                        ";
                    }
                    
                    
                    ?>
                    <?php 
                    if($c6 != '#000000' && $c6 != ''){
                        echo "
                        <div class='form-group'><!-- form-group Begin -->
                        
                        <label class='col-md-3 control-label'> Product Color 6 </label> 
                        
                        <div class='col-md-1' style='display: flex;'>
                        <input name='c6' type='color' class='form-control' value='$c6'>
                        </div>
                        <div class='col-md-6' style='display: flex; padding: 10px 0;'><!-- col-md-6 Begin -->
                        
                          <img width='70' height='70' style='padding: 0 10px;' src='product_images/$pro_img26' alt='$pro_img26'>
                          <img width='70' height='70' style='padding: 0 10px;' src='product_images/$pro_img27' alt='$pro_img27'>
                          <img width='70' height='70' style='padding: 0 10px;' src='product_images/$pro_img28' alt='$pro_img28'>
                          <img width='70' height='70' style='padding: 0 10px;' src='product_images/$pro_img29' alt='$pro_img29'>
                          <img width='70' height='70' style='padding: 0 10px;' src='product_images/$pro_img30' alt='$pro_img30'>
                            
                        </div><!-- col-md-6 Finish -->
                        
                    </div><!-- form-group Finish -->      
                    
                    <div class='form-group'><!-- form-group Begin -->
                        
                        <label class='col-md-3 control-label'> Color 6 Sizes </label> 
                        
                        <div class='col-md-1' ><!-- col-md-6 Begin -->
                            
                            <input name='c6small' type='number' min='0' class='form-control' required value='$c6s'>
                            
                        </div><!-- col-md-6 Finish -->
                        <div class='col-md-1'><!-- col-md-6 Begin -->
                            
                            <input name='c6medium' type='number' min='0' class='form-control' required value='$c6m'>
                            
                        </div><!-- col-md-6 Finish -->
                        <div class='col-md-1'><!-- col-md-6 Begin -->
                            
                            <input name='c6large' type='number' min='0' class='form-control' required value='$c6l'>
                            
                        </div><!-- col-md-6 Finish -->
                        <div class='col-md-1'><!-- col-md-6 Begin -->
                            
                            <input name='c6x_large' type='number' min='0' class='form-control' required value='$c6xl'>
                            
                        </div><!-- col-md-6 Finish -->
                        <div class='col-md-2'><!-- col-md-6 Begin -->
                            
                            <input name='c6xx_large' type='number' min='0' class='form-control' required value='$c6xxl'>
                            
                        </div><!-- col-md-6 Finish -->
                        
                    </div><!-- form-group Finish -->                      
                        
                        
                        ";
                    }  else {
                        echo "
                        <input name='c6' type='hidden' class='form-control' value='$c6'>
                        <input name='c6small' type='hidden' class='form-control' required value='$c6s'>
                        <input name='c6medium' type='hidden' class='form-control' required value='$c6m'>                            
                         <input name='c6large' type='hidden' class='form-control' required value='$c6l'>   
                         <input name='c6x_large' type='hidden' class='form-control' required value='$c6xl'>                     
                         <input name='c6xx_large' type='hidden' class='form-control' required value='$c6xxl'>
                        ";
                    }
                    
                    
                    ?>            
                    <?php 
                    if($c7 != '#000000' && $c7 != ''){
                        echo "
                        <div class='form-group'><!-- form-group Begin -->
                        
                        <label class='col-md-3 control-label'> Product Color 7 </label> 
                        
                        <div class='col-md-1' style='display: flex;'>
                        <input name='c7' type='color' class='form-control' value='$c7'>
                        </div>
                        <div class='col-md-6' style='display: flex; padding: 10px 0;'><!-- col-md-6 Begin -->
                        
                          <img width='70' height='70' style='padding: 0 10px;' src='product_images/$pro_img31' alt='$pro_img31'>
                          <img width='70' height='70' style='padding: 0 10px;' src='product_images/$pro_img32' alt='$pro_img32'>
                          <img width='70' height='70' style='padding: 0 10px;' src='product_images/$pro_img33' alt='$pro_img33'>
                          <img width='70' height='70' style='padding: 0 10px;' src='product_images/$pro_img34' alt='$pro_img34'>
                          <img width='70' height='70' style='padding: 0 10px;' src='product_images/$pro_img35' alt='$pro_img35'>
                            
                        </div><!-- col-md-6 Finish -->
                        
                    </div><!-- form-group Finish -->      
                    
                    <div class='form-group'><!-- form-group Begin -->
                        
                        <label class='col-md-3 control-label'> Color 7 Sizes </label> 
                        
                        <div class='col-md-1' ><!-- col-md-6 Begin -->
                            
                            <input name='c7small' type='number' min='0' class='form-control' required value='$c7s'>
                            
                        </div><!-- col-md-6 Finish -->
                        <div class='col-md-1'><!-- col-md-6 Begin -->
                            
                            <input name='c7medium' type='number' min='0' class='form-control' required value='$c7m'>
                            
                        </div><!-- col-md-6 Finish -->
                        <div class='col-md-1'><!-- col-md-6 Begin -->
                            
                            <input name='c7large' type='number' min='0' class='form-control' required value='$c7l'>
                            
                        </div><!-- col-md-6 Finish -->
                        <div class='col-md-1'><!-- col-md-6 Begin -->
                            
                            <input name='c7x_large' type='number' min='0' class='form-control' required value='$c7xl'>
                            
                        </div><!-- col-md-6 Finish -->
                        <div class='col-md-2'><!-- col-md-6 Begin -->
                            
                            <input name='c7xx_large' type='number' min='0' class='form-control' required value='$c7xxl'>
                            
                        </div><!-- col-md-6 Finish -->
                        
                    </div><!-- form-group Finish -->                       
                        
                        
                        ";
                    }  else {
                        echo "
                        <input name='c7' type='hidden' class='form-control' value='$c7'>
                        <input name='c7small' type='hidden' class='form-control' required value='$c7s'>
                        <input name='c7medium' type='hidden' class='form-control' required value='$c7m'>                            
                         <input name='c7large' type='hidden' class='form-control' required value='$c7l'>   
                         <input name='c7x_large' type='hidden' class='form-control' required value='$c7xl'>                     
                         <input name='c7xx_large' type='hidden' class='form-control' required value='$c7xxl'>
                        ";
                    }
                    
                    
                    ?>
                    <?php 
                    if($c8 != '#000000' && $c8 != ''){
                        echo "
                        <div class='form-group'><!-- form-group Begin -->
                        
                        <label class='col-md-3 control-label'> Product Color 8 </label> 
                        
                        <div class='col-md-1' style='display: flex;'>
                        <input name='c8' type='color' class='form-control' value='$c8'>
                        </div>
                        <div class='col-md-6' style='display: flex; padding: 10px 0;'><!-- col-md-6 Begin -->
                        
                          <img width='70' height='70' style='padding: 0 10px;' src='product_images/$pro_img36' alt='$pro_img36'>
                          <img width='70' height='70' style='padding: 0 10px;' src='product_images/$pro_img37' alt='$pro_img37'>
                          <img width='70' height='70' style='padding: 0 10px;' src='product_images/$pro_img38' alt='$pro_img38'>
                          <img width='70' height='70' style='padding: 0 10px;' src='product_images/$pro_img39' alt='$pro_img39'>
                          <img width='70' height='70' style='padding: 0 10px;' src='product_images/$pro_img40' alt='$pro_img40'>
                            
                        </div><!-- col-md-6 Finish -->
                        
                    </div><!-- form-group Finish -->        
                    
                    <div class='form-group'><!-- form-group Begin -->
                        
                        <label class='col-md-3 control-label'> Color 8 Sizes </label> 
                        
                        <div class='col-md-1' ><!-- col-md-6 Begin -->
                            
                            <input name='c8small' type='number' min='0' class='form-control' required value='$c8s'>
                            
                        </div><!-- col-md-6 Finish -->
                        <div class='col-md-1'><!-- col-md-6 Begin -->
                            
                            <input name='c8medium' type='number' min='0' class='form-control' required value='$c8m'>
                            
                        </div><!-- col-md-6 Finish -->
                        <div class='col-md-1'><!-- col-md-6 Begin -->
                            
                            <input name='c8large' type='number' min='0' class='form-control' required value='$c8l'>
                            
                        </div><!-- col-md-6 Finish -->
                        <div class='col-md-1'><!-- col-md-6 Begin -->
                            
                            <input name='c8x_large' type='number' min='0' class='form-control' required value='$c8xl'>
                            
                        </div><!-- col-md-6 Finish -->
                        <div class='col-md-2'><!-- col-md-6 Begin -->
                            
                            <input name='c8xx_large' type='number' min='0' class='form-control' required value='$c8xxl'>
                            
                        </div><!-- col-md-6 Finish -->
                        
                    </div><!-- form-group Finish -->                     
                        
                        
                        ";
                    }  else {
                        echo "
                        <input name='c8' type='hidden' class='form-control' value='$c8'>
                        <input name='c8small' type='hidden' class='form-control' required value='$c8s'>
                        <input name='c8medium' type='hidden' class='form-control' required value='$c8m'>                            
                         <input name='c8large' type='hidden' class='form-control' required value='$c8l'>   
                         <input name='c8x_large' type='hidden' class='form-control' required value='$c8xl'>                     
                         <input name='c8xx_large' type='hidden' class='form-control' required value='$c8xxl'>
                        ";
                    }
                    
                    
                    ?>          
                    <?php 
                    if($c9 != '#000000' && $c9 != ''){
                        echo "
                        <div class='form-group'><!-- form-group Begin -->
                        
                        <label class='col-md-3 control-label'> Product Color 9 </label> 
                        
                        <div class='col-md-1' style='display: flex;'>
                        <input name='c9' type='color' class='form-control' value='$c9'>
                        </div>
                        <div class='col-md-6' style='display: flex; padding: 10px 0;'><!-- col-md-6 Begin -->
                        
                          <img width='70' height='70' style='padding: 0 10px;' src='product_images/$pro_img41' alt='$pro_img41'>
                          <img width='70' height='70' style='padding: 0 10px;' src='product_images/$pro_img42' alt='$pro_img42'>
                          <img width='70' height='70' style='padding: 0 10px;' src='product_images/$pro_img43' alt='$pro_img43'>
                          <img width='70' height='70' style='padding: 0 10px;' src='product_images/$pro_img44' alt='$pro_img44'>
                          <img width='70' height='70' style='padding: 0 10px;' src='product_images/$pro_img45' alt='$pro_img45'>
                            
                        </div><!-- col-md-6 Finish -->
                        
                    </div><!-- form-group Finish -->     
                    
                    <div class='form-group'><!-- form-group Begin -->
                        
                        <label class='col-md-3 control-label'> Color 9 Sizes </label> 
                        
                        <div class='col-md-1' ><!-- col-md-6 Begin -->
                            
                            <input name='c9small' type='number' min='0' class='form-control' required value='$c9s'>
                            
                        </div><!-- col-md-6 Finish -->
                        <div class='col-md-1'><!-- col-md-6 Begin -->
                            
                            <input name='c9medium' type='number' min='0' class='form-control' required value='$c9m'>
                            
                        </div><!-- col-md-6 Finish -->
                        <div class='col-md-1'><!-- col-md-6 Begin -->
                            
                            <input name='c9large' type='number' min='0' class='form-control' required value='$c9l'>
                            
                        </div><!-- col-md-6 Finish -->
                        <div class='col-md-1'><!-- col-md-6 Begin -->
                            
                            <input name='c9x_large' type='number' min='0' class='form-control' required value='$c9xl'>
                            
                        </div><!-- col-md-6 Finish -->
                        <div class='col-md-2'><!-- col-md-6 Begin -->
                            
                            <input name='c9xx_large' type='number' min='0' class='form-control' required value='$c9xxl'>
                            
                        </div><!-- col-md-6 Finish -->
                        
                    </div><!-- form-group Finish -->                        
                        
                        
                        ";
                    }  else {
                        echo "
                        <input name='c9' type='hidden' class='form-control' value='$c9'>
                        <input name='c9small' type='hidden' class='form-control' required value='$c9s'>
                        <input name='c9medium' type='hidden' class='form-control' required value='$c9m'>                            
                         <input name='c9large' type='hidden' class='form-control' required value='$c9l'>   
                         <input name='c9x_large' type='hidden' class='form-control' required value='$c9xl'>                     
                         <input name='c9xx_large' type='hidden' class='form-control' required value='$c9xxl'>
                        ";
                    }
                    
                    
                    ?>
                    <?php 
                    if($c10 != '#000000' && $c10 != ''){
                        echo "
                        <div class='form-group'><!-- form-group Begin -->
                        
                        <label class='col-md-3 control-label'> Product Color 10 </label> 
                        
                        <div class='col-md-1' style='display: flex;'>
                        <input name='c10' type='color' class='form-control' value='$c10'>
                        </div>
                        <div class='col-md-6' style='display: flex; padding: 10px 0;'><!-- col-md-6 Begin -->
                        
                          <img width='70' height='70' style='padding: 0 10px;' src='product_images/$pro_img46' alt='$pro_img46'>
                          <img width='70' height='70' style='padding: 0 10px;' src='product_images/$pro_img47' alt='$pro_img47'>
                          <img width='70' height='70' style='padding: 0 10px;' src='product_images/$pro_img48' alt='$pro_img48'>
                          <img width='70' height='70' style='padding: 0 10px;' src='product_images/$pro_img49' alt='$pro_img49'>
                          <img width='70' height='70' style='padding: 0 10px;' src='product_images/$pro_img50' alt='$pro_img50'>
                            
                        </div><!-- col-md-6 Finish -->
                        
                    </div><!-- form-group Finish -->          
                    
                    <div class='form-group'><!-- form-group Begin -->
                        
                        <label class='col-md-3 control-label'> Color 10 Sizes </label> 
                        
                        <div class='col-md-1' ><!-- col-md-6 Begin -->
                            
                            <input name='c10small' type='number' min='0' class='form-control' required value='$c10s'>
                            
                        </div><!-- col-md-6 Finish -->
                        <div class='col-md-1'><!-- col-md-6 Begin -->
                            
                            <input name='c10medium' type='number' min='0' class='form-control' required value='$c10m'>
                            
                        </div><!-- col-md-6 Finish -->
                        <div class='col-md-1'><!-- col-md-6 Begin -->
                            
                            <input name='c10large' type='number' min='0' class='form-control' required value='$c10l'>
                            
                        </div><!-- col-md-6 Finish -->
                        <div class='col-md-1'><!-- col-md-6 Begin -->
                            
                            <input name='c10x_large' type='number' min='0' class='form-control' required value='$c10xl'>
                            
                        </div><!-- col-md-6 Finish -->
                        <div class='col-md-2'><!-- col-md-6 Begin -->
                            
                            <input name='c10xx_large' type='number' min='0' class='form-control' required value='$c10xxl'>
                            
                        </div><!-- col-md-6 Finish -->
                        
                    </div><!-- form-group Finish -->                   
                        
                        
                        ";
                    }  else {
                        echo "
                        <input name='c10' type='hidden' class='form-control' value='$c10'>
                        <input name='c10small' type='hidden' class='form-control' required value='$c10s'>
                        <input name='c10medium' type='hidden' class='form-control' required value='$c10m'>                            
                         <input name='c10large' type='hidden' class='form-control' required value='$c10l'>   
                         <input name='c10x_large' type='hidden' class='form-control' required value='$c10xl'>                     
                         <input name='c10xx_large' type='hidden' class='form-control' required value='$c10xxl'>
                        ";
                    }
                    
                    
                    ?>

                    
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


    if(is_uploaded_file($_FILES['file']['tmp_name'])){
        ini_set ('display_errors', 1);  
        ini_set ('display_startup_errors', 1);  
        error_reporting (E_ALL); 

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

            // work for upload / update image    
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
            
            $update_product = "update products set p_cat_id='$cat',cat_id='$product_cat',date='$date_added',product_title='$product_title',product_img1='$newname1',product_img2='$newname2',product_img3='$newname3',product_img4='$newname4',product_img5='$newname5',product_price='$product_price',c1s='$c1s',c1m='$c1m',c1l='$c1l',c1xl='$c1xl',c1xxl='$c1xxl',c2s='$c2s',c2m='$c2m',c2l='$c2l',c2xl='$c2xl',c2xxl='$c2xxl',c3s='$c3s',c3m='$c3m',c3l='$c3l',c3xl='$c3xl',c3xxl='$c3xxl',c4s='$c4s',c4m='$c4m',c4l='$c4l',c4xl='$c4xl',c4xxl='$c4xxl',c5s='$c5s',c5m='$c5m',c5l='$c5l',c5xl='$c5xl',c5xxl='$c5xxl',c6s='$c6s',c6m='$c6m',c6l='$c6l',c6xl='$c6xl',c6xxl='$c6xxl',c7s='$c7s',c7m='$c7m',c7l='$c7l',c7xl='$c7xl',c7xxl='$c7xxl',c8s='$c8s',c8m='$c8m',c8l='$c8l',c8xl='$c8xl',c8xxl='$c8xxl',c9s='$c9s',c9m='$c9m',c9l='$c9l',c9xl='$c9xl',c9xxl='$c9xxl',c10s='$c10s',c10m='$c10m',c10l='$c10l',c10xl='$c10xl',c10xxl='$c10xxl',c1='$c1',c2='$c2',c3='$c3',c4='$c4',c5='$c5',c6='$c6',c7='$c7',c8='$c8',c9='$c9',c10='$c10',product_desc='$product_desc',product_status='$pro_status' where product_id='$p_id'";
            $run_product = mysqli_query($con,$update_product);
        
            if($run_product){                
            echo "<script>alert('Your product has been updated Successfully')</script>";                 
            echo "<script>window.open('index.php?view_products','_self')</script>"; 
            
        }
        
    } else {

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