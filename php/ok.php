<?php
session_start();
 
// if($_GET['do'] == 'logout'){
//  unset($_SESSION['admin']);
//  session_destroy();
// }
 
// if(!$_SESSION['admin']){
//  header("Location: enter.php");
//  exit;
// }n82d3s9q78sjl1lpcqqsgh2peua0l60j 

echo "Hello";
print_r($_COOKIE);
$a = session_id();
print_r($a);

?>

<link href="../css/authorization.css" rel="stylesheet">

<form class="grid-container form-auth" action="passsetter.php" method="post">

   <label class="grid-container_item1 form-auth_text" for="form-auth_text_field"></label>
      <input class="grid-container_item2 form-auth_text_field" minlength="6" maxlength="20" name="password1" autofocus="ON" placeholder="ВВЕДИТЕ НОВЫЙ ПАРОЛЬ ОТ 6 ДО 20 СИМВОЛОВ" autocomplete="off" required>
   <label class="grid-container_item3 form-auth_pass" for="form-auth_pass_field"></label>
      <input class="grid-container_item4 form-auth_pass_field" type="password" maxlength="20" name="password2" placeholder="ПОДТВЕРДИТЕ ПАРОЛЬ" autocomplete="off" required>
      <input class="grid-container_item5 form-auth_showpassbtn" type="button">
   <input class="grid-container_item6 form-auth_submitbtn" type="submit" value="Отправить">
</form>

<script type="text/javascript" src="../js/showpass.js"></script>
<script type="text/javascript" src="../js/comparepassfield.js"></script>