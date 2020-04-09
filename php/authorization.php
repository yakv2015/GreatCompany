  <style>
   #textField, #passField {
    width: 300px; /* Ширина поля */
    padding: 10px; /* Поля */
    box-shadow: inset 0 1px 5px rgba(0,0,0,0.2); /* Тень внутри */
    border: 1px solid #ccc; /* Параметры рамки */
    color: #ff6d37; /* Цвет текста */
    background: url(user.png) no-repeat 5px 50%; /* Картинка пользователя */
    padding-left: 30px; /* Расстояние от левого края */
   }
   #passField {
    background: url(lock.png) no-repeat 5px 50%; /* Картинка для поля с паролем */
   }
   label {
    width: 100px; /* Ширина */
    text-align: right; /* Выравниваем по правому краю */
    float: left; /* Выстраиваем элементы рядом */
    margin-right: 10px; /* Расстояние от текста до текстового поля */
    line-height: 30px; /* Выравниваем по высоте */
   }
   .submitField {
    margin-left: 110px; /* Сдвигаем вправо под поля */
   }
  </style>

  <form action="passhandler.php" method="post">
   <p><label for="textField">Логин:</label>
      <input maxlength="25" size="40" name="login" id="textField" autofocus="ON" placeholder="ВВЕДИТЕ ЛОГИН" autocomplete="off" required></p>
   <p><label for="passField">Пароль:</label>
      <input type="password" maxlength="25" size="40" name="password" id="passField" placeholder="ВВЕДИТЕ ПАРОЛЬ" autocomplete="off" required></p>
   <p><input type="submit" value="Войти" class="submitField"></p>
  </form>

