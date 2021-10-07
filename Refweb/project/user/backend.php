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

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="icon" href="../imgs/lg.png">
    <title><?php echo $sitename; ?> | BackEnd</title>
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
        <a href="index.php">
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
        <a href="backend.php" class="active">
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
       <a href="user.php">
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

    <main>
    
      <div class="cards">

          <div id="texte" class="part-illustration">
        <h1><?php echo $text['welcome'] ." ". $user->fullname ;?></h1></br>
        <?php echo $text['wlecomemsg'];?>
          
          </div>

          <div class="part-illustration">
          <img src="<?php echo ''.$siteurl.'imgs/illustration-1.png';?>">
          </div>

      </div>


      <div class="search-resources">
        <h1> explore top resources </h1>
        <div class="search-wrapper">
        <i class="fas fa-search"></i>
        <input type="search" id="mySearch" onkeyup="myFunction()" placeholder="Search..." />
        </div>    
      </div>     




      <!--Tabla-->
      <div class="recent-grid">
          <div class="projects">
              <div class="card">
                  <div id="card-header">
                  <button class="btn active" onclick="filterSelection('all')"><i class="fas fa-layer-group"></i> All</button>
                            <button class="btn" onclick="filterSelection('php')"><i class='fab fa-php' ></i> php</button>
                            <button class="btn" onclick="filterSelection('js')"><i class='fab fa-node-js'></i> js</button>
                            <button class="btn" onclick="filterSelection('python')"><i class='fab fa-python'></i> python</button>
                            <button class="btn" onclick="filterSelection('ruby')"><i class='far fa-gem'></i> ruby</button>
                            <button class="btn" onclick="filterSelection('data-base')"><i class='fas fa-database'></i>Data base</button>
                  </div>

                  <div class="card-body">
                      <div class="table-responsive">
                       <ul id="myUL">
                      <?php
                      $resourcesx = $database->prepare("SELECT * FROM resources");
                      $resourcesx->execute();
                      $resources = $resourcesx->fetchALL();
                      
                      foreach ($resources as $resource){
                        if($_SESSION['lang'] == "eng"){
                          $resourcedesc = $resource["desceng"];
                         }elseif($_SESSION['lang'] == "ar"){
                          $resourcedesc = $resource["descar"];
                         }elseif($_SESSION['lang'] == "fr"){
                          $resourcedesc = $resource["descfr"];
                         }
                      if($resource["sect"] == "backend"){   
                      echo'   
                      <li class="filterDiv '.$resource["Categ"].'">
                          <div id="resources" class="img-resources">
                             <img src="'.$siteurl.'imgs/'.$resource["img"].'">
                            
                             <div  class ="resources-info">
                           <a href="'.$resource["link"].'" target="_blank">'.$resource["name"].'</a>

                           <p>'.$resourcedesc.'</p>
                           </div>
                            
                             
                         </div>
                         <div  id="resources" class="icons-resources">
                              <button id="myBtn" >'.$text['exmp'].'</button>
                              <!-- The Modal -->
                               <div id="myModal" class="modal">

                                  <!-- Modal content -->
                                    <div class="modal-content animate">
                                       <span class="close">&times;</span>
                                         <div class="container">
                                          <div class="main-video">
                                              <div class="video">
                                                 <video src="'.$siteurl.'vids/'.$resource["vid"].'" controls muted autoplay></video>
                                              </div>
                                          </div>
                                        

                                         </div>

                                     </div>
                          
                              </div>
                          
                    </li>
                    ';}}?>


                      
                           
                      </div>
                  </div>

              </div>
          </div>






          <div class="customers">

              <div class="card">
                  <div id="card-header2">
                      <h3><?php echo $text['becc']; ?></h3>

                      <button><?php echo $text['vall']; ?><span class="las la-arrow-right">
                      </span></button>
                  </div>

                  <div class="card-body">
<?php 
$content_creatorsx = $database->prepare("SELECT * FROM content_creators");
$content_creatorsx->execute();
$content_creators = $content_creatorsx->fetchALL();
foreach ($content_creators as $content_creator){
if($content_creator["sect"] == "backend"){
echo'
                    <div class="customer">
                        <div class="info">
                              <img src="'.$siteurl.'imgs/'.$content_creator["img"].'" width="40px" height="40px" alt="">
                            <div>
                                <h4>'.$content_creator["name"].'</h4>
                                <small>'.$content_creator["skills"].'</small>
                            </div>
                        </div>
                        <div class="contact">  
                        <a href="'.$content_creator["yt"].'" class="fab fa-youtube"></a>
                        <a href="'.$content_creator["mail"].'" class="fas fa-envelope"></a>
                    </div></div>
';}}?>

                    
                  </div>
              </div>
          </div>
          
      </div>
  </main>
  </section>

<script>

</script>
<?php echo'<script src="'.$siteurl.'js/user.js"></script>'; ?>

</body>
</html>
