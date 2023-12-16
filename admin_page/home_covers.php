<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['home_covers'])){
        ini_set ('display_errors', 1);  
        ini_set ('display_startup_errors', 1);  
        error_reporting (E_ALL); 
        
        $edit_id = $_GET['home_covers'];
        
        $home_covers = "select * from covers where id=1";        
        $run_home_covers = mysqli_query($con,$home_covers);        
        $row_home_covers = mysqli_fetch_array($run_home_covers);        
        $id = $row_home_covers['id'];
        $l1 = $row_home_covers['l1'];
        $l2 = $row_home_covers['l2'];
        $l3 = $row_home_covers['l3'];
        $l4 = $row_home_covers['l4'];        
        $c_image = $row_home_covers['c_image'];

                
        $home_covers = "select * from covers where id=34";        
        $run_home_covers = mysqli_query($con,$home_covers);        
        $row_home_covers = mysqli_fetch_array($run_home_covers);        
        $id = $row_home_covers['id'];
        $l01 = $row_home_covers['l1'];
        $l02 = $row_home_covers['l2'];
        $l03 = $row_home_covers['l3'];
        $l04 = $row_home_covers['l4'];        
        $c_image01 = $row_home_covers['c_image'];
                        
        $home_covers = "select * from covers where id=35";        
        $run_home_covers = mysqli_query($con,$home_covers);        
        $row_home_covers = mysqli_fetch_array($run_home_covers);        
        $id = $row_home_covers['id'];
        $cover_image01 = $row_home_covers['l1'];
        $cover_image02 = $row_home_covers['l2'];
        $cover_image03 = $row_home_covers['l3'];       
        
    }

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li>
                
                <i class="fa fa-dashboard"></i> Dashboard / Edit Home Page Cover
                
            </li>
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
                <h3 class="panel-title"><!-- panel-title begin -->
                
                    <i class="fa fa-image fa-fw"></i> Edit Home Page Covers
                
                </h3><!-- panel-title finish -->
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <form action="" class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal begin -->
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                            Line 1
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input name="l1" type="text" class="form-control" value="<?php echo $l1; ?>">
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->
                    <div class="form-group"><!-- form-group begin -->
                    
                    <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                    
                    Line 2
                    
                    </label><!-- control-label col-md-3 finish --> 
                    
                    <div class="col-md-6"><!-- col-md-6 begin -->
                    
                        <input name="l2" type="text" class="form-control" value="<?php echo $l2; ?>">
                    
                    </div><!-- col-md-6 finish -->
                
                </div><!-- form-group finish -->
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                        Line 3
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input name="l3" type="text" class="form-control" value="<?php echo $l3; ?>">
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->
                    <div class="form-group"><!-- form-group begin -->
                    
                    <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                    
                        Line 4
                    
                    </label><!-- control-label col-md-3 finish --> 
                    
                    <div class="col-md-6"><!-- col-md-6 begin -->
                    
                        <input name="l4" type="text" class="form-control" value="<?php echo $l4; ?>">
                    
                    </div><!-- col-md-6 finish -->
                
                    </div><!-- form-group finish -->
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                            Change Cover Image
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input type="file" name="home_cover" class="form-control">
                            
                            <br/>
                            
                            <img src="covers/<?php echo $c_image; ?>" class="img-responsive">
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --></label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input type="submit" name="update" value="Update Now" class="btn btn-primary form-control">
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->
                </form><!-- form-horizontal finish -->
            </div><!-- panel-body finish -->

            <div class="panel-body"><!-- panel-body begin -->
                <form action="" class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal begin -->
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                            Line 1
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input name="l01" type="text" class="form-control" value="<?php echo $l01; ?>">
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->
                    <div class="form-group"><!-- form-group begin -->
                    
                    <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                    
                    Line 2
                    
                    </label><!-- control-label col-md-3 finish --> 
                    
                    <div class="col-md-6"><!-- col-md-6 begin -->
                    
                        <input name="l02" type="text" class="form-control" value="<?php echo $l02; ?>">
                    
                    </div><!-- col-md-6 finish -->
                
                </div><!-- form-group finish -->
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                            Change Cover Image
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input type="file" name="banner_cover" class="form-control">
                            
                            <br/>
                            
                            <img src="covers/<?php echo $c_image01; ?>" class="img-responsive">
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --></label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input type="submit" name="updatebanner" value="Update Banner" class="btn btn-primary form-control">
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->
                </form><!-- form-horizontal finish -->
            </div><!-- panel-body finish -->

                        
            <div class="panel-body"><!-- panel-body begin -->
                <form action="" class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal begin -->
  
                    
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                            Change Cover Images
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-2"><!-- col-md-6 begin -->
                        
                            <input type="file" name="woman_cover" class="form-control">
                            
                            <br/>
                            
                            <img src="covers/<?php echo $cover_image01; ?>" class="img-responsive">
                        
                        </div><!-- col-md-6 finish -->
                        <div class="col-md-2"><!-- col-md-6 begin -->
                        
                        <input type="file" name="size_cover" class="form-control">
                        
                        <br/>
                        
                        <img src="covers/<?php echo $cover_image02; ?>" class="img-responsive">
                    
                    </div><!-- col-md-6 finish -->
                    <div class="col-md-2"><!-- col-md-6 begin -->
                        
                        <input type="file" name="cult_cover" class="form-control">
                        
                        <br/>
                        
                        <img src="covers/<?php echo $cover_image03; ?>" class="img-responsive">
                    
                    </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --></label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input type="submit" name="updatecatimage" value="Update Category Images" class="btn btn-primary form-control">
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->
                </form><!-- form-horizontal finish -->
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->

