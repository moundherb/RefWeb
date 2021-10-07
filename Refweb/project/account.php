<?php
include('db.php');



if(isset($_SESSION['user'])){
    if($_SESSION['user']->role === "admin"){
        header("location:admin/index.php" , true);
        die("");
    }else{
        header("location:user/index.php" , true);
        die("");
    }

}






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    <?php if($_SESSION['mode'] == "dark"){echo '<link rel="stylesheet" href="'.$siteurl.'css/darkmode.css">';} ?>
    <?php if($_SESSION['lang'] == "ar"){echo '<link rel="stylesheet" href="'.$siteurl.'css/rtl.css">';} ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imgs/lg.png">
    <title><?php echo $sitename; ?> | Account</title>
</head>
<body>

<header class="header">
    <a href="#" class="header__logo"><?php echo $sitename; ?></a>
    <ion-icon name="menu-outline" class="header__toggle" id="nav-toggle"></ion-icon>
    <nav class="nav" id="nav-menu">
      <div class="nav__content bd-grid">
        <ion-icon name="close-outline" class="nav__close" id="nav-close"></ion-icon>
        <div class="nav__perfil">
          <div>
            <a href="#" class="nav__name"><?php echo $sitename; ?></a>
          </div>
        </div>
        <div class="nav__menu">
          <ul class="nav__list">
            <li class="nav__item"><a href="index.php" class="nav__link "><?php echo $text['home']; ?></a></li>
            <li class="nav__item"><a href="index.php#section1" class="nav__link"><?php echo $text['about']; ?></a></li>
            <li class="nav__item"><a href="index.php#section3" class="nav__link"><?php echo $text['courses']; ?></a></li>
            <li class="nav__item"><a href="index.php#container-4" class="nav__link"><?php echo $text['opinions']; ?></a></li>
            <li class="nav__item"><a href="contact.php" class="nav__link"><?php echo $text['contactus']; ?></a></li>
            <li class="nav__item"><a href="#" class="nav__link" onclick="show_hide()"><?php echo $text['team']; ?></a>
              <!------------------------------------------------ Team ------------------------------>
              <div class="team-section" id="teampart">
                <div class="team">
                 <div class="firstpart"> 
                  <div class="pic">
                    <a href="#p2"><img src="imgs/21.jpg"></a>
                    <ul class="social">
                      <li><a href="#" > <i class="fab fa-facebook"></i></a></li>
                      <li><a href="#" > <i class="fab fa-google"></i></a></li>
                      <li><a href="#" > <i class="fab fa-github"></i> </a></li>
                      <li><a href="#" > <i class="fab fa-instagram"></i> </a></li>
                    </ul>
                  </div>
                  <div class="info">

                   <h5>Benselmi Moundher</h5>
                   <p>Software Engineering Student</p>
                   

                </div>
              </div>
              <div class="firstpart"> 
                <div class="pic">
                 <a href="#p1"><img src="imgs/6.jpg"></a>
                 <ul class="social">
                  <li><a href="https://www.facebook.com/dayou.chikespir" > <i class="fab fa-facebook"></i></a></li>
                  <li><a href="#" > <i class="fab fa-google"></i></a></li>
                  <li><a href="#" > <i class="fab fa-github"></i> </a></li>
                  <li><a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fwww.instagram.com%2F_u%2Fitz.dayou%3Ffbclid%3DIwAR0Lx8LFQR4ALoiv6Didt6flPzXlhC6Ttyp9J19VkXVjt-5UjE62xBvj7Aw&h=AT1mIPDJfZSrMZbzdB2tamz6syA56MHTiIUZlTv90lL6JuAgG-8fJc8FGn98cc-7NfnznyvHBX07G2K9yhypPq9Ui_jqny8v4r9eKRHj-LAkoFsqz7Q6l5v-vfPYHm-64DkB8_ydEJ01MgbW" > <i class="fab fa-instagram"></i> </a></li>
                </ul>
              </div>
              <div class="info">
               <h5>Tabbakh Dhyaa</h5>
               <p>Computer Science Student</p>
               
            </div>
          </div>
          <div class="firstpart"> 
            <div class="pic">
             <a href="#p3"><img src="imgs/3.png"></a>
             <ul class="social">
              <li><a href="https://www.facebook.com/profile.php?id=100041456832717" > <i class="fab fa-facebook"></i> </a></li>
              <li><a href="#" > <i class="fab fa-google"></i> </a></li>
              <li><a href="#" > <i class="fab fa-github"></i> </a></li>
              <li><a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fwww.instagram.com%2F_u%2Fmirou8537%3Ffbclid%3DIwAR1_MrXTGtN7LotspkV6V2PU3q234mbhjByc29AL48WespGlzqeQVMwZ5Q8&h=AT2z_r1TcqS-aYMIv0sQSCow8zw4aXWsIWcSE-G5Igm5vvMMydNalZh5BoH4eqzuqSw470tAY6OT-k6rYQwv_hgijRUf4ti9E11xj37dLjKd2weW_EtcJn4ALTRsONC0ji5aAjpHEoGbaiqS" > <i class="fab fa-instagram"></i> </a></li>
            </ul>
          </div>
          <div class="info">
           <h5>Lahcen Amira</h5>
           <p>Computer Science Student</p>
      
        </div>
      </div>
      <div class="firstpart"> 
        <div class="pic">
         <a href="#p4"><img src="imgs/2.png"></a>
         <ul class="social">
          <li><a href="https://www.facebook.com/nassuf.violleta.3" > <i class="fab fa-facebook"></i> </a></li>
          <li><a href="#" > <i class="fab fa-google"></i> </a></li>
          <li><a href="#" > <i class="fab fa-github"></i></a></li>
          <li><a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fwww.instagram.com%2F_u%2Felle.h_i%3Ffbclid%3DIwAR1wwILuHCjfRLFuorvDAv-3T5K8kfTfldH4CHzcAgy4fqCvjbRCX9jGMN8&h=AT0oCzJt8BnsiycssousTLc2-TImE7IhAzWB4QG4YR0nLmdSXndSb_1NXBczcj7hm2QnnBt2FzefV6a4GTm9xk23HDYxBwZtg1SlG8XA9KlDydmaXgfUQYr_NNRyXYtiNuhF-A" > <i class="fab fa-instagram"></i> </a></li>
        </ul>
      </div>
      <div class="info">
       <h5>Hamdouche Insaf</h5>
       <p>Information Technology Student</p>
    </div>
  </div>
  <div class="firstpart"> 
    <div class="pic">
     <a href="#p5"><img src="imgs/1.png"></a>
     <ul class="social">
      <li><a href="https://www.facebook.com/miraa.lyz" > <i class="fab fa-facebook"></i> </a></li>
      <li><a href="#" > <i class="fab fa-google"></i> </a></li>
      <li><a href="#" > <i class="fab fa-github"></i></a></li>
      <li><a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fwww.instagram.com%2F_u%2Fmiraa_lyz%3Ffbclid%3DIwAR2RxzongWfibrrJFDiksf3r-z-YoGAtB_Bq5djA5Uw8MK5grfqSVJxge4I&h=AT2qiaiMID-uCzSzaouAoeMbWPQZDdFOrPgmGSXoJmhtS_5tYDMK6juD-VAtb5xeKUk1XHgE-8T3BFcSeerGf1nx-_GPGTyFAMwEECi2j8oJBiVzvk1kQV2ygicxTN4axU816NXVafBRPPaN" > <i class="fab fa-instagram"></i> </a></li>
    </ul>
  </div>
  <div class="info">
   <h5>Lyzidy Amira</h5>
   <p>Computer Science Student</p>
   
