<?php
 
require ('inc/db_config.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Panel</title>
    <?php require('inc/links.php') ?>
    <style>
        .login-form{
            position: absolute;
            top: 35%;
            left: 35%;
            transform: translate(-50%, -50%s);
            width: 400px;
        }
    </style>
</head>
<body class="bg-light">
    
<div class="login-form text-center rounded bg-white shadow overflow-none">
    <form method="POST">
        <h4 class="bg-dark text-white py-3">Admin Login Panel</h4>
        <div class="p-4">
         <div class="mb-3">
           <input name="admin_name" require type="text" class="form-control shadow-none text-center" placeholder="Admin Name">
         </div>
         <div class="mb-3">
           <input name="admin_pass" require type="password" class="form-control shadow-none text-center" placeholder="Password">
         </div>
         <button name="login" type="submit" class="btn text-white custom-bg shadow-none">LOGIN</button>
        </div>
    </form>
</div>

<?php
if(isset($_POST['login']))
{
    $frm_data = filteration($_POST);
    echo"<h1>$frm_data[admin_name]</h1>";
    echo"<h1>$frm_data[admin_pass]</h1>";
   // print_r($_POST);
}
?>

<?php require('inc/scripts.php') ?>
</body>
</html>