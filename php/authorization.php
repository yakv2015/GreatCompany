<link href="../css/authorization.css" rel="stylesheet">

<form class="grid-container form-auth" action="passhandler.php" method="post">
   <label class="grid-container_item1 form-auth_text" for="form-auth_text_field">Логин:</label>

      <input class="grid-container_item2 form-auth_text_field" type="text" maxlength="25" name="login" placeholder="ВВЕДИТЕ ЛОГИН" autofocus="ON"  autocomplete="off" required>

   <label class="grid-container_item3 form-auth_pass" for="form-auth_pass_field">Пароль:</label>

      <input class="grid-container_item4 form-auth_pass_field" type="password" maxlength="20"  
      name="password" placeholder="ВВЕДИТЕ ПАРОЛЬ" autocomplete="off" required>
   
      <input class="grid-container_item5 form-auth_showpassbtn" type="button">
   
   <input class="grid-container_item6 form-auth_submitbtn" type="submit" name="enter" value="Войти">
</form>

<script type="text/javascript" src="../js/showpass.js"></script>  