<?php  

    if(isset($_POST['update'])){

        ini_set ('display_errors', 1);  
        ini_set ('display_startup_errors', 1);  
        error_reporting (E_ALL); 
        $l1 = $_POST['l1'];
        $l2 = $_POST['l2'];
        $l3 = $_POST['l3'];
        $l4 = $_POST['l4'];
        if ($_FILES['home_cover']['size'] == 0)        {
            // home_cover is empty (and not an error)
            
            $update_slide = "update covers set l1='$l1',l2='$l2',l3='$l3',l4='$l4' where id=1";            
            $run_update_slide = mysqli_query($con,$update_slide);            
            if($run_update_slide){                
                echo "<script>alert('Home Page Intro has been Updated Successfully')</script>";             
                echo "<script>window.open('index.php?home_covers','_self')</script>";                
            }
            
        } else if ($_FILES['home_cover']['size'] != 0) {
            // home_cover is empty (and not an error)
            $home_cover1 = $_FILES['home_cover']['name'];
            $extension1 = pathinfo($home_cover1, PATHINFO_EXTENSION); 
            $rename1 = 'HomePageCover'.date('YmdHis01');  
            $newname1 = $rename1.'.'.$extension1;   
            $temp_name1 = $_FILES['home_cover']['tmp_name'];
            move_uploaded_file($temp_name1,"./covers/$newname1");
            
            $update_slide = "update covers set l1='$l1',l2='$l2',l3='$l3',l4='$l4',c_image='$newname1' where id=1";            
            $run_update_slide = mysqli_query($con,$update_slide);
            
            if($run_update_slide){                
                echo "<script>alert('Cover Image has been Updated Successfully')</script>";            
                echo "<script>window.open('index.php?home_covers','_self')</script>";                
            }
        }
        
   
    }

    if(isset($_POST['updatebanner'])){

        ini_set ('display_errors', 1);  
        ini_set ('display_startup_errors', 1);  
        error_reporting (E_ALL); 
        $l01 = $_POST['l01'];
        $l02 = $_POST['l02'];
        if ($_FILES['banner_cover']['size'] == 0)        {
            // home_cover is empty (and not an error)
            
            $update_slide = "update covers set l1='$l01',l2='$l02' where id=34";            
            $run_update_slide = mysqli_query($con,$update_slide);            
            if($run_update_slide){                
                echo "<script>alert('Banner Intro has been Updated Successfully')</script>";             
                echo "<script>window.open('index.php?home_covers','_self')</script>";                
            }
            
        } else if ($_FILES['banner_cover']['size'] != 0) {
            // banner_cover is empty (and not an error)
            $banner_cover101 = $_FILES['banner_cover']['name'];
            $extension101 = pathinfo($banner_cover101, PATHINFO_EXTENSION); 
            $rename101 = 'BannerPageCover'.date('YmdHis0101');  
            $newname101 = $rename101.'.'.$extension101;   
            $temp_name101 = $_FILES['banner_cover']['tmp_name'];
            move_uploaded_file($temp_name101,"./covers/$newname101");
            
            $update_slide = "update covers set l1='$l01',l2='$l02',c_image='$newname101' where id=34";            
            $run_update_slide = mysqli_query($con,$update_slide);
            
            if($run_update_slide){                
                echo "<script>alert('Banner Image has been Updated Successfully')</script>";            
                echo "<script>window.open('index.php?home_covers','_self')</script>";                
            }
        }        
   
    }

    if(isset($_POST['updatecatimage'])){
     if ($_FILES['woman_cover']['size'] != 0) {
            // woman_cover is empty (and not an error)
            $woman_cover1 = $_FILES['woman_cover']['name'];
            $extension01 = pathinfo($woman_cover1, PATHINFO_EXTENSION); 
            $rename01 = 'CategoryCoverImage'.date('YmdHis01');  
            $newname01 = $rename01.'.'.$extension01;   
            $temp_name01 = $_FILES['woman_cover']['tmp_name'];
            move_uploaded_file($temp_name01,"./covers/$newname01");            
            $update_slide = "update covers set l1='$newname01' where id=35";            
            $run_update_slide = mysqli_query($con,$update_slide);
            
            if($run_update_slide){                
                echo "<script>alert('Woman Category Image has been Updated Successfully')</script>";            
                echo "<script>window.open('index.php?home_covers','_self')</script>";                
            }
        } 
        if ($_FILES['size_cover']['size'] != 0) {
            // size_cover is empty (and not an error)
            $size_cover11 = $_FILES['size_cover']['name'];
            $extension11 = pathinfo($size_cover11, PATHINFO_EXTENSION); 
            $rename11 = 'CategoryCoverImage'.date('YmdHis011');  
            $newname11 = $rename11.'.'.$extension11;   
            $temp_name11 = $_FILES['size_cover']['tmp_name'];
            move_uploaded_file($temp_name11,"./covers/$newname11");
            
            $update_slide = "update covers set l2='$newname11' where id=35";            
            $run_update_slide = mysqli_query($con,$update_slide);
            
            if($run_update_slide){                
                echo "<script>alert('Plus Size Category Image has been Updated Successfully')</script>";            
                echo "<script>window.open('index.php?home_covers','_self')</script>";                
            }
        } 
        if ($_FILES['cult_cover']['size'] != 0) {
            // cult_cover is empty (and not an error)
            $cult_cover21 = $_FILES['cult_cover']['name'];
            $extension21 = pathinfo($cult_cover21, PATHINFO_EXTENSION); 
            $rename21 = 'CategoryCoverImage'.date('YmdHis021');  
            $newname21 = $rename21.'.'.$extension21;   
            $temp_name21 = $_FILES['cult_cover']['tmp_name'];
            move_uploaded_file($temp_name21,"./covers/$newname21");
            
            $update_slide = "update covers set l3='$newname21' where id=35";            
            $run_update_slide = mysqli_query($con,$update_slide);
            
            if($run_update_slide){                
                echo "<script>alert('Cultural Category Image has been Updated Successfully')</script>";            
                echo "<script>window.open('index.php?home_covers','_self')</script>";                
            }
        } 
        
   
    }

?>

<?php } ?>