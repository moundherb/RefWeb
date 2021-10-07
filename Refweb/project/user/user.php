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
    

$message = "";
$messageclass = "hiden";
if(isset($_POST['rate'])){
  $id = $user->id;
  $checkop = $database->prepare("SELECT * FROM opinions WHERE writerid = $id");
  
  $checkop->bindParam("id",$id);
  $checkop->execute();
  if($checkop->rowCount()!=0){
    $message = "You have already given your opinion" ;
    $messageclass = "";
  }else{
    $writeop = $database->prepare("INSERT INTO opinions(rating,writerid,opmsg)
                                                VAlues(:rating,:writerid,:opmsg) ");
    $writeop->bindParam("rating",$_POST['rating']);
    $writeop->bindParam("writerid",$id);
    $writeop->bindParam("opmsg",$_POST['opmsg']);
    if($writeop->execute()){
      $message = "Your opinion has been registered" ;
      $messageclass = "";
    }

  }
}

if(isset($_POST['change_icon'])){
  $iconname = $user->id.$_FILES["icon"]["name"];
  $icon = $_FILES["icon"]["tmp_name"];
  move_uploaded_file($icon , "../imgs/".$iconname);
  $uploadicon = $database->prepare("UPDATE users SET img = '$iconname' WHERE users.id = $user->id;");
  if($uploadicon->execute()){
    header("location:#" , true);

  }else{
    $message = "error" ;
    $messageclass = "";
  }
}  


if(isset($_POST['newsite'])){
  $imgname = $user->id.$_FILES["siteimg"]["name"];
  $img = $_FILES["siteimg"]["tmp_name"];
  move_uploaded_file($img , "../imgs/".$imgname);
  $newsite = $database->prepare("INSERT INTO resources(sect,name,Categ,link,img,desceng,descar,descfr)
                                                VAlues(:sect,:name,:Categ,:link,:img,:desceng,:descar,:descfr) ");
    $newsite->bindParam("sect",$_POST['sitesect']);
    $newsite->bindParam("name",$_POST['sitename']);
    $newsite->bindParam("Categ",$_POST['sitecateg']);
    $newsite->bindParam("link",$_POST['sitelink']);
    $newsite->bindParam("img",$imgname);
    $newsite->bindParam("desceng",$_POST['sitedesceng']);
    $newsite->bindParam("descar",$_POST['sitedescar']);
    $newsite->bindParam("descfr",$_POST['sitedescfr']);
  if($newsite->execute()){
    $message = "site added" ;
    $messageclass = "";
  }else{
    $message = "error" ;
    $messageclass = "";
  }
}  

   

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" href="../imgs/lg.png">
    <title><?php echo $sitename; ?> | UserSetting</title>
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

<div id="message" class="<?php echo $messageclass ?>"><?php echo $message ?></div>

  <div id="opinions" >
        <BUTTON ONCLICK="ShowAndHide(this.id);"  id="opinions"  class="button"><?php echo $text['useropbutton']; ?></BUTTON>
        <DIV class="hiden content " STYLE="" >
        <center> <?php echo $text['useroptext']; ?>
<form method="POST">
  
  <div class="feedback">
    <div class="rating">
      <input type="radio" name="rating" id="rating-5" value="5" required>
      <label for="rating-5"></label>
      <input type="radio" name="rating" id="rating-4" value="4" required>
      <label for="rating-4"></label>
      <input type="radio" name="rating" id="rating-3" value="3" required>
      <label for="rating-3"></label>
      <input type="radio" name="rating" id="rating-2" value="2" required>
      <label for="rating-2"></label>
      <input type="radio" name="rating" id="rating-1" value="1" required>
      <label for="rating-1"></label>
      <div class="emoji-wrapper">
        <div class="emoji">
          <img src="../imgs/0.svg" class="rating-0" />
          <img src="../imgs/1.svg" class="rating-1" />
          <img src="../imgs/2.svg" class="rating-2" />
          <img src="../imgs/3.svg" class="rating-3" />
          <img src="../imgs/4.svg" class="rating-4" />
          <img src="../imgs/5.svg" class="rating-5" />
        </div>
      </div>
    </div>
  </div>
  <textarea id="opmsg" name="opmsg" rows="4" cols="44" required></textarea>
</br>
  <button name="rate"><?php echo $text['useropsubmit']; ?></button>
</form>

</center>
        </DIV>
    </div>
    <!------------------>

    <div id="userimg" >
        <BUTTON ONCLICK="ShowAndHide(this.id);"  id="userimg"  class="button"><?php echo $text['userimgbutton']; ?></BUTTON>
        <DIV  class="hiden content " STYLE="" >
        <center><?php echo $text['userimgtext']; ?></br>
        <img src="<?php echo ''.$siteurl.'/imgs/'.$user->img.'' ?>" style = "
  width:100%; height: 100%;
  max-width: 200px;
  max-height: 200px;
  border-radius: 50%;" alt="">
<form action="" method="POST" enctype="multipart/form-data">
<input type="file" name="icon" id="" required/>
<button name="change_icon" ><?php echo $text['userimgsubmit']; ?></button>
</form>
</center>
        </DIV>
    </div>
     <!------------------>

<!------------------>
     <div id="res" >
        <BUTTON ONCLICK="ShowAndHide(this.id);"  id="res"  class="button"><?php echo $text['usersitebutton']; ?></BUTTON>
        <DIV  class="hiden content " STYLE="" >
<center> 

</center>
<form action="" method="POST" enctype="multipart/form-data">
<div class="input-box">
   <span><?php echo $text['site-name']; ?> : </span>
  <input type="text" placeholder="<?php echo $text['site-name']; ?>" name="sitename" required=""></div>
<div class="input-box"> <span><?php echo $text['site-section']; ?> :</span>
  <div><input type="radio" class="radio" onclick="selectedsect(this.value)" name="sitesect" required="" id="frontendsect" value="frontend"><label for="frontendsect">frontend </label></div>
  <div><input type="radio" class="radio" onclick="selectedsect(this.value)" name="sitesect" required="" id="backendsect" value="backend"><label for="backendsect">backend </label></div>
  <div><input type="radio" class="radio" onclick="selectedsect(this.value)" name="sitesect" required="" id="designsect" value="design"><label for="designsect">design </label></div>
</div>
<div class="input-box"><span><?php echo $text['site-category']; ?> : </span>
<input type="input" placeholder="html Css js ..." name="sitecateg" id="html" class="" value=""></div>


<div class="input-box"><span><?php echo $text['site-link']; ?> : </span><input type="text" placeholder="<?php echo $text['site-link']; ?>" name="sitelink" required=""></div>
<div class="input-box"><span><?php echo $text['site-descreption-eng']; ?> : </span><input type="text" placeholder="<?php echo $text['site-descreption-eng']; ?>" name="sitedesceng" required=""></div>
<div class="input-box"><span><?php echo $text['site-descreption-ar']; ?> :  </span><input type="text" placeholder="<?php echo $text['site-descreption-ar']; ?> " name="sitedescar" required=""></div>
<div class="input-box"><span><?php echo $text['site-descreption-fr']; ?> :  </span><input type="text" placeholder="<?php echo $text['site-descreption-fr']; ?> " name="sitedescfr" required=""></div>
  
<div class="input-box"><span><?php echo $text['site-img']; ?> : </span><input type="file" name="siteimg" id="" required/></sdiv>
  <button name="newsite" ><?php echo $text['site-submite']; ?></button>
</form>
        </DIV>
    </div>
      <!------------------>
</div>
  </main>
  </section>

  <SCRIPT>
    
  function selectedsect(selected){
    var categsdivs = document.getElementsByClassName('categ');
    for(i = 0; i < categsdivs.length; i++) {
      if(categsdivs[i].classList.contains('hiden')){
      }else{
        categsdivs[i].classList.add('hiden');
      }
      if(categsdivs[i].id == selected){
        console.log(categsdivs[i]);
        categsdivs[i].classList.remove("hiden");
      }
    }
  }
  
        function ShowAndHide(cl) {
            var x = document.getElementById(cl).getElementsByClassName('content');
            x[0].classList.toggle("hiden");
        }
        </SCRIPT>
  <?php echo'<script src="'.$siteurl.'/js/user.js"></script>'; ?>
<script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
</body>
</html>