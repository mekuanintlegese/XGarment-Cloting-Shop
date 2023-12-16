<?php 
    include("includes/db.php");

    if(!empty($_POST["p_cat_id"])) {
        $query = "SELECT * FROM product_categories WHERE p_cat_id= ".$_POST['p_cat_id']." ORDER BY p_subcat_title ASC";
        $result = $con->query($query);

        if($result->num_rows > 0){
            echo '<option value=""> Choose Sub-Category</option>';
            while($row = $result->fetch_assoc()){
            echo '<option value="'.$row['p_subcat_title'].'"> '.$row['p_subcat_title'].' </option>';
            }
        } else {
            echo '<option value="">No Sub-Category Available</option>';
        }

    } 


?>