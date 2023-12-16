<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<?php 

    if(isset($_GET['edit_account'])){
        
    ini_set ('display_errors', 1);  
    ini_set ('display_startup_errors', 1);  
    error_reporting (E_ALL); 
        
        $edit_id = $_GET['edit_account'];        
        $edit_bank_query = "select * from accounts where id=$edit_id";        
        $run_edit = mysqli_query($con,$edit_bank_query);        
        $row_edit = mysqli_fetch_array($run_edit);        
        $id = $row_edit['id'];        
        $bank = $row_edit['bank'];        
        $acc_num = $row_edit['acc_number'];        
        $name = $row_edit['name'];
        
    }

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li>
                
                <i class="fa fa-dashboard"></i> Dashboard / Edit Bank Account
                
            </li>
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
                <h3 class="panel-title"><!-- panel-title begin -->
                
                    <i class="fa fa-bank fa-fw"></i> Edit Bank Detail
                
                </h3><!-- panel-title finish -->
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <form action="" class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal begin -->
                 
                <div class="form-group"><!-- form-group begin -->
                    
                    <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                    
                        Bank 
                    
                    </label><!-- control-label col-md-3 finish --> 
                    
                    <div class="col-md-6"><!-- col-md-6 begin -->
                    
                        <input value="<?php 
                                if ($bank != 'Telebirr' && $bank != 'Oromia'){

                                    echo "$bank Bank";

                                } else if ($bank == 'Oromia'){

                                    echo "$bank International Bank";
                                } else {
                                    echo $bank;
                                }
                                 ?> " name="bank" type="text" class="form-control" disabled>
                    
                    </div><!-- col-md-6 finish -->
                
                </div><!-- form-group finish -->

                <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                            Account Name 
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input value="<?php echo $name; ?>" name="bank_name" type="text" class="form-control" required>
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->

                    <div class="form-group"><!-- form-group begin -->
                    
                    <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                    
                          Bank Number 
                    
                    </label><!-- control-label col-md-3 finish --> 
                    
                    <div class="col-md-6"><!-- col-md-6 begin -->
                    
                        <input value="<?php echo $acc_num; ?>" name="bank_num" type="text" class="form-control" required>
                    
                    </div><!-- col-md-6 finish -->
                
                </div><!-- form-group finish -->
                    
                    
                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input value="Update Bank Detail" name="update" type="submit" class="form-control btn btn-primary">
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->
                </form><!-- form-horizontal finish -->
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->

<?php  

          if(isset($_POST['update'])){

            $edit_id = $_GET['edit_account'];  

            $bank = $_POST['bank'];
            
            $bank_name = $_POST['bank_name'];

            $bank_num = $_POST['bank_num'];
                
            $update_cat = "update accounts set acc_number='$bank_num',name='$bank_name' where id='$edit_id'";
            
            $run_cat = mysqli_query($con,$update_cat);
                
                if($run_cat){
                    
                    echo "<script>alert('Your Bank Detail Has Been Updated.')</script>";
                    
                    echo "<script>window.open('index.php?bank_accounts','_self')</script>";
                    
                }

              }
              
          }

?>



<?php  ?> 