<?php
        if($_COOKIE["result"]==''):
        ?>
<div class="autorization">

     <h3>Вход</h3>
<form  action="/account/autorization" method = "post">

      <p>login</p>
      <p> <input type="text" name="login" id="login"></p>
      <p>пароль</p>
      <p> <input type="text" name="pass" id="pass"></p>

        <button type="submit" name="button"><b>Вход</b></button>

        <span>Нету аккаунта?</span><a href="/account/register">Зарегистрироваться</a>
</form>

</div>

        <?php else: echo' <h3 style="padding-top:300px;">Вы авторизованы</h3>';

endif;?>
