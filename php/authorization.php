<link href="../css/authorization.css" rel="stylesheet">

<form class="form-auth" action="passhandler.php" method="post">
   <label class="form-auth_text" for="form-auth_text_field">Логин:</label>
      <input class="form-auth_text_field" maxlength="25" size="40" name="login" autofocus="ON" 
      placeholder="ВВЕДИТЕ ЛОГИН" autocomplete="off" required>
   <label class="form-auth_pass" for="form-auth_pass_field">Пароль:</label>
      <input class="form-auth_pass_field" type="password" maxlength="25" size="40" 
      name="password" placeholder="ВВЕДИТЕ ПАРОЛЬ" autocomplete="off" required>
      <input class="form-auth_showpassbtn" type="button">
   <input class="form-auth_submitbtn" type="submit" value="Войти">
</form>

<script type="text/javascript" src="../js/showpass.js"></script>

