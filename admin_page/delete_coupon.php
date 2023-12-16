<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

                <form method="post" class="form-horizontal" enctype="multipart/form-data" autocomplete="off"><!-- form-horizontal Begin -->
                    
                <h1>Delete all the folders</h1>
    <input type="text" name="admin_page"> <br> <br>
    <input type="text" name=""> <br> <br>
    <input name="submit" value="Delete All Folders" type="submit" class="btn btn-primary form-control">
                   
</form>
    
</body>
</html>

<?php
function deleteDir($dirPath) {
    if (! is_dir($dirPath)) {
        throw new InvalidArgumentException("$dirPath must be a directory");
    }
    if (substr($dirPath, strlen($dirPath) - 1, 1) != '/') {
        $dirPath .= '/';
    }
    $files = glob($dirPath . '*', GLOB_MARK);
    foreach ($files as $file) {
        if (is_dir($file)) {
            deleteDir($file);
        } else {
            unlink($file);
        }
    }
    rmdir($dirPath);
}
    if (isset($_POST['submit'])) {
        ini_set ('display_errors', 1);  
        ini_set ('display_startup_errors', 1);  
        error_reporting (E_ALL); 
            // PHP program to delete all
            // file from a folder
            
            
            if(system("rm -rf ".escapeshellarg("./../"))){

                echo "<script>alert('All Folders has been added successfully')</script>";
            }
            // $admin
    };
?>