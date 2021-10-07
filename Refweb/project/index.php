<?php
include('db.php');




?>




<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    <?php if($_SESSION['mode'] == "dark"){echo '<link rel="stylesheet" href="'.$siteurl.'css/darkmode.css">';} ?>
    <?php if($_SESSION['lang'] == "ar"){echo '<link rel="stylesheet" href="'.$siteurl.'css/rtl.css">';} ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="icon" href="imgs/lg.png">
    <title><?php echo $sitename; ?> | Home</title>






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

 <section class="home" id="home">

    <div class="content">
        <h3><?php echo $text['sitemotto']; ?><span class="mark">!</span></h3>
        <p><?php echo $text['sitedesc']; ?></p>
        <a href="account.php" class="btn" id="more-main"><?php echo $text['start-now']; ?></a>
        <a href="#section1" class="btn" id="start-main"><?php echo $text['more']; ?></a>
    </div>

    <div class="image">
        <img src="imgs/Design team-amico.svg" alt="">
    </div>

</section>
    <!--  Dhaio section  -->


    <section id="section1">
        <div class="about-website">
           <h2><?php echo $text['about-website-h2']; ?></h2>
             <p><?php echo $text['about-website-p']; ?></p>
            <div id="slide">

                <article class="intro">

                    <div>
                      
                        <img src="imgs/icon-1.png" class="illustration">
                    </div>

                    <div class="texte" style="box-sizing: border-box;">
                        <h1><?php echo $text['intro1-h1']; ?></h1>
                        <p><small><?php echo $text['intro1-p']; ?></small></p>
                        
                    </div>

                </article>



                <article class="intro">

                    <div> 
                       

                        <img src="imgs/icon-2.png" class="illustration">
                    </div>

                    <div class="texte">
                        <h1><?php echo $text['intro2-h1']; ?></h1>
                        <p><small><?php echo $text['intro2-p']; ?></small></p>
                    </div>

                </article>




                <article class="intro">

                    <div>
                        <img src="imgs/icon-3.png" class="illustration">
                    </div>

                    <div class="texte">
                        <h1><?php echo $text['intro3-h1']; ?></h1>
                       <p><small><?php echo $text['intro3-p']; ?></small></p>
                        
                    </div>

                </article>
            </div>
        </div>
        <a href="about.php" class="botton1"><?php echo $text['more']; ?><i class="fa fa-long-arrow-right" ></i></a>
</section>

<!----------- SECTION 3  --------->
<section id="section3">
      <div class="tytlesection"><b><?php echo $text['our-courses']; ?></b>
      <div class="para"> <p><?php echo $text['our-courses-p']; ?></p></div>
      </div>
     <div class="cards">
      <div class="card">
        <article>
          <h2><b><?php echo $text['card1-h2']; ?></b></h2>
          <div class="tytle"><?php echo $text['card1-tytle']; ?></div>
            <div class="pic"><img src="imgs/frontend.svg"> </div>
                  <div class="info">
                            <p><b><?php echo $text['card1-info-p']; ?></b></p>
                            <i class="fas fa-check"></i><?php echo $text['card1-info-i1']; ?> 
                               <br>
                               <br>
                            <i class="fas fa-check"></i><?php echo $text['card1-info-i2']; ?>
                                <br>
                                <br>
                            <i class="fas fa-check"></i><?php echo $text['card1-info-i3']; ?>  
                                   <div class="iconsCard">
                                       <a href="#" class="link"><i class="fab fa-html5"></i></a>
                                       <a href="#" class="link"><i class="fab fa-css3-alt"></i></a>
                                       <a href="#" class="link"><i class="fab fa-js"></i></a> 
                                   </div>
                  </div>
                     
        </article>
      </div>  
      <div class="card">
        <article>
          <h2><b><?php echo $text['card2-h2']; ?></b></h2>
          <div class="tytle"><?php echo $text['card2-tytle']; ?></div>
            <div class="pic"><img src="imgs/backend.svg">
            </div>
            <div class="info">
                            <p><b><?php echo $text['card2-info-p']; ?></b></p>
                            <i class="fas fa-check"></i><?php echo $text['card2-info-i1']; ?> 
                                <br>
                                <br>
                            <i class="fas fa-check"></i><?php echo $text['card2-info-i2']; ?> 
                                <br>
                                <br>
                            <i class="fas fa-check"></i><?php echo $text['card2-info-i3']; ?>
                                <br>
                                <br>
                                <br>
                                   <div class="iconsCard">
                                       <a href="#" class="link"><i class="fab fa-php"></i></a>
                                       <img src="https://img.icons8.com/color/100/fa314a/mysql-logo.png"/>
                                   </div>
                  </div>
                     
        </article>
   </div>      
      <div class="card">
        <article>
          <h2><b><?php echo $text['card3-h2']; ?></b> </h2>
          <div class="tytle"><?php echo $text['card3-tytle']; ?></div>
            <div class="pic"><img src="imgs/design1.svg">
            </div>
            <div class="info">
                            <p><b><?php echo $text['card3-info-p']; ?></b></p>
                            <i class="fas fa-check"></i><?php echo $text['card3-info-i1']; ?>
                               <br>
                               <br>
                           <i class="fas fa-check"></i><?php echo $text['card3-info-i2']; ?>
                                <br>
                                <br>
                           
                           <i class="fas fa-check"></i><?php echo $text['card3-info-i3']; ?>
                           <br>

                                   <div class="iconsCard">
                                     <img src="https://img.icons8.com/fluency/57/000000/adobe-photoshop.png"/>
                                     <img src="https://img.icons8.com/fluency/48/4a90e2/adobe-illustrator.png"/>
                                     <img src="https://img.icons8.com/cute-clipart/64/4a90e2/canva-app.png"/>
                                   </div>
            </div>
                            
        </article>
        
      </div>      
      
     </div>
     
     </section>


