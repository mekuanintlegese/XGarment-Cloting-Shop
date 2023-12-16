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
                
                <i class="fa fa-dashboard"></i> Dashboard / Bank Accounts
                
            </li><!-- active finish -->
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
               <h3 class="panel-title"><!-- panel-title begin -->
               
                   <i class="fa fa-bank"></i>  View Bank Accounts
                
               </h3><!-- panel-title finish --> 
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-striped table-bordered table-hover"><!-- table table-striped table-bordered table-hover begin -->
                        
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> No: </th>
                                <th> Bank: </th>
                                <th> Account Number: </th>
                                <th> Name: </th>
                                <th> Edit: </th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->

           <!-- // <option value="Abyssinia" > Abyssinia / አቢሲኒያ ባንክ </option>
                // <option value="Awash"  > Awash Bank / አዋሽ ባንክ </option>
                // <option value="Berhan" > Berhan Bank / ብርሀን ባንክ</option>
                // <option value="CBE" selected> CBE / የኢትዮጵያ ንግድ ባንክ</option>
                // <option value="COOP"> COOP / ኮፕሬቲቭ ባንክ </option>
                // <option value="Nib"> Nib / ንብ ባንክ </option>
                // <option value="Oromia"> Oromia International / - ባንክ</option>
                // <option value="Hibret" > Hibret Bank / ሕብረት ባንክ </option>
                // <option value="Telebirr" >  Telebirr / ቴሌብር </option>

                // Abyssinia Bank- 14150398
                // Awash Bank- 01320463746400
                // CBE-1000217916438
                // Berhan bank-1010010264329
                // Hibret bank-1780411921093013
                // Nib bank- 218SAV325
                // COOP-1000087857216
                // Oromia International Bank- 1498885700001
                // Telebirr-0913829760 (fikir gebeyehu ayele)
                // The bank accounts are in Habtamu Mengesha Adal name -->

                            <?php           
                                $i=0;                            
                                $get_pro = "select * from accounts order by bank asc";                                
                                $run_pro = mysqli_query($con,$get_pro);          
                                while($row_pro=mysqli_fetch_array($run_pro)){                                    
                                    $id = $row_pro['id'];                                    
                                    $bank = $row_pro['bank'];                                    
                                    $acc_num = $row_pro['acc_number'];                                    
                                    $name = $row_pro['name'];                                     
                                    $i++;                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $i; ?> </td>
                                <td> <?php 
                                if ($bank != 'Telebirr' && $bank != 'Oromia'){

                                    echo "<span>$bank Bank</span>";

                                } else if ($bank == 'Oromia'){

                                    echo "<span>$bank International Bank</span>";
                                } else {
                                    echo $bank;
                                }
                                 ?> 
                                </td>
              
                                <td> <?php echo $acc_num; ?> </td>
                                <td> <?php echo $name; ?> </td>
                                <td>                                      
                                     <a href="index.php?edit_account=<?php echo $id; ?>">                                     
                                        <i class="fa fa-pencil"></i> Edit                                    
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
            var result = confirm('Are you sure? Do you want to delete this Bank Account?')
            if(result == false){
                    event.preventDefault();
            }
    }
</script>