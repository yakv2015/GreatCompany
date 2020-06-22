<?php
session_start();
require_once($_SERVER['DOCUMENT_ROOT']."/php/dbconnect.php");


// echo "Hello";
// print_r($_COOKIE);
// $a = session_id();
// print_r($a);


?>

<style>
    .body {
  
    }
    .form-setuser {
        display: grid;
        grid-template-areas:    "label-1    form-setuser_name"
                                "label-2    form-setuser_division"
                                "label-3    form-setuser_position"
                                "label-4    form-setuser_login"
                                "label-5    form-setuser_firstpassword"
                                ".          form-setuser_submitbtn";
        grid-template-columns: 180px auto;
        grid-template-rows: repeat(6, 30px);
        grid-row-gap: 25px;
        padding: 50px 5px;
        background-color: #cacaca;

    }

    .label-1 {
        grid-area: label-1; 
    }

    .form-setuser_name {
        grid-area: form-setuser_name;
    }

    .label-2 {
        grid-area: label-2; 
    }

    .form-setuser_division {
        grid-area: form-setuser_division;
    }

    .label-3 {
        grid-area: label-3; 
    }

    .form-setuser_position {
        grid-area: form-setuser_position;
    }

    .label-4 {
        grid-area: label-4; 
    }

    .form-setuser_login {
        grid-area: form-setuser_login;
    }

    .label-5 {
        grid-area: label-5; 
    }

    .form-setuser_firstpassword {
        grid-area: form-setuser_firstpassword;
    }

    .form-setuser_submitbtn {
        grid-area: form-setuser_submitbtn;
        background-color: #949494;
        height: 50px;
    }



</style>

<!DOCTYPE html>
<html lang="ru">
<body>

<form class="form-setuser" action="" method="post">
    <label class="label-1" for="form-setuser_name">Имя нового пользователя</label>
    <input class="form-setuser_name baseform" type="text" maxlength="75" name="username" placeholder="ВВЕДИТЕ ФИО ПОЛНОСТЬЮ" autofocus="ON"  autocomplete="off" required>
    <br>
    <label class="label-2" for="form-setuser_division">Подразделение</label>
    <input list="division" class="form-setuser_division baseform" type="text" name="userdivision" placeholder="ВВЕДИТЕ ПОДРАЗДЕЛЕНИЕ" autofocus="ON" autocomplete="off" required>
        <datalist id="division">
            <option value="Дирекция"> 
            <option value="Участок"> 
            <option value="Отдел"> 
        </datalist>
    <br>
    <label class="label-3" for="form-setuser_position">Должность</label>
        <input list="position" class="form-setuser_position baseform" type="text" maxlength="" name="userposition" placeholder="ВВЕДИТЕ ДОЛЖНОСТЬ" autofocus="ON" autocomplete="off" required>
            <datalist id="position">
                <option value="Начальник"> 
                <option value="Инженер"> 
                <option value="Менеджер"> 
            </datalist>
    <br>
    <label class="label-4" for="form-setuser_login">Логин</label>
    <input class="form-setuser_login baseform" type="text" maxlength="25" name="userlogin" placeholder="ВВЕДИТЕ ЛОГИН" autofocus="ON"  autocomplete="off" required>
    <br>
    <label class="label-5" for="form-setuser_firstpassword">Первичный пароль</label>
    <input class="form-setuser_firstpassword baseform" type="password" maxlength="20" name="userpassword" placeholder="ВВЕДИТЕ ПАРОЛЬ" autocomplete="off" required>
    <br>   

   <input class="form-setuser_submitbtn" type="submit" name="enter"  onclick="writeValues()" value="Внести данные в базу">
</form>
</body>
</html>

<script>
    function writeValues() {
    
        var userValues = document.querySelectorAll('.baseform');
        var mas = [];

        // userValues.forEach(function(userValues){
        //     mas.push(userValues.value)
        // });

        // console.log(mas);

        function save() {
            for (var i = 0; i < userValues.length; i++) {
            mas.push(userValues[i].value);
            
            }
        
        }
        save(); 
        console.log(mas);
    }

    
</script>