</div>
</div>
</div>
</div>
</li>
</ul>
</div>
<div class="nav__social">
  <a href="account.php" class="nav__social-icon"><i class="far fa-user"></i></a>
   <label class="switch">
                   <?php 
                  if($_SESSION['mode'] == "norm"){
                    echo '<form method="POST"><button name="dark" id="sun"><i class="fas fa-sun" ></i></button></form>';
              
                  }else {
                    echo'<form method="POST"><button name="norm"  id="moon"><i class="fas fa-moon "></i></button></form>';
                  }
                ?>
  </label><form method="POST" >
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
</nav>
</header>

<div id="box">
    <div class="container" id="containerpc">
        
        <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1><?php echo $text['welcome']; ?></h1>
                        <p><?php echo $text['sign-in-pr']; ?></p>
                        <button class="ghost" id="signIn"><?php echo $text['sign-in']; ?></button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1><?php echo $text['welcome']; ?></h1>
                        <p><?php echo $text['sign-up-pr']; ?></p>
                        <button class="ghost" id="signUp"><?php echo $text['sign-up']; ?></button>
                    </div>
                </div>
        </div>
        <div class="form-container sign-up-container">
            <form action="" method="POST">
                <h1><?php echo $text['create-account']; ?></h1>
                <input type="text" placeholder="<?php echo $text['your-name']; ?>" name="fullname" required/>
                <input type="text" placeholder="<?php echo $text['username']; ?>" name="username" required/>
                <input type="password" placeholder="<?php echo $text['password']; ?>" name="password" required/>
                <button name="signup"><?php echo $text['sign-up']; ?></button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="" method="POST">
                <h1><?php echo $text['sign-in']; ?></h1>
                <div class="errorlogin hidenerror"><?php echo $text['errorlogin']; ?></div>
                <div class="goodsignup hidenerror" ><?php echo $text['goodsignup']; ?></div>
                <div class="errorsignup hidenerror"><?php echo $text['errorsignup']; ?></div>
                <div class="eroordb hidenerror"><?php echo $text['eroordb']; ?></div>
                <input type="text" placeholder="<?php echo $text['username']; ?>" name="username" required/>
                <input type="password" placeholder="<?php echo $text['password']; ?>" name="password" required/>
                <button name="login"><?php echo $text['sign-in']; ?></button>
                
            </form>
        </div>
        
    </div>

    <div class="container" id="containerphone">
        <div id="signinphone">
            <div class="signinup">
                <h1><?php echo $text['welcome']; ?></h1>
                <p><?php echo $text['sign-up-pr']; ?></p>
                <button class="ghost" id="signintoup" onclick="intoup()"><?php echo $text['sign-up']; ?></button>
            </div>
            <form action="" method="POST">
                <h1><?php echo $text['sign-in']; ?></h1>
                <div class="errorlogin hidenerror"><?php echo $text['sign-up']; ?></div>
                <div class="goodsignup hidenerror" ><?php echo $text['goodsignup']; ?></div>
                <div class="errorsignup hidenerror"><?php echo $text['errorsignup']; ?></div>
                <div class="eroordb hidenerror"><?php echo $text['eroordb']; ?></div>
                <input type="text" placeholder="<?php echo $text['username']; ?>" name="username" required/>
                <input type="password" placeholder="<?php echo $text['password']; ?>" name="password" required/>
                </br>
                <button name="login"><?php echo $text['sign-in']; ?></button>
            </form>
        </div>

        <div id="signupphone">
            <div class="signinup">
                <h1><?php echo $text['welcome']; ?></h1>
                <p><?php echo $text['sign-in-pr']; ?></p>
                <button class="ghost" id="signuptoin" onclick="uptoin()"><?php echo $text['sign-in']; ?></button>
            </div>
            <form action="" method="POST">
                <h1><?php echo $text['create-account']; ?></h1>
                <input type="text" placeholder="<?php echo $text['your-name']; ?>" name="fullname" required/>
                <input type="text" placeholder="<?php echo $text['username']; ?>" name="username" required/>
                <input type="password" placeholder="Password" name="<?php echo $text['password']; ?>" required/>
                <button name="signup"><?php echo $text['sign-up']; ?></button>
            </form>
        </div>
    </div>

    
</div>


<script src="js/js.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.esm.js"></script>


</body>
</html>