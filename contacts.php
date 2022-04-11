<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Contacts</title>
<meta charset="utf-8">
<meta name="format-detection" content="telephone=no" />
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico" />
<link rel="stylesheet" href="css/contact-form.css">
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

<script src="js/modal.js"></script>
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
  ?>
</header>
<!--=====================
          Content
======================-->
<section id="content"><div class="ic"></div>
  <div class="container">
    <div class="row">
      <div class="grid_12">
        <h3>Обратная связь</h3>
        <div class="map">
          <figure class="">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2356.3261713487545!2d73.37689987479096!3d54.98631887698212!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43aafe1a80e84ef1%3A0x2addd6e022097507!2z0J7QvNGB0LrQuNC5INCw0LLRgtC-0YLRgNCw0L3RgdC_0L7RgNGC0L3Ri9C5INC60L7Qu9C70LXQtNC2!5e0!3m2!1sru!2sru!4v1649597120099!5m2!1sru!2sru" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" style="border:0"></iframe>
          </figure>
        </div>
      </div>
      <div class="grid_5">
        <h3 class="head__1">Адрес:</h3>
        <address class="text3">
        ул. Гагарина, 10,<br> Омск, Омская обл., 644024
        </address>
      </div>
      <div class="grid_4">
        <h3 class="head__1">Телефон:</h3>
        <div class="text3">
          48-00-66
        </div>
      </div>
      <div class="grid_3">
        <h3 class="head__1">E-mail:</h3>
        <div class="text3">
          <a href="#">office@oatk.org</a>
        </div>
      </div>
      <div class="grid_12">
        <h3 class="head__1">Информация:</h3>
        <div class="fwn">
          <p>Круглосуточная поддержка доступна для всех.</p>
          
          
        </div>
      
                  <div class="contact-form-loader"></div>
                  <fieldset>
                  <form id="contact-form" action="telegram.php" method="POST">
                    <label class="name">
                      <input type="text" name="user_name" placeholder="Имя:" value="" data-constraints="@Required @JustLetters"  />
                      <span class="empty-message">*Это поле обязательно к заполнению.</span>
                      <span class="error-message">*Это недопустимое имя.</span>
                    </label>
                   
                    <label class="email">
                      <input type="text" name="user_email" placeholder="E-mail:" value="" data-constraints="@Required @Email" />
                      <span class="empty-message">*Это поле обязательно к заполнению.</span>
                      <span class="error-message">*Это недействительный адрес электронной почты.</span>
                    </label>
                    <label class="phone">
                      <input type="text" name="user_phone" placeholder="Телефон:" value="" data-constraints="@Required @JustNumbers" />
                      <span class="empty-message">*Это поле обязательно к заполнению.</span>
                      <span class="error-message">*Это недействительный телефон.</span>
                    </label>
                   
                    <label class="message">
                      <textarea name="user_text" placeholder="Текст:" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
                      <span class="empty-message">*Это поле обязательно к заполнению.</span>
                      <span class="error-message">*Сообщение слишком короткое.</span>
                    </label>
                    <div class="clear"></div>
                    <div>
                      <input type="submit" value="Отправить" name="go">
                    </div>
          </form>
                  </fieldset> 
          
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
