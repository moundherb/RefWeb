<?php
include('../db.php');

if(isset($_SESSION['user'])){
    if($_SESSION['user']->role === "user"){
        $id = $_SESSION['user']->id ;
        $selectuser = $database->prepare("SELECT * FROM users WHERE id = $id ");
        $selectuser->execute();
        $user = $selectuser->fetchObject();  
        
    }
    else{
        header("location:../account.php" , true);
        die("");
    }
}else{
    header("location:../account.php" , true);
    die("");
}
header("location:frontend.php" , true);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
   </head>
<body>
  
</body>
</html>
