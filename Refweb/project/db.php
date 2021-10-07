<?php
/* --change db informations-- */
$user = "root";
$pass = "";
$database = new PDO("mysql:host=localhost; dbname=proj;",$user,$pass);

$siteurl = "http://localhost/project/";/* --change site url-- */

$sitepath = $_SERVER["DOCUMENT_ROOT"] . "/project/";/* --change "project" to site folder-- */
$sitename = "RefWeb";



session_start();

 

if(isset($_SESSION['lang'])){
  include($sitepath.'lang/'.$_SESSION['lang'].'.php');
}else {
  $_SESSION['lang'] = "eng";
  include($sitepath.'lang/eng.php');
}
  if(isset($_POST['lang'])){
    $_SESSION['lang'] = $_POST['lang'];
    include($sitepath.'lang/'.$_SESSION['lang'].'.php');
  } 


  if(isset($_POST['dark'])){
    $_SESSION['mode'] = "dark";
  }elseif(isset($_POST['norm'])){
    $_SESSION['mode'] = "norm";
  }
  if(isset($_SESSION['mode'])){
  
  }else{
    $_SESSION['mode'] = "norm";
  }

  if(isset($_POST['login'])){
    $login = $database->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
    $login->bindParam("username",$_POST['username']);
    $login->bindParam("password",$_POST['password']);
    $login->execute();
    if($login->rowCount()===1){

        $user = $login->fetchObject();
        $_SESSION['user'] = $user;

        if($user->role === "admin"){
                header("location:admin/index.php" , true);
            }elseif($user->role === "user"){
                header("location:user/index.php" , true);
            }

    }else{
    echo '
    <style type="text/css">
        .errorlogin {
            display: unset !important;
        }
        .errorsignup {
            display: none !important;
        }
        .goodsignup{
            display: none !important;
        }
        .eroordb{
            display: none !important;
        }
    </style>
        ';   
    }
}

if(isset($_POST['signup'])){
    $checkusrename = $database->prepare("SELECT * FROM users WHERE username = :username");
    $username = $_POST['username'];
    $checkusrename->bindParam("username",$_POST['username']);
    $checkusrename->execute();
    if($checkusrename->rowCount()!=0){
        echo '
    <style type="text/css">
        .errorlogin {
            display: none !important;
        }
        .errorsignup {
            display: unset !important;
        }
        .goodsignup{
            display: none !important;
        }
        .eroordb{
            display: none !important;
        }
    </style>
        ';   

    }else{
        $signup = $database->prepare("INSERT INTO users(fullname,username,password,role,img)
                                              VAlues(:fullname,:username,:password,:role,:img) ");
        $signup->bindParam("fullname",$_POST['fullname']);
        $signup->bindParam("username",$_POST['username']);
        $signup->bindParam("password",$_POST['password']);
        $img = 'usermale.jpg';
        $role = 'user';
        $signup->bindParam("role",$role);
        $signup->bindParam("img",$img);
        if($signup->execute()){
            echo '
                <style type="text/css">
                .errorlogin {
                    display: none !important;
                }
                .errorsignup {
                    display: none !important;
                }
                .goodsignup{
                    display: unset !important;
                }
                .eroordb{
                    display: none !important;
                }
                </style>
            ';   
        }else{
            echo '
                <style type="text/css">
                .errorlogin {
                    display: none !important;
                }
                .errorsignup {
                    display: none !important;
                }
                .goodsignup{
                    display: none !important;
                }
                .eroordb{
                    display: unset !important;
                }
                </style>
            ';  
        }
    }

    

}
  



?>