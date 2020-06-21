<link href="../css/authorization.css" rel="stylesheet">

<form class="form-auth" action="passhandler.php" method="post">
   <!-- <label class="grid-item1 form-auth_text" for="form-auth_text_field">Логин:</label> -->

      <input class="form-auth_textfield" type="text" maxlength="25" name="login" placeholder="ВВЕДИТЕ ЛОГИН" autofocus="ON"  autocomplete="off" required>

   <!-- <label class="grid-item3 form-auth_pass" for="form-auth_pass_field">Пароль:</label> -->

      <input class="form-auth_passfield" type="password" maxlength="20"  
      name="password" placeholder="ВВЕДИТЕ ПАРОЛЬ" autocomplete="off" required>
   
      <input class="form-auth_showpassbtn" type="button">
   
   <input class="form-auth_submitbtn" type="submit" name="enter" value="Войти">
</form>

<script type="text/javascript" src="../js/showpass.js"></script>  

