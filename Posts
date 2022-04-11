<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Blog</title>
<meta charset="utf-8">
<meta name="format-detection" content="telephone=no" />
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico" />
<link rel="stylesheet" href="css/style.css">
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/script.js"></script> 
<script src="js/superfish.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.mobilemenu.js"></script>
<script src="js/tmStickUp.js"></script>
<script src="js/jquery.ui.totop.js"></script>
<script>
 $(window).load(function(){
  $().UItoTop({ easingType: 'easeOutQuart' });
  $('#stuck_container').tmStickUp({});  
 }); 
</script>

</head>
<body>
<!--==============================
              header
=================================-->
<header>
  <div class="container">
    <div class="row">
      <div class="grid_12 rel">
        <h1>
          <a href="index.html">
            <img src="images/logo.png" alt="Logo alt">
          </a>
        </h1>
      </div>
    </div>
  </div>
  <?php
  require_once 'components/header.php';
  require_once 'vendor/connectDB.php';
  $getposts = mysqli_query($link,"SELECT * FROM `posts` ORDER BY `id` DESC ");
  ?>
</header>
<!--=====================
          Content
======================-->

<section id="content"><div class="ic">More Website Templates @ TemplateMonster.com - July 28, 2014!</div>
  <div class="container">
    <div class="row">
      <div class="grid_12">
        <h3>Последние посты</h3>
        <?php
    while ($post = mysqli_fetch_assoc($getposts)){
    ?>
        <div class="blog">
          <time datetime="2014-01-01"><strong><?php echo $post['date'];?></strong></time>
          <img src="images/page4_img1.jpg" alt="" class="img_inner fleft">
          <div class="extra_wrapper">
            <a href="#" class="comment"><span class="fa fa-comments"></span> 3</a>
            <p><span class="fwn"><a href="#">Livamus at magna non nunc tristique rhoncus. Aliquam nibh ante, egestas id dictum.</a></span><em>Posted by <a href="#"><?php echo $post['id_users'];?></a></em></p><?php echo $post['description'];?> <br>
           
            <br>
            <a href="#" class="link-1">more</a>
          </div>
        </div>
        <?php } ?>
       
        </div>
      </div>
    </div>
  </div>
</section>
<!--==============================
              footer
=================================-->
<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="grid_12"> 
        <div class="copyright"><span class="brand">ОАТК</span> &copy; <span id="copyright-year"></span> | <a href="#">Все права защищены</a>
          
        </div>
      </div>
    </div>
  </div>  
</footer>
<a href="#" id="toTop" class="fa fa-chevron-up"></a>
</body>
</html>
