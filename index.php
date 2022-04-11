<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
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
<header>
  <div class="container">
    <div class="row">
      <div class="grid_12 rel">
        <h1>
          <a href="index.php">
            <img src="images/logo.png" alt="Logo alt">
          </a>
        </h1>
      </div>
    </div>
  </div>
  <?php
  require_once 'components/header.php';
  ?>
  <section class="page1_header">
    <div class="container">
      <div class="row">
        <div class="grid_4">
          <a href="Posts.php" class="banner "><div class="maxheight">
            <div class="fa fa-globe"></div>Посты</div>
          </a>
          <a href="Contacts.php" class="banner "><div class="maxheight">
            <div class="fa fa-lightbulb-o"></div>Обратная связь</div>
          </a>
          <a href="#" class="banner "><div class="maxheight1">
            <div class="fa fa-cog"></div>Загрузка файлов</div>
          </a>
          <a href="#" class="banner "><div class="maxheight1">
            <div class="fa fa-briefcase"></div>Личный кабинет</div>
          </a>
        </div>
        <div class="grid_5">
          <h2>Корпоративный <br> Портал <br> ОАТК</h2>
          Ресурс для обмена и загрузки документов
        </div>
      </div>
    </div>
  </section>
</header>

<!--=====================
          Content
======================-->
<section id="content"><div class="ic">More Website Templates @ TemplateMonster.com - July 28, 2014!</div>
  <div class="container">
    <div class="row">
      <div class="grid_10 preffix_1 ta__center">
        <div class="greet">
          <h2 class="head__1">
            Добро пожаловать!
          </h2>
          <p>Это портал предназначен для того, чтобы обмениваться информацией, файлами, документами и тд. </p>
          Омский автотранспортный колледж сегодня – учреждение профессионального образования повышенного уровня с развитой материально-технической и производственной базой информационной и социальной инфраструктурой, современной системой социальной поддержки персонала и студентов.
        </div>
      </div>
    </div>
  </div>
  <article class="content_gray">
    <div class="container">
      <div class="row">
        <div class="grid_7">
          <h3>Наши преимущества</h3>
          <div class="block-2">
            <img src="images/page1_img1.jpg" alt="" class="img_inner fleft">
            <div class="extra_wrapper">
              <div class="text1"><a href="#">ddddddddddddddddddddddddd</a></div>
              <p>ddddddddddddddddddddddddddddddddddddddddddddddd</p>ddddddddddddddddddddddddddddddddddddddddddddd
              <br>
              <a href="#" class="link-1">Подробнее</a>
            </div>
          </div>
          <div class="block-2">
            <img src="images/page1_img2.jpg" alt="" class="img_inner fleft">
            <div class="extra_wrapper">
              <div class="text1"><a href="#">dddddddddddd</a></div>
              <p>ddddddddddddddddddddddddddddddddddddddddddddddd</p>ddddddddddddddddddddddddddddddddddddddddddddddd
              <br>
              <a href="#" class="link-1">Подробнее</a>
            </div>
          </div>
        </div>
        <div class="grid_4 preffix_1">
          <h3>ввввввввввввввввввввввввв</h3>
          <blockquote class="bq1">
            <p>“Curabitur vel lorem sit amet nulla erero fermentum. In vitae varius auguectetu ligula. Etiam dui eros, laoreet site am est vel commodo venenatisipiscing... ”</p>
            <span>Никита</span>
          </blockquote>
          <blockquote class="bq1">
            <p>“Burabitur vel lorem sit amet nulla erero fermentum. In vitae varius auguectetu ligula. Etiam dui eros, laoreet site am ast vel commodo venenatisipiscino... ”</p>
            <span>Вова</span>
          </blockquote>
        </div>
      </div>
    </div>
  </article>
  <div class="container">
    <div class="row">
      <div class="grid_5">
        <h4>Об Колледже</h4>
        <img src="images/page1_img3.jpg" alt="" class="img_inner fleft">
          <p>бюджетное профессиональное образовательное учреждение Омской области "Омский автотранспортный колледж"  </p>
          <p class="offset__1">Eligulaam dui eros dertolisce dertolo adipiscing quam id risus sagittis</p>
          Дата создания<br>
23 августа 1939 года, Постановление Совнаркома РСФСР № 440.
      </div>
      <div class="grid_4">
        <h4>DDDDDDDDDDD</h4>
        <ul class="list-1">
          <li><a href="#">DDDDDDDDDDDDDDDDDDDDDDDD </a></li>
          <li><a href="#">DDDDDDDDDDDDDDDDDDDDD</a></li>
          <li><a href="#">DDDDDDDDDDDDDDDDDDDDDD</a></li>
          <li><a href="#">DDDDDDDDDDDDDDDDDDDD </a></li>
          <li><a href="#">DDDDDDDDDDDDDDDDDDDDDDDD</a></li>
          <li><a href="#">DDDDDDDDDDDDDDDDDDDDDDDDDD</a></li>
        </ul>
      </div>
      <div class="grid_3">
        <h4>Контактная информация</h4>
        <address>
          <ul class="cont_address">
            <li>Адрес: 644024, Омская область, г. Омск, ул. Гагарина, 10</li>
            <li>+7 (3812) 20-07-02 (Приемная директора)</li>
            <li><a href="#">office@oatk.org</a></li>
            <li><a href="#">http://оатк.рф</a></li>
          </ul>
        </address>
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
