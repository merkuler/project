

<?php
        if($_COOKIE['result']==''):
        ?>

<div class="autorization">

<h3>Регистрация</h3>

<form action="/account/check" method="post">
  <p>login</p>
  <p> <input type="text" name="login" id='login' value=""></p>
  <p>name</p>
  <p> <input type="text" name="name" id="name" value=""></p>
  <p>password</p>
  <p> <input type="text" name="pass" id='pass' value=""></p>

    <button type="submit" name="button"><b>Регистрация</b></button>
      <span>Есть аккаунта?</span><a href="/account/login">Войти</a>


</form>

</div>

<?php else: echo' <h3 style="padding-top:300px;">Вы авторизованы</h3>';

endif;?>





<!-- <?php echo $result; ?> -->

<!-- <?php  if ($_POST['login']) echo $_POST['login'] ; ?> -->
