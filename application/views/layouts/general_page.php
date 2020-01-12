<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <script src="/public/scripts/jquery.js"></script>
    <script src="/public/scripts/form.js"></script>
    <link rel="stylesheet" href="/public/css/style_general.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>  
<body>

 
<div class="header">
  <div class="container">
          <div class="header__inner">
          
              <a href="/" class="header__logo">Хостос</a>
              <nav class="nav__header">
                  <a class="nav__link" href="">Хостинг</a>
                  <a class="nav__link" href="">VPS</a>
                  <a class="nav__link" href="">Домен</a>
                  <a class="nav__link" href="">Цены</a>
                  <a class="nav__link" href="/contacts">Контакты</a>
                  <a class="nav__link" href="/account/login">Войти</a>
              </nav>
          </div>
      
  </div>
</div>

<div class="background__header">
    <div class="container">
      <h1 class="intro__title">Лучший Хостинг</h1>
      <h3 class="intro__title_h3">Веб-хостинг,VPS,Домены и многое другое!</h3>
  
      <a class="btn" href="#anchor" onclick="slowScroll('#anchor')">Узнать больше</a>
    
    </div>
</div>


  

  <?php echo $content; ?>





  <script type="text/javascript">
      function slowScroll(id) {
         var offset = 0;
         $('html, body').animate({
            scrollTop: $(id).offset().top - offset
         }, 555);
         return false;
      }
   </script>

</body>
</html>
