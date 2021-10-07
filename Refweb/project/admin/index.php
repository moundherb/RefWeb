<?php
$sitepath = $_SERVER["DOCUMENT_ROOT"] . "/project/";
include($sitepath.'/db.php');

if(isset($_SESSION['user'])){
    if($_SESSION['user']->role === "admin"){
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
    





?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Dashboard </title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?php echo ''.$siteurl.'css/user-style.css';?>">
    <?php if($_SESSION['mode'] == "dark"){echo '<link rel="stylesheet" href="'.$siteurl.'css/darkmode.css">';} ?>
    <?php if($_SESSION['lang'] == "ar"){echo '<link rel="stylesheet" href="'.$siteurl.'css/rtl.css">';} ?>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    
    <ul class="nav-list">

      <li>
        <center><img src="<?php echo ''.$siteurl.'imgs/lg.png';?>" alt=""></center>
      </li>
      <li>
        <a href="index.php" >
          <i class='bx bx-grid-alt'></i>
          <span class="links_name"><?php echo $text['dashboard']; ?></span>
        </a>
         <span class="tooltip"><?php echo $text['dashboard']; ?></span>
      </li>
      <li>
        <a href="frontend.php">
        <i class="fas fa-file-alt"></i>
          <span class="links_name"><?php echo $text['frontend']; ?></span>
        </a>
         <span class="tooltip"><?php echo $text['frontend']; ?></span>
      </li>
      <li>
        <a href="backend.php">
          <i class="fas fa-server"></i>
          <span class="links_name"><?php echo $text['backend']; ?></span>
        </a>
         <span class="tooltip"><?php echo $text['backend']; ?></span>
      </li>
      <li>
        <a href="design.php">
          <i class="fas fa-palette"></i>
          <span class="links_name"><?php echo $text['design']; ?></span>
        </a>
         <span class="tooltip"><?php echo $text['design']; ?></span>
      </li>
      <li>
       <a href="user.php" class="active">
         <i class='bx bx-user' ></i>
         <span class="links_name"><?php echo $text['userdata']; ?></span>
       </a>
       <span class="tooltip"><?php echo $text['userdata']; ?></span>
     </li>
     
     <li>
       <a href="<?php echo ''.$siteurl.'logout.php'; ?>">
         <i class="fas fa-sign-out-alt" style="transform: rotate(180deg);"></i>
         <span class="links_name"><?php echo $text['logout']; ?></span>
       </a>
       <span class="tooltip"><?php echo $text['logout']; ?></span>
     </li>
     
     
    </ul>
  </div>
  <section class="home-section">

    <header id="header">
      <h2>
        <div class="logo-details">
            
            <div class="logo_name"><i class='bx bx-menu' id="btn" ></i>
              
              <?php echo'<a href="'.$siteurl.'">'.$sitename.'</a>' ?>
            </div>
            
        </div>
      </h2>
      <div><?php 
        if($_SESSION['mode'] == "norm"){
          echo '<form method="POST"><button name="dark" id="sun"><i class="fas fa-sun" ></i></button></form>';
          
        }else {
          echo'<form method="POST"><button name="norm"  id="moon"><i class="fas fa-moon "></i></button></form>';
        }
      ?>
      
      
      </div>
      <div class="user-wrapper">
          
        <img src="<?php echo ''.$siteurl.'/imgs/'.$user->img.'' ?>" width="40px" height="40px" alt="">
        <div id="namelg">
            <h4><?php echo $user->fullname ?></h4>
            <!--<small><?php echo $user->role ?></small>-->
            <form method="POST" >
              <select name="lang" id="lang" onchange='this.form.submit();'  > 
                <?php $langs = array("eng", "ar", "fr"); 
                  echo'<option value="ar">'.$_SESSION['lang'].'</option>';
                    for($i=0 ; $i<count($langs) ; $i++){
                      if($langs[$i] != $_SESSION['lang']){
                        echo'<option value="'.$langs[$i].'">'.$langs[$i].'</option>';
                      }
                    }
                ?>
              </select>
            </form>
        </div>
      </div>
    </header>

  <main style="/*display: flex;margin-top: 80px;align-items: center;*/">
<center><h1>Still Working On It</h1></center>
  
  </main>
  </section>

  <?php echo'<script src="'.$siteurl.'/js/user.js"></script>'; ?>
<script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
</body>
</html>