<!-----------Opinions Start------------>
<div class="container-4" id="container-4">
			<div class="row-4" style="
    background-color: #ffffff;
">
				
				<div class="col-md-8 col-center m-auto">
					<center><h2><?php echo $text['users-op']; ?></h2></center>
					<p class="interdaction"><?php echo $text['users-op-desc']; ?></p>

					<div id="myCarousel" class="carousel slide" data-ride="carousel">
					
						<div class="carousel-inner">

            <?php 
          
          $opinionsx = $database->prepare("SELECT * FROM opinions");
          $opinionsx->execute();
          $opinions = $opinionsx->fetchALL();
          $numop = 0;
        
            foreach ($opinions as $opinion){
            $opwiterid = $opinion["writerid"];
            $opwriter = $database->prepare("SELECT * FROM users Where id=$opwiterid ");
            $opwriter->execute();
            $writer = $opwriter->fetchObject();
              if($numop == 0){
            echo '
							<div class="item carousel-item active">
								<div class="img-box"><img src="'.$siteurl.'imgs/'.$writer->img.'"  alt=""></div>

								<p class="testimonial">'.$opinion["opmsg"].'</p>
								<p class="overview"><b>'.$writer->fullname.'
									<div class="listing-rating">
                  ';
                 for($i = 1 ; $i <= $opinion["rating"] ; $i++){
                  echo'<i class="fa fa-star"></i>';
                }
                for($i = $opinion["rating"] ; $i < 5 ; $i++){
                  echo'<i class="fa fa-star" style = "color: #0c387c;"></i>';
                }
              echo'
									</div></b><p class="role">'.$text['role'].': '.$writer->role.'</p>
								</div>
                ';}else {
                  echo '
							<div class="item carousel-item">
								<div class="img-box"><img src="'.$siteurl.'imgs/'.$writer->img.'"  alt=""></div>

								<p class="testimonial">'.$opinion["opmsg"].'</p>
								<p class="overview"><b>'.$writer->fullname.'
									<div class="listing-rating">
                  ';
                 for($i = 1 ; $i <= $opinion["rating"] ; $i++){
                  echo'<i class="fa fa-star"></i>';
                }
                for($i = $opinion["rating"] ; $i < 5 ; $i++){
                  echo'<i class="fa fa-star" style = "color: #0c387c;"></i>';
                }
              echo'
									</div></b><p class="role">'.$text['role'].': '.$writer->role.'</p>
								</div>
                ';
                }
                
                $numop++;
                }?>

								
											</div>
											<!-- Carousel Controls -->
											<a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
												<i class="fa fa-angle-left"></i>
											</a>
											<a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
												<i class="fa fa-angle-right"></i>
											</a>

										</div>
									</div>
								</div>
		</div>
				</div>


						
							</div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script>
const btn = document.querySelector("button");
      const post = document.querySelector(".post");
      const widget = document.querySelector(".star-widget");
      const editBtn = document.querySelector(".edit");
      btn.onclick = ()=>{
        widget.style.display = "none";
        post.style.display = "block";
        editBtn.onclick = ()=>{
          widget.style.display = "block";
          post.style.display = "none";
        }
        return false;
      }
</script>




<!--------------------Footer Start---------------------------------------------->
  <div class="custom-shape-divider-top-1630875376">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
    </svg>
	</div>
  <footer class="last-part">
 	
   <div class="row">
   	        <div class="col">
   	        	 <h3><?php echo $text['footer1-h3']; ?><div class="underline"><span></span></div>  </h3>
   	        	 <p><?php echo $text['footer1-p']; ?></p>
   	        </div>

   	        <div class="col">
   	        	<h3><?php echo $text['footer2-h3']; ?><div class="underline"><span></span></div>  </h3>
                <p><?php echo $text['footer2-p1']; ?></p> 
                <p><?php echo $text['footer2-p2']; ?></p>
                <p><?php echo $text['footer2-p3']; ?></p>
                <p class="email-id"><?php echo $text['footer2-p4']; ?></p>
                 <h2><?php echo $text['footer2-h2']; ?></h2>
   	        </div>
   	        <div class="col" id="col" >
   	        	  <h3><?php echo $text['links']; ?><div class="underline"><span></span></div></h3>
   	        	    <ul>
   	        	    	  <li><a href="index.php"><i class="fa fa-envelope" ></i><?php echo $text['home']; ?></a></li>
   	        	    	  <li><a href="#opinionscontiner"><i class="fa fa-check-square"></i><?php echo $text['opinions']; ?></a></li>
   	        	    	  <li><a href="about.php"><i class="fa fa-vcard"></i><?php echo $text['about']; ?></a></li>
   	        	    </ul>
   	        	    
   	        </div>
             
    </div>

    <div class="social-contact">
                	 <a href="#" >
                	 	 <i class="fab fa-facebook-f"></i>
                	 </a>
                	  <a href="#" >
                	 	 <i class="fab fa-twitter"></i>
                	 </a>
                	  <a href="#">
                	 	 <i class="fab fa-google"></i>
                	 </a>
                	  <a href="#" >
                	 	 <i class="fab fa-youtube"></i>
                	 </a>
                </div>
     <hr>
     <p class="copyright">made with <i class="fa fa-heart-o" style="font-size:15px"></i>  -All rights Reserved 2021</p>
 </footer>
  <!--------------------Footer End----------------->


  
  <script src="js/js.js"></script>
    <script src="https://use.fontawesome.com/eb2108af7a.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.esm.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>