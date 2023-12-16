<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['cat_covers'])){
        ini_set ('display_errors', 1);  
        ini_set ('display_startup_errors', 1);  
        error_reporting (E_ALL); 
        
        $edit_id = $_GET['cat_covers'];
        
        $cat_covers1 = "select * from covers where id=2";        
        $run_cat_covers1 = mysqli_query($con,$cat_covers1);        
        $row_cat_covers1 = mysqli_fetch_array($run_cat_covers1);        
        $id1 = $row_cat_covers1['id'];
        $l11 = $row_cat_covers1['l1'];
        $l21 = $row_cat_covers1['l2'];       
        $c_image1 = $row_cat_covers1['c_image'];

        $cat_covers2 = "select * from covers where id=3";        
        $run_cat_covers2 = mysqli_query($con,$cat_covers2);        
        $row_cat_covers2 = mysqli_fetch_array($run_cat_covers2);        
        $id2 = $row_cat_covers2['id'];
        $l12 = $row_cat_covers2['l1'];
        $l22 = $row_cat_covers2['l2'];       
        $c_image2 = $row_cat_covers2['c_image'];
        
        $cat_covers3 = "select * from covers where id=4";        
        $run_cat_covers3 = mysqli_query($con,$cat_covers3);        
        $row_cat_covers3 = mysqli_fetch_array($run_cat_covers3);        
        $id3 = $row_cat_covers3['id'];
        $l13 = $row_cat_covers3['l1'];
        $l23 = $row_cat_covers3['l2'];       
        $c_image3 = $row_cat_covers3['c_image'];

                
        $cat_covers4 = "select * from covers where id=5";        
        $run_cat_covers4 = mysqli_query($con,$cat_covers4);        
        $row_cat_covers4 = mysqli_fetch_array($run_cat_covers4);        
        $id4 = $row_cat_covers4['id'];
        $l14 = $row_cat_covers4['l1'];
        $l24 = $row_cat_covers4['l2'];       
        $c_image4 = $row_cat_covers4['c_image'];

                        
        $cat_covers5 = "select * from covers where id=6";        
        $run_cat_covers5 = mysqli_query($con,$cat_covers5);        
        $row_cat_covers5 = mysqli_fetch_array($run_cat_covers5);        
        $id5 = $row_cat_covers5['id'];
        $l15 = $row_cat_covers5['l1'];
        $l25 = $row_cat_covers5['l2'];       
        $c_image5 = $row_cat_covers5['c_image'];

                        
        $cat_covers6 = "select * from covers where id=7";        
        $run_cat_covers6 = mysqli_query($con,$cat_covers6);        
        $row_cat_covers6 = mysqli_fetch_array($run_cat_covers6);        
        $id6 = $row_cat_covers6['id'];
        $l16 = $row_cat_covers6['l1'];
        $l26 = $row_cat_covers6['l2'];       
        $c_image6 = $row_cat_covers6['c_image'];

                        
        $cat_covers7 = "select * from covers where id=8";        
        $run_cat_covers7 = mysqli_query($con,$cat_covers7);        
        $row_cat_covers7 = mysqli_fetch_array($run_cat_covers7);        
        $id7 = $row_cat_covers7['id'];
        $l17 = $row_cat_covers7['l1'];
        $l27 = $row_cat_covers7['l2'];       
        $c_image7 = $row_cat_covers7['c_image'];

                        
        $cat_covers8 = "select * from covers where id=9";        
        $run_cat_covers8 = mysqli_query($con,$cat_covers8);        
        $row_cat_covers8 = mysqli_fetch_array($run_cat_covers8);        
        $id8 = $row_cat_covers8['id'];
        $l18 = $row_cat_covers8['l1'];
        $l28 = $row_cat_covers8['l2'];       
        $c_image8 = $row_cat_covers8['c_image'];

                        
        $cat_covers9 = "select * from covers where id=10";        
        $run_cat_covers9 = mysqli_query($con,$cat_covers9);        
        $row_cat_covers9 = mysqli_fetch_array($run_cat_covers9);        
        $id9 = $row_cat_covers9['id'];
        $l19 = $row_cat_covers9['l1'];
        $l29 = $row_cat_covers9['l2'];       
        $c_image9 = $row_cat_covers9['c_image'];

                        
        $cat_covers10 = "select * from covers where id=11";        
        $run_cat_covers10 = mysqli_query($con,$cat_covers10);        
        $row_cat_covers10 = mysqli_fetch_array($run_cat_covers10);        
        $id10 = $row_cat_covers10['id'];
        $l110 = $row_cat_covers10['l1'];
        $l210 = $row_cat_covers10['l2'];       
        $c_image10 = $row_cat_covers10['c_image'];

                        
        $cat_covers11 = "select * from covers where id=12";        
        $run_cat_covers11 = mysqli_query($con,$cat_covers11);        
        $row_cat_covers11 = mysqli_fetch_array($run_cat_covers11);        
        $id11 = $row_cat_covers11['id'];
        $l111 = $row_cat_covers11['l1'];
        $l211 = $row_cat_covers11['l2'];       
        $c_image11 = $row_cat_covers11['c_image'];

                        
        $cat_covers12 = "select * from covers where id=13";        
        $run_cat_covers12 = mysqli_query($con,$cat_covers12);        
        $row_cat_covers12 = mysqli_fetch_array($run_cat_covers12);        
        $id12 = $row_cat_covers12['id'];
        $l112 = $row_cat_covers12['l1'];
        $l212 = $row_cat_covers12['l2'];       
        $c_image12 = $row_cat_covers12['c_image'];

                        
        $cat_covers13 = "select * from covers where id=14";        
        $run_cat_covers13 = mysqli_query($con,$cat_covers13);        
        $row_cat_covers13 = mysqli_fetch_array($run_cat_covers13);        
        $id13 = $row_cat_covers13['id'];
        $l113 = $row_cat_covers13['l1'];
        $l213 = $row_cat_covers13['l2'];       
        $c_image13 = $row_cat_covers13['c_image'];
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





<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
                <h3 class="panel-title"><!-- panel-title begin -->
                
                    <i class="fa fa-image fa-fw"></i> Edit Woman Cover
                
                </h3><!-- panel-title finish -->
            </div><!-- panel-heading finish -->
            


<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

            <div class="panel-body"><!-- panel-body begin -->
                                    <form action="" class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal begin -->
                                        <div class="form-group"><!-- form-group begin -->
                                        
                                            <label for="" class="control-label col-md-3" style="color: green;"> Top Intro</label> 
                                            
                                            <div class="col-md-3"><!-- col-md-6 begin -->
                                            
                                                <input name="l11" type="text" class="form-control" value="<?php echo $l11; ?>">
                                            
                                            </div><!-- col-md-6 finish -->
                                            <div class="col-md-3"><!-- col-md-6 begin -->
                                            
                                            <input name="l21" type="text" class="form-control" value="<?php echo $l21; ?>">
                                        
                                            </div><!-- col-md-6 finish -->
                                    
                                        
                                        </div><!-- form-group finish -->
                    

                                        <div class="form-group"><!-- form-group begin -->
                                        
                                            <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                                            
                                                Change Cover Image
                                            
                                            </label><!-- control-label col-md-3 finish --> 
                                            
                                            <div class="col-md-6"><!-- col-md-6 begin -->
                                            
                                                <input type="file" name="woman_top"  class="form-control">
                                                
                                                <br/>
                                                
                                                <img src="covers/<?php echo $c_image1; ?>" width="200px" class="img-responsive">
                                            
                                            </div><!-- col-md-6 finish -->
                                        
                                        </div><!-- form-group finish -->
                                        <div class="form-group"><!-- form-group begin -->
                                        
                                            <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --></label><!-- control-label col-md-3 finish --> 
                                            
                                            <div class="col-md-6"><!-- col-md-6 begin -->
                                            
                                                <input type="submit" name="updatetop" value="Update" class="btn btn-primary form-control">
                                            
                                            </div><!-- col-md-6 finish -->
                                        
                                        </div><!-- form-group finish -->
                                    </form><!-- form-horizontal finish -->
            </div><!-- panel-body finish -->
<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

                <div class="panel-body"><!-- panel-body begin -->
                            <form action="" class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal begin -->
                                <div class="form-group"><!-- form-group begin -->
                                
                                    <label for="" class="control-label col-md-3" style="color: green;"> Dress Intro</label> 
                                    
                                    <div class="col-md-3"><!-- col-md-6 begin -->
                                    
                                        <input name="l12" type="text" class="form-control" value="<?php echo $l12; ?>">
                                    
                                    </div><!-- col-md-6 finish -->
                                    <div class="col-md-3"><!-- col-md-6 begin -->
                                    
                                    <input name="l22" type="text" class="form-control" value="<?php echo $l22; ?>">
                                
                                    </div><!-- col-md-6 finish -->
                            
                                
                                </div><!-- form-group finish -->
            

                                <div class="form-group"><!-- form-group begin -->
                                
                                    <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                                    
                                        Change Cover Image
                                    
                                    </label><!-- control-label col-md-3 finish --> 
                                    
                                    <div class="col-md-6"><!-- col-md-6 begin -->
                                    
                                        <input type="file" name="woman_dress"  class="form-control">
                                        
                                        <br/>
                                        
                                        <img src="covers/<?php echo $c_image2; ?>" width="200px" class="img-responsive">
                                    
                                    </div><!-- col-md-6 finish -->
                                
                                </div><!-- form-group finish -->
                                <div class="form-group"><!-- form-group begin -->
                                
                                    <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --></label><!-- control-label col-md-3 finish --> 
                                    
                                    <div class="col-md-6"><!-- col-md-6 begin -->
                                    
                                        <input type="submit" name="updatedress" value="Update" class="btn btn-primary form-control">
                                    
                                    </div><!-- col-md-6 finish -->
                                
                                </div><!-- form-group finish -->
                            </form><!-- form-horizontal finish -->
                            </div><!-- panel-body finish -->


<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<div class="panel-body"><!-- panel-body begin -->
                            <form action="" class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal begin -->
                                <div class="form-group"><!-- form-group begin -->
                                
                                    <label for="" class="control-label col-md-3" style="color: green;"> Bottoms Intro</label> 
                                    
                                    <div class="col-md-3"><!-- col-md-6 begin -->
                                    
                                        <input name="l13" type="text" class="form-control" value="<?php echo $l13; ?>">
                                    
                                    </div><!-- col-md-6 finish -->
                                    <div class="col-md-3"><!-- col-md-6 begin -->
                                    
                                    <input name="l23" type="text" class="form-control" value="<?php echo $l23; ?>">
                                
                                    </div><!-- col-md-6 finish -->
                            
                                
                                </div><!-- form-group finish -->
            

                                <div class="form-group"><!-- form-group begin -->
                                
                                    <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                                    
                                        Change Cover Image
                                    
                                    </label><!-- control-label col-md-3 finish --> 
                                    
                                    <div class="col-md-6"><!-- col-md-6 begin -->
                                    
                                        <input type="file" name="woman_bottom"  class="form-control">
                                        
                                        <br/>
                                        
                                        <img src="covers/<?php echo $c_image3; ?>" width="200px" class="img-responsive">
                                    
                                    </div><!-- col-md-6 finish -->
                                
                                </div><!-- form-group finish -->
                                <div class="form-group"><!-- form-group begin -->
                                
                                    <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --></label><!-- control-label col-md-3 finish --> 
                                    
                                    <div class="col-md-6"><!-- col-md-6 begin -->
                                    
                                        <input type="submit" name="updatebottom" value="Update" class="btn btn-primary form-control">
                                    
                                    </div><!-- col-md-6 finish -->
                                
                                </div><!-- form-group finish -->
                            </form><!-- form-horizontal finish -->
                            </div><!-- panel-body finish -->


<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

            <div class="panel-body"><!-- panel-body begin -->
                                        <form action="" class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal begin -->
                                            <div class="form-group"><!-- form-group begin -->
                                            
                                                <label for="" class="control-label col-md-3" style="color: green;"> Blouses Intro</label> 
                                                
                                                <div class="col-md-3"><!-- col-md-6 begin -->
                                                
                                                    <input name="l14" type="text" class="form-control" value="<?php echo $l14; ?>">
                                                
                                                </div><!-- col-md-6 finish -->
                                                <div class="col-md-3"><!-- col-md-6 begin -->
                                                
                                                <input name="l24" type="text" class="form-control" value="<?php echo $l24; ?>">
                                            
                                                </div><!-- col-md-6 finish -->
                                        
                                            
                                            </div><!-- form-group finish -->
                        

                                            <div class="form-group"><!-- form-group begin -->
                                            
                                                <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                                                
                                                    Change Cover Image
                                                
                                                </label><!-- control-label col-md-3 finish --> 
                                                
                                                <div class="col-md-6"><!-- col-md-6 begin -->
                                                
                                                    <input type="file" name="woman_blouse"  class="form-control">
                                                    
                                                    <br/>
                                                    
                                                    <img src="covers/<?php echo $c_image4; ?>" width="200px" class="img-responsive">
                                                
                                                </div><!-- col-md-6 finish -->
                                            
                                            </div><!-- form-group finish -->
                                            <div class="form-group"><!-- form-group begin -->
                                            
                                                <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --></label><!-- control-label col-md-3 finish --> 
                                                
                                                <div class="col-md-6"><!-- col-md-6 begin -->
                                                
                                                    <input type="submit" name="womanblouse" value="Update" class="btn btn-primary form-control">
                                                
                                                </div><!-- col-md-6 finish -->
                                            
                                            </div><!-- form-group finish -->
                                        </form><!-- form-horizontal finish -->
                                        </div><!-- panel-body finish -->

            <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
            <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

            <div class="panel-body"><!-- panel-body begin -->
                                        <form action="" class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal begin -->
                                            <div class="form-group"><!-- form-group begin -->
                                            
                                                <label for="" class="control-label col-md-3" style="color: green;"> Denims Intro</label> 
                                                
                                                <div class="col-md-3"><!-- col-md-6 begin -->
                                                
                                                    <input name="l15" type="text" class="form-control" value="<?php echo $l15; ?>">
                                                
                                                </div><!-- col-md-6 finish -->
                                                <div class="col-md-3"><!-- col-md-6 begin -->
                                                
                                                <input name="l25" type="text" class="form-control" value="<?php echo $l25; ?>">
                                            
                                                </div><!-- col-md-6 finish -->
                                        
                                            
                                            </div><!-- form-group finish -->
                        

                                            <div class="form-group"><!-- form-group begin -->
                                            
                                                <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                                                
                                                    Change Cover Image
                                                
                                                </label><!-- control-label col-md-3 finish --> 
                                                
                                                <div class="col-md-6"><!-- col-md-6 begin -->
                                                
                                                    <input type="file" name="woman_denim"  class="form-control">
                                                    
                                                    <br/>
                                                    
                                                    <img src="covers/<?php echo $c_image5; ?>" width="200px" class="img-responsive">
                                                
                                                </div><!-- col-md-6 finish -->
                                            
                                            </div><!-- form-group finish -->
                                            <div class="form-group"><!-- form-group begin -->
                                            
                                                <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --></label><!-- control-label col-md-3 finish --> 
                                                
                                                <div class="col-md-6"><!-- col-md-6 begin -->
                                                
                                                    <input type="submit" name="updatedenim" value="Update" class="btn btn-primary form-control">
                                                
                                                </div><!-- col-md-6 finish -->
                                            
                                            </div><!-- form-group finish -->
                                        </form><!-- form-horizontal finish -->
                                        </div><!-- panel-body finish -->


            <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
            <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                        

            <div class="panel-body"><!-- panel-body begin -->
                                        <form action="" class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal begin -->
                                            <div class="form-group"><!-- form-group begin -->
                                            
                                                <label for="" class="control-label col-md-3" style="color: green;"> Jumpsuits Intro</label> 
                                                
                                                <div class="col-md-3"><!-- col-md-6 begin -->
                                                
                                                    <input name="l16" type="text" class="form-control" value="<?php echo $l16; ?>">
                                                
                                                </div><!-- col-md-6 finish -->
                                                <div class="col-md-3"><!-- col-md-6 begin -->
                                                
                                                <input name="l26" type="text" class="form-control" value="<?php echo $l26; ?>">
                                            
                                                </div><!-- col-md-6 finish -->
                                        
                                            
                                            </div><!-- form-group finish -->
                        

                                            <div class="form-group"><!-- form-group begin -->
                                            
                                                <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                                                
                                                    Change Cover Image
                                                
                                                </label><!-- control-label col-md-3 finish --> 
                                                
                                                <div class="col-md-6"><!-- col-md-6 begin -->
                                                
                                                    <input type="file" name="woman_jumpsuits"  class="form-control">
                                                    
                                                    <br/>
                                                    
                                                    <img src="covers/<?php echo $c_image6; ?>" width="200px" class="img-responsive">
                                                
                                                </div><!-- col-md-6 finish -->
                                            
                                            </div><!-- form-group finish -->
                                            <div class="form-group"><!-- form-group begin -->
                                            
                                                <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --></label><!-- control-label col-md-3 finish --> 
                                                
                                                <div class="col-md-6"><!-- col-md-6 begin -->
                                                
                                                    <input type="submit" name="updatejumpsuits" value="Update" class="btn btn-primary form-control">
                                                
                                                </div><!-- col-md-6 finish -->
                                            
                                            </div><!-- form-group finish -->
                                        </form><!-- form-horizontal finish -->
                                        </div><!-- panel-body finish -->


            <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
            <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                        

            <div class="panel-body"><!-- panel-body begin -->
                                        <form action="" class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal begin -->
                                            <div class="form-group"><!-- form-group begin -->
                                            
                                                <label for="" class="control-label col-md-3" style="color: green;"> T-shirts Intro</label> 
                                                
                                                <div class="col-md-3"><!-- col-md-6 begin -->
                                                
                                                    <input name="l17" type="text" class="form-control" value="<?php echo $l17; ?>">
                                                
                                                </div><!-- col-md-6 finish -->
                                                <div class="col-md-3"><!-- col-md-6 begin -->
                                                
                                                <input name="l27" type="text" class="form-control" value="<?php echo $l27; ?>">
                                            
                                                </div><!-- col-md-6 finish -->
                                        
                                            
                                            </div><!-- form-group finish -->
                        

                                            <div class="form-group"><!-- form-group begin -->
                                            
                                                <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                                                
                                                    Change Cover Image
                                                
                                                </label><!-- control-label col-md-3 finish --> 
                                                
                                                <div class="col-md-6"><!-- col-md-6 begin -->
                                                
                                                    <input type="file" name="woman_tshirts"  class="form-control">
                                                    
                                                    <br/>
                                                    
                                                    <img src="covers/<?php echo $c_image7; ?>" width="200px" class="img-responsive">
                                                
                                                </div><!-- col-md-6 finish -->
                                            
                                            </div><!-- form-group finish -->
                                            <div class="form-group"><!-- form-group begin -->
                                            
                                                <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --></label><!-- control-label col-md-3 finish --> 
                                                
                                                <div class="col-md-6"><!-- col-md-6 begin -->
                                                
                                                    <input type="submit" name="updateshirts" value="Update" class="btn btn-primary form-control">
                                                
                                                </div><!-- col-md-6 finish -->
                                            
                                            </div><!-- form-group finish -->
                                        </form><!-- form-horizontal finish -->
                                        </div><!-- panel-body finish -->


            <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
            <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

            <div class="panel-body"><!-- panel-body begin -->
                                        <form action="" class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal begin -->
                                            <div class="form-group"><!-- form-group begin -->
                                            
                                                <label for="" class="control-label col-md-3" style="color: green;"> Tanktops Intro</label> 
                                                
                                                <div class="col-md-3"><!-- col-md-6 begin -->
                                                
                                                    <input name="l18" type="text" class="form-control" value="<?php echo $l18; ?>">
                                                
                                                </div><!-- col-md-6 finish -->
                                                <div class="col-md-3"><!-- col-md-6 begin -->
                                                
                                                <input name="l28" type="text" class="form-control" value="<?php echo $l28; ?>">
                                            
                                                </div><!-- col-md-6 finish -->
                                        
                                            
                                            </div><!-- form-group finish -->
                        

                                            <div class="form-group"><!-- form-group begin -->
                                            
                                                <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                                                
                                                    Change Cover Image
                                                
                                                </label><!-- control-label col-md-3 finish --> 
                                                
                                                <div class="col-md-6"><!-- col-md-6 begin -->
                                                
                                                    <input type="file" name="woman_tanktops"  class="form-control">
                                                    
                                                    <br/>
                                                    
                                                    <img src="covers/<?php echo $c_image8; ?>" width="200px" class="img-responsive">
                                                
                                                </div><!-- col-md-6 finish -->
                                            
                                            </div><!-- form-group finish -->
                                            <div class="form-group"><!-- form-group begin -->
                                            
                                                <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --></label><!-- control-label col-md-3 finish --> 
                                                
                                                <div class="col-md-6"><!-- col-md-6 begin -->
                                                
                                                    <input type="submit" name="updatetanktops" value="Update" class="btn btn-primary form-control">
                                                
                                                </div><!-- col-md-6 finish -->
                                            
                                            </div><!-- form-group finish -->
                                        </form><!-- form-horizontal finish -->
                                        </div><!-- panel-body finish -->


            <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
            <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->               

            <div class="panel-body"><!-- panel-body begin -->
                                        <form action="" class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal begin -->
                                            <div class="form-group"><!-- form-group begin -->
                                            
                                                <label for="" class="control-label col-md-3" style="color: green;"> Kintwears Intro</label> 
                                                
                                                <div class="col-md-3"><!-- col-md-6 begin -->
                                                
                                                    <input name="l19" type="text" class="form-control" value="<?php echo $l19; ?>">
                                                
                                                </div><!-- col-md-6 finish -->
                                                <div class="col-md-3"><!-- col-md-6 begin -->
                                                
                                                <input name="l29" type="text" class="form-control" value="<?php echo $l29; ?>">
                                            
                                                </div><!-- col-md-6 finish -->
                                        
                                            
                                            </div><!-- form-group finish -->
                        

                                            <div class="form-group"><!-- form-group begin -->
                                            
                                                <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                                                
                                                    Change Cover Image
                                                
                                                </label><!-- control-label col-md-3 finish --> 
                                                
                                                <div class="col-md-6"><!-- col-md-6 begin -->
                                                
                                                    <input type="file" name="woman_kintwears"  class="form-control">
                                                    
                                                    <br/>
                                                    
                                                    <img src="covers/<?php echo $c_image9; ?>" width="200px" class="img-responsive">
                                                
                                                </div><!-- col-md-6 finish -->
                                            
                                            </div><!-- form-group finish -->
                                            <div class="form-group"><!-- form-group begin -->
                                            
                                                <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --></label><!-- control-label col-md-3 finish --> 
                                                
                                                <div class="col-md-6"><!-- col-md-6 begin -->
                                                
                                                    <input type="submit" name="updatedkintwear" value="Update" class="btn btn-primary form-control">
                                                
                                                </div><!-- col-md-6 finish -->
                                            
                                            </div><!-- form-group finish -->
                                        </form><!-- form-horizontal finish -->
                                        </div><!-- panel-body finish -->


            <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
            <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                  

            <div class="panel-body"><!-- panel-body begin -->
                                        <form action="" class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal begin -->
                                            <div class="form-group"><!-- form-group begin -->
                                            
                                                <label for="" class="control-label col-md-3" style="color: green;"> SWEATSHIRTS Intro</label> 
                                                
                                                <div class="col-md-3"><!-- col-md-6 begin -->
                                                
                                                    <input name="l110" type="text" class="form-control" value="<?php echo $l110; ?>">
                                                
                                                </div><!-- col-md-6 finish -->
                                                <div class="col-md-3"><!-- col-md-6 begin -->
                                                
                                                <input name="l210" type="text" class="form-control" value="<?php echo $l210; ?>">
                                            
                                                </div><!-- col-md-6 finish -->
                                        
                                            
                                            </div><!-- form-group finish -->
                        

                                            <div class="form-group"><!-- form-group begin -->
                                            
                                                <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                                                
                                                    Change Cover Image
                                                
                                                </label><!-- control-label col-md-3 finish --> 
                                                
                                                <div class="col-md-6"><!-- col-md-6 begin -->
                                                
                                                    <input type="file" name="woman_sweatshirt"  class="form-control">
                                                    
                                                    <br/>
                                                    
                                                    <img src="covers/<?php echo $c_image10; ?>" width="200px" class="img-responsive">
                                                
                                                </div><!-- col-md-6 finish -->
                                            
                                            </div><!-- form-group finish -->
                                            <div class="form-group"><!-- form-group begin -->
                                            
                                                <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --></label><!-- control-label col-md-3 finish --> 
                                                
                                                <div class="col-md-6"><!-- col-md-6 begin -->
                                                
                                                    <input type="submit" name="updatedsweetshirt" value="Update" class="btn btn-primary form-control">
                                                
                                                </div><!-- col-md-6 finish -->
                                            
                                            </div><!-- form-group finish -->
                                        </form><!-- form-horizontal finish -->
                                        </div><!-- panel-body finish -->


            <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
            <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                        
            <div class="panel-body"><!-- panel-body begin -->
                                        <form action="" class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal begin -->
                                            <div class="form-group"><!-- form-group begin -->
                                            
                                                <label for="" class="control-label col-md-3" style="color: green;"> MATERNITY Intro</label> 
                                                
                                                <div class="col-md-3"><!-- col-md-6 begin -->
                                                
                                                    <input name="l111" type="text" class="form-control" value="<?php echo $l111; ?>">
                                                
                                                </div><!-- col-md-6 finish -->
                                                <div class="col-md-3"><!-- col-md-6 begin -->
                                                
                                                <input name="l211" type="text" class="form-control" value="<?php echo $l211; ?>">
                                            
                                                </div><!-- col-md-6 finish -->
                                        
                                            
                                            </div><!-- form-group finish -->
                        

                                            <div class="form-group"><!-- form-group begin -->
                                            
                                                <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                                                
                                                    Change Cover Image
                                                
                                                </label><!-- control-label col-md-3 finish --> 
                                                
                                                <div class="col-md-6"><!-- col-md-6 begin -->
                                                
                                                    <input type="file" name="woman_mother"  class="form-control">
                                                    
                                                    <br/>
                                                    
                                                    <img src="covers/<?php echo $c_image11; ?>" width="200px" class="img-responsive">
                                                
                                                </div><!-- col-md-6 finish -->
                                            
                                            </div><!-- form-group finish -->
                                            <div class="form-group"><!-- form-group begin -->
                                            
                                                <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --></label><!-- control-label col-md-3 finish --> 
                                                
                                                <div class="col-md-6"><!-- col-md-6 begin -->
                                                
                                                    <input type="submit" name="updatemother" value="Update" class="btn btn-primary form-control">
                                                
                                                </div><!-- col-md-6 finish -->
                                            
                                            </div><!-- form-group finish -->
                                        </form><!-- form-horizontal finish -->
                                        </div><!-- panel-body finish -->


            <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
            <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
                        

            <div class="panel-body"><!-- panel-body begin -->
                                        <form action="" class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal begin -->
                                            <div class="form-group"><!-- form-group begin -->
                                            
                                                <label for="" class="control-label col-md-3" style="color: green;"> OUTWEAR Intro</label> 
                                                
                                                <div class="col-md-3"><!-- col-md-6 begin -->
                                                
                                                    <input name="l112" type="text" class="form-control" value="<?php echo $l112; ?>">
                                                
                                                </div><!-- col-md-6 finish -->
                                                <div class="col-md-3"><!-- col-md-6 begin -->
                                                
                                                <input name="l212" type="text" class="form-control" value="<?php echo $l212; ?>">
                                            
                                                </div><!-- col-md-6 finish -->
                                        
                                            
                                            </div><!-- form-group finish -->
                        

                                            <div class="form-group"><!-- form-group begin -->
                                            
                                                <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                                                
                                                    Change Cover Image
                                                
                                                </label><!-- control-label col-md-3 finish --> 
                                                
                                                <div class="col-md-6"><!-- col-md-6 begin -->
                                                
                                                    <input type="file" name="woman_outwear"  class="form-control">
                                                    
                                                    <br/>
                                                    
                                                    <img src="covers/<?php echo $c_image12; ?>" width="200px" class="img-responsive">
                                                
                                                </div><!-- col-md-6 finish -->
                                            
                                            </div><!-- form-group finish -->
                                            <div class="form-group"><!-- form-group begin -->
                                            
                                                <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --></label><!-- control-label col-md-3 finish --> 
                                                
                                                <div class="col-md-6"><!-- col-md-6 begin -->
                                                
                                                    <input type="submit" name="updatedoutwear" value="Update" class="btn btn-primary form-control">
                                                
                                                </div><!-- col-md-6 finish -->
                                            
                                            </div><!-- form-group finish -->
                                        </form><!-- form-horizontal finish -->
                                        </div><!-- panel-body finish -->


            <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
            <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

            <div class="panel-body"><!-- panel-body begin -->
                                        <form action="" class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal begin -->
                                            <div class="form-group"><!-- form-group begin -->
                                            
                                                <label for="" class="control-label col-md-3" style="color: red;"> New Arrivals </label> 
                                                
                                                <div class="col-md-3"><!-- col-md-6 begin -->
                                                
                                                    <input name="l113" type="text" class="form-control" value="<?php echo $l113; ?>">
                                                
                                                </div><!-- col-md-6 finish -->
                                                <div class="col-md-3"><!-- col-md-6 begin -->
                                                
                                                <input name="l213" type="text" class="form-control" value="<?php echo $l213; ?>">
                                            
                                                </div><!-- col-md-6 finish -->
                                        
                                            
                                            </div><!-- form-group finish -->
                        

                                            <div class="form-group"><!-- form-group begin -->
                                            
                                                <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                                                
                                                    Change Cover Image
                                                
                                                </label><!-- control-label col-md-3 finish --> 
                                                
                                                <div class="col-md-6"><!-- col-md-6 begin -->
                                                
                                                    <input type="file" name="woman_new"  class="form-control">
                                                    
                                                    <br/>
                                                    
                                                    <img src="covers/<?php echo $c_image13; ?>" width="200px" class="img-responsive">
                                                
                                                </div><!-- col-md-6 finish -->
                                            
                                            </div><!-- form-group finish -->
                                            <div class="form-group"><!-- form-group begin -->
                                            
                                                <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --></label><!-- control-label col-md-3 finish --> 
                                                
                                                <div class="col-md-6"><!-- col-md-6 begin -->
                                                
                                                    <input type="submit" name="updatednew" value="Update" class="btn btn-primary form-control">
                                                
                                                </div><!-- col-md-6 finish -->
                                            
                                            </div><!-- form-group finish -->
                                        </form><!-- form-horizontal finish -->
                                        </div><!-- panel-body finish -->


            <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
            <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->




<?php  

    if(isset($_POST['updatetop'])){

        ini_set ('display_errors', 1);  
        ini_set ('display_startup_errors', 1);  
        error_reporting (E_ALL); 
        $l1t = $_POST['l11'];
        $l2t = $_POST['l21'];
        if ($_FILES['woman_top']['size'] == 0)        {
            // woman_top is empty (and not an error)
            
            $update_slide = "update covers set l1='$l1t',l2='$l2t' where id=2";            
            $run_update_slide = mysqli_query($con,$update_slide);            
            if($run_update_slide){                
                echo "<script>alert('Woman Top Intro has been Updated Successfully')</script>";             
                echo "<script>window.open('index.php?cat_covers','_self')</script>";                
            }
            
        } else if ($_FILES['woman_top']['size'] != 0) {
            // woman_top is empty (and not an error)
            $woman_top1 = $_FILES['woman_top']['name'];
            $extension1 = pathinfo($woman_top1, PATHINFO_EXTENSION); 
            $rename1 = 'WomanTopCover'.date('YmdHis01');  
            $newname1 = $rename1.'.'.$extension1;   
            $temp_name1 = $_FILES['woman_top']['tmp_name'];
            move_uploaded_file($temp_name1,"./covers/$newname1");
            
            $update_slide = "update covers set l1='$l1t',l2='$l2t',c_image='$newname1' where id=2";            
            $run_update_slide = mysqli_query($con,$update_slide);
            
            if($run_update_slide){                
                echo "<script>alert('Woman TOP Cover Image has been Updated Successfully')</script>";            
                echo "<script>window.open('index.php?cat_covers','_self')</script>";                
            }
        }
        
   
    } 

    if(isset($_POST['updatedress'])){

        ini_set ('display_errors', 1);  
        ini_set ('display_startup_errors', 1);  
        error_reporting (E_ALL); 
        $l1d = $_POST['l12'];
        $l2d = $_POST['l22'];
        if ($_FILES['woman_dress']['size'] == 0) {
            // woman_dress is empty (and not an error)
            
            $update_slide = "update covers set l1='$l1d',l2='$l2d' where id=3";            
            $run_update_slide = mysqli_query($con,$update_slide);            
            if($run_update_slide){                
                echo "<script>alert('Woman Dress Intro has been Updated Successfully')</script>";             
                echo "<script>window.open('index.php?cat_covers','_self')</script>";                
            }
            
        } else if ($_FILES['woman_dress']['size'] != 0) {
            // woman_dress is empty (and not an error)
            $woman_dress1 = $_FILES['woman_dress']['name'];
            $extension2 = pathinfo($woman_dress1, PATHINFO_EXTENSION); 
            $rename2 = 'WomanDressCover'.date('YmdHis01');  
            $newname2 = $rename2.'.'.$extension2;   
            $temp_name2 = $_FILES['woman_dress']['tmp_name'];
            move_uploaded_file($temp_name2,"./covers/$newname2");
            
            $update_slide = "update covers set l1='$l1d',l2='$l2d',c_image='$newname2' where id=3";            
            $run_update_slide = mysqli_query($con,$update_slide);
            
            if($run_update_slide){                
                echo "<script>alert('Woman DRESS Cover Image has been Updated Successfully')</script>";            
                echo "<script>window.open('index.php?cat_covers','_self')</script>";                
            }
        }
        
   
    } 


    if(isset($_POST['updatebottom'])){

        ini_set ('display_errors', 1);  
        ini_set ('display_startup_errors', 1);  
        error_reporting (E_ALL); 
        $l1b = $_POST['l13'];
        $l2b = $_POST['l23'];
        if ($_FILES['woman_bottom']['size'] == 0) {
            // woman_bottom is empty (and not an error)
            
            $update_slide = "update covers set l1='$l1b',l2='$l2b' where id=4";            
            $run_update_slide = mysqli_query($con,$update_slide);            
            if($run_update_slide){                
                echo "<script>alert('Woman Dress Intro has been Updated Successfully')</script>";             
                echo "<script>window.open('index.php?cat_covers','_self')</script>";                
            }
            
        } else if ($_FILES['woman_bottom']['size'] != 0) {
            // woman_bottom is empty (and not an error)
            $woman_bottom1 = $_FILES['woman_bottom']['name'];
            $extension3 = pathinfo($woman_bottom1, PATHINFO_EXTENSION); 
            $rename3 = 'WomanBottomCover'.date('YmdHis01');  
            $newname3 = $rename3.'.'.$extension3;   
            $temp_name3 = $_FILES['woman_bottom']['tmp_name'];
            move_uploaded_file($temp_name3,"./covers/$newname3");
            
            $update_slide = "update covers set l1='$l1b',l2='$l2b',c_image='$newname3' where id=4";            
            $run_update_slide = mysqli_query($con,$update_slide);
            
            if($run_update_slide){                
                echo "<script>alert('Woman DRESS Cover Image has been Updated Successfully')</script>";            
                echo "<script>window.open('index.php?cat_covers','_self')</script>";                
            }
        }
        
   
    } 


    if(isset($_POST['womanblouse'])){

        ini_set ('display_errors', 1);  
        ini_set ('display_startup_errors', 1);  
        error_reporting (E_ALL); 
        $l1bl = $_POST['l14'];
        $l2bl = $_POST['l24'];
        if ($_FILES['woman_blouse']['size'] == 0) {
            // woman_blouse is empty (and not an error)
            
            $update_slide = "update covers set l1='$l1bl',l2='$l2bl' where id=5";            
            $run_update_slide = mysqli_query($con,$update_slide);            
            if($run_update_slide){                
                echo "<script>alert('Woman Blouse Intro has been Updated Successfully')</script>";             
                echo "<script>window.open('index.php?cat_covers','_self')</script>";                
            }
            
        } else if ($_FILES['woman_blouse']['size'] != 0) {
            // woman_blouse is empty (and not an error)
            $woman_blouse1 = $_FILES['woman_blouse']['name'];
            $extension4 = pathinfo($woman_blouse1, PATHINFO_EXTENSION); 
            $rename4 = 'WomanBlouseCover'.date('YmdHis01');  
            $newname4 = $rename4.'.'.$extension4;   
            $temp_name4 = $_FILES['woman_blouse']['tmp_name'];
            move_uploaded_file($temp_name4,"./covers/$newname4");
            
            $update_slide = "update covers set l1='$l1bl',l2='$l2bl',c_image='$newname4' where id=5";            
            $run_update_slide = mysqli_query($con,$update_slide);
            
            if($run_update_slide){                
                echo "<script>alert('Woman Blouse Cover Image has been Updated Successfully')</script>";            
                echo "<script>window.open('index.php?cat_covers','_self')</script>";                
            }
        }
        
   
    } 

    if(isset($_POST['updatedenim'])){

        ini_set ('display_errors', 1);  
        ini_set ('display_startup_errors', 1);  
        error_reporting (E_ALL); 
        $l1dn = $_POST['l15'];
        $l2dn = $_POST['l25'];
        if ($_FILES['woman_denim']['size'] == 0) {
            // woman_denim is empty (and not an error)
            
            $update_slide = "update covers set l1='$l1dn',l2='$l2dn' where id=6";            
            $run_update_slide = mysqli_query($con,$update_slide);            
            if($run_update_slide){                
                echo "<script>alert('Woman Denim Intro has been Updated Successfully')</script>";             
                echo "<script>window.open('index.php?cat_covers','_self')</script>";                
            }
            
        } else if ($_FILES['woman_denim']['size'] != 0) {
            // woman_denim is empty (and not an error)
            $woman_denim1 = $_FILES['woman_denim']['name'];
            $extension5 = pathinfo($woman_denim1, PATHINFO_EXTENSION); 
            $rename5 = 'WomanDenimCover'.date('YmdHis01');  
            $newname5 = $rename5.'.'.$extension5;   
            $temp_name5 = $_FILES['woman_denim']['tmp_name'];
            move_uploaded_file($temp_name5,"./covers/$newname5");
            
            $update_slide = "update covers set l1='$l1dn',l2='$l2dn',c_image='$newname5' where id=6";            
            $run_update_slide = mysqli_query($con,$update_slide);
            
            if($run_update_slide){                
                echo "<script>alert('Woman Denim Cover Image has been Updated Successfully')</script>";            
                echo "<script>window.open('index.php?cat_covers','_self')</script>";                
            }
        }
        
   
    } 

    if(isset($_POST['updatejumpsuits'])){

        ini_set ('display_errors', 1);  
        ini_set ('display_startup_errors', 1);  
        error_reporting (E_ALL); 
        $l1js = $_POST['l16'];
        $l2js = $_POST['l26'];
        if ($_FILES['woman_jumpsuits']['size'] == 0) {
            // woman_jumpsuits is empty (and not an error)
            
            $update_slide = "update covers set l1='$l1js',l2='$l2js' where id=7";            
            $run_update_slide = mysqli_query($con,$update_slide);            
            if($run_update_slide){                
                echo "<script>alert('Woman Jumpsuits Intro has been Updated Successfully')</script>";             
                echo "<script>window.open('index.php?cat_covers','_self')</script>";                
            }
            
        } else if ($_FILES['woman_jumpsuits']['size'] != 0) {
            // woman_jumpsuits is empty (and not an error)
            $woman_jumpsuits1 = $_FILES['woman_jumpsuits']['name'];
            $extension6 = pathinfo($woman_jumpsuits1, PATHINFO_EXTENSION); 
            $rename6 = 'WomanJumpsuitsCover'.date('YmdHis01');  
            $newname6 = $rename6.'.'.$extension6;   
            $temp_name6 = $_FILES['woman_jumpsuits']['tmp_name'];
            move_uploaded_file($temp_name6,"./covers/$newname6");
            
            $update_slide = "update covers set l1='$l1js',l2='$l2js',c_image='$newname6' where id=7";            
            $run_update_slide = mysqli_query($con,$update_slide);
            
            if($run_update_slide){                
                echo "<script>alert('Woman Jumpsuits Cover Image has been Updated Successfully')</script>";            
                echo "<script>window.open('index.php?cat_covers','_self')</script>";                
            }
        }
        
   
    } 

    if(isset($_POST['updateshirts'])){

        ini_set ('display_errors', 1);  
        ini_set ('display_startup_errors', 1);  
        error_reporting (E_ALL); 
        $l1ts = $_POST['l17'];
        $l2ts = $_POST['l27'];
        if ($_FILES['woman_tshirts']['size'] == 0) {
            // woman_tshirts is empty (and not an error)
            
            $update_slide = "update covers set l1='$l1ts',l2='$l2ts' where id=8";            
            $run_update_slide = mysqli_query($con,$update_slide);            
            if($run_update_slide){                
                echo "<script>alert('Woman T-SHIRTS Intro has been Updated Successfully')</script>";             
                echo "<script>window.open('index.php?cat_covers','_self')</script>";                
            }
            
        } else if ($_FILES['woman_tshirts']['size'] != 0) {
            // woman_tshirts is empty (and not an error)
            $woman_tshirts1 = $_FILES['woman_tshirts']['name'];
            $extension7 = pathinfo($woman_tshirts1, PATHINFO_EXTENSION); 
            $rename7 = 'WomanT-SHIRTSCover'.date('YmdHis01');  
            $newname7 = $rename7.'.'.$extension7;   
            $temp_name7 = $_FILES['woman_tshirts']['tmp_name'];
            move_uploaded_file($temp_name7,"./covers/$newname7");
            
            $update_slide = "update covers set l1='$l1ts',l2='$l2ts',c_image='$newname7' where id=8";            
            $run_update_slide = mysqli_query($con,$update_slide);
            
            if($run_update_slide){                
                echo "<script>alert('Woman T-SHIRTS Cover Image has been Updated Successfully')</script>";            
                echo "<script>window.open('index.php?cat_covers','_self')</script>";                
            }
        }
        
   
    } 

    if(isset($_POST['updatetanktops'])){

        ini_set ('display_errors', 1);  
        ini_set ('display_startup_errors', 1);  
        error_reporting (E_ALL); 
        $l1tt = $_POST['l18'];
        $l2tt = $_POST['l28'];
        if ($_FILES['woman_tanktops']['size'] == 0) {
            // woman_tanktops is empty (and not an error)
            
            $update_slide = "update covers set l1='$l1tt',l2='$l2tt' where id=9";            
            $run_update_slide = mysqli_query($con,$update_slide);            
            if($run_update_slide){                
                echo "<script>alert('Woman TANKTOPS Intro has been Updated Successfully')</script>";             
                echo "<script>window.open('index.php?cat_covers','_self')</script>";                
            }
            
        } else if ($_FILES['woman_tanktops']['size'] != 0) {
            // woman_tanktops is empty (and not an error)
            $woman_tanktops1 = $_FILES['woman_tanktops']['name'];
            $extension8 = pathinfo($woman_tanktops1, PATHINFO_EXTENSION); 
            $rename8 = 'WomanTANKTOPSCover'.date('YmdHis01');  
            $newname8 = $rename8.'.'.$extension8;   
            $temp_name8 = $_FILES['woman_tanktops']['tmp_name'];
            move_uploaded_file($temp_name8,"./covers/$newname8");
            
            $update_slide = "update covers set l1='$l1tt',l2='$l2tt',c_image='$newname8' where id=9";            
            $run_update_slide = mysqli_query($con,$update_slide);
            
            if($run_update_slide){                
                echo "<script>alert('Woman TANKTOPS Cover Image has been Updated Successfully')</script>";            
                echo "<script>window.open('index.php?cat_covers','_self')</script>";                
            }
        }
        
   
    } 

    if(isset($_POST['updatedkintwear'])){

        ini_set ('display_errors', 1);  
        ini_set ('display_startup_errors', 1);  
        error_reporting (E_ALL); 
        $l1kw = $_POST['l19'];
        $l2kw = $_POST['l29'];
        if ($_FILES['woman_kintwears']['size'] == 0) {
            // woman_kintwears is empty (and not an error)
            
            $update_slide = "update covers set l1='$l1kw',l2='$l2kw' where id=10";            
            $run_update_slide = mysqli_query($con,$update_slide);            
            if($run_update_slide){                
                echo "<script>alert('Woman KintWear Intro has been Updated Successfully')</script>";             
                echo "<script>window.open('index.php?cat_covers','_self')</script>";                
            }
            
        } else if ($_FILES['woman_kintwears']['size'] != 0) {
            // woman_kintwears is empty (and not an error)
            $woman_kintwears1 = $_FILES['woman_kintwears']['name'];
            $extension9 = pathinfo($woman_kintwears1, PATHINFO_EXTENSION); 
            $rename9 = 'WomanKintWearCover'.date('YmdHis01');  
            $newname9 = $rename9.'.'.$extension9;   
            $temp_name9 = $_FILES['woman_kintwears']['tmp_name'];
            move_uploaded_file($temp_name9,"./covers/$newname9");
            
            $update_slide = "update covers set l1='$l1kw',l2='$l2kw',c_image='$newname9' where id=10";            
            $run_update_slide = mysqli_query($con,$update_slide);
            
            if($run_update_slide){                
                echo "<script>alert('Woman KintWear Cover Image has been Updated Successfully')</script>";            
                echo "<script>window.open('index.php?cat_covers','_self')</script>";                
            }
        }
        
   
    } 

    if(isset($_POST['updatedsweetshirt'])){

        ini_set ('display_errors', 1);  
        ini_set ('display_startup_errors', 1);  
        error_reporting (E_ALL); 
        $l1sws = $_POST['l110'];
        $l2sws = $_POST['l210'];
        if ($_FILES['woman_sweatshirt']['size'] == 0) {
            // woman_sweatshirt is empty (and not an error)
            
            $update_slide = "update covers set l1='$l1sws',l2='$l2sws' where id=11";            
            $run_update_slide = mysqli_query($con,$update_slide);            
            if($run_update_slide){                
                echo "<script>alert('Woman SweatShirt Intro has been Updated Successfully')</script>";             
                echo "<script>window.open('index.php?cat_covers','_self')</script>";                
            }
            
        } else if ($_FILES['woman_sweatshirt']['size'] != 0) {
            // woman_sweatshirt is empty (and not an error)
            $woman_sweatshirt1 = $_FILES['woman_sweatshirt']['name'];
            $extension10 = pathinfo($woman_sweatshirt1, PATHINFO_EXTENSION); 
            $rename10 = 'WomanSweatShirtCover'.date('YmdHis01');  
            $newname10 = $rename10.'.'.$extension10;   
            $temp_name10 = $_FILES['woman_sweatshirt']['tmp_name'];
            move_uploaded_file($temp_name10,"./covers/$newname10");
            
            $update_slide = "update covers set l1='$l1sws',l2='$l2sws',c_image='$newname10' where id=11";            
            $run_update_slide = mysqli_query($con,$update_slide);
            
            if($run_update_slide){                
                echo "<script>alert('Woman SweatShirt Cover Image has been Updated Successfully')</script>";            
                echo "<script>window.open('index.php?cat_covers','_self')</script>";                
            }
        }
        
   
    } 

    if(isset($_POST['updatemother'])){

        ini_set ('display_errors', 1);  
        ini_set ('display_startup_errors', 1);  
        error_reporting (E_ALL); 
        $l1mo = $_POST['l111'];
        $l2mo = $_POST['l211'];
        if ($_FILES['woman_mother']['size'] == 0) {
            // woman_mother is empty (and not an error)
            
            $update_slide = "update covers set l1='$l1mo',l2='$l2mo' where id=12";            
            $run_update_slide = mysqli_query($con,$update_slide);            
            if($run_update_slide){                
                echo "<script>alert('Woman MATERNITY Intro has been Updated Successfully')</script>";             
                echo "<script>window.open('index.php?cat_covers','_self')</script>";                
            }
            
        } else if ($_FILES['woman_mother']['size'] != 0) {
            // woman_mother is empty (and not an error)
            $woman_mother1 = $_FILES['woman_mother']['name'];
            $extension11 = pathinfo($woman_mother1, PATHINFO_EXTENSION); 
            $rename11 = 'WomanMATERNITYCover'.date('YmdHis01');  
            $newname11 = $rename11.'.'.$extension11;   
            $temp_name11 = $_FILES['woman_mother']['tmp_name'];
            move_uploaded_file($temp_name11,"./covers/$newname11");
            
            $update_slide = "update covers set l1='$l1mo',l2='$l2mo',c_image='$newname11' where id=12";            
            $run_update_slide = mysqli_query($con,$update_slide);
            
            if($run_update_slide){                
                echo "<script>alert('Woman MATERNITY Cover Image has been Updated Successfully')</script>";            
                echo "<script>window.open('index.php?cat_covers','_self')</script>";                
            }
        }
        
   
    } 


    if(isset($_POST['updatedoutwear'])){

        ini_set ('display_errors', 1);  
        ini_set ('display_startup_errors', 1);  
        error_reporting (E_ALL); 
        $l1out = $_POST['l112'];
        $l2out = $_POST['l212'];
        if ($_FILES['woman_outwear']['size'] == 0) {
            // woman_outwear is empty (and not an error)
            
            $update_slide = "update covers set l1='$l1out',l2='$l2out' where id=13";            
            $run_update_slide = mysqli_query($con,$update_slide);            
            if($run_update_slide){                
                echo "<script>alert('Woman OUTWEAR Intro has been Updated Successfully')</script>";             
                echo "<script>window.open('index.php?cat_covers','_self')</script>";                
            }
            
        } else if ($_FILES['woman_outwear']['size'] != 0) {
            // woman_outwear is empty (and not an error)
            $woman_outwear1 = $_FILES['woman_outwear']['name'];
            $extension12 = pathinfo($woman_outwear1, PATHINFO_EXTENSION); 
            $rename12 = 'WomanOUTWEARCover'.date('YmdHis01');  
            $newname12 = $rename12.'.'.$extension12;   
            $temp_name12 = $_FILES['woman_outwear']['tmp_name'];
            move_uploaded_file($temp_name12,"./covers/$newname12");
            
            $update_slide = "update covers set l1='$l1out',l2='$l2out',c_image='$newname12' where id=13";            
            $run_update_slide = mysqli_query($con,$update_slide);
            
            if($run_update_slide){                
                echo "<script>alert('Woman OUTWEAR Cover Image has been Updated Successfully')</script>";            
                echo "<script>window.open('index.php?cat_covers','_self')</script>";                
            }
        }
        
   
    } 

    if(isset($_POST['updatednew'])){

        ini_set ('display_errors', 1);  
        ini_set ('display_startup_errors', 1);  
        error_reporting (E_ALL); 
        $l1new = $_POST['l113'];
        $l2new = $_POST['l213'];
        if ($_FILES['woman_new']['size'] == 0) {
            // woman_new is empty (and not an error)
            
            $update_slide = "update covers set l1='$l1new',l2='$l2new' where id=14";            
            $run_update_slide = mysqli_query($con,$update_slide);            
            if($run_update_slide){                
                echo "<script>alert('Woman NEW ARRIVALS Intro has been Updated Successfully')</script>";             
                echo "<script>window.open('index.php?cat_covers','_self')</script>";                
            }
            
        } else if ($_FILES['woman_new']['size'] != 0) {
            // woman_new is empty (and not an error)
            $woman_new1 = $_FILES['woman_new']['name'];
            $extension13 = pathinfo($woman_new1, PATHINFO_EXTENSION); 
            $rename13 = 'WomanNEWARRIVALSCover'.date('YmdHis01');  
            $newname13 = $rename13.'.'.$extension13;   
            $temp_name13 = $_FILES['woman_new']['tmp_name'];
            move_uploaded_file($temp_name13,"./covers/$newname13");
            
            $update_slide = "update covers set l1='$l1new',l2='$l2new',c_image='$newname13' where id=14";            
            $run_update_slide = mysqli_query($con,$update_slide);
            
            if($run_update_slide){                
                echo "<script>alert('Woman NEW ARRIVALS Cover Image has been Updated Successfully')</script>";            
                echo "<script>window.open('index.php?cat_covers','_self')</script>";                
            }
        }
        
   
    } 
    
?>

<?php } ?>