var firstField = document.querySelector('.form-auth_text_field'),
    secondField = document.querySelector('.form-auth_pass_field');

document.addEventListener("DOMContentLoaded", function() {
   firstField.style.backgroundImage = 'url(../images/lock.png)';
  });
        
secondField.addEventListener('paste', fun);
    function fun(e){
        e.preventDefault();
    }

let submitBtn = document.querySelector('.form-auth_submitbtn');

submitBtn.onclick = function() {
   
    if (!firstField.value || !secondField.value) {
        alert ("Введите новый пароль в первой строке и подтвердите его во второй строке");
        return false;
    }

    else if (firstField.value != secondField.value) {
        alert ("Введёные пароли не совпадают по строкам!");
        return false;
    }    
    
    else if (firstField.value.length < 6 || firstField.value.length >20) {
        alert ("Пароль должен быть не менее 6 и не более 20 символов!");
        return false;
    }

    else if (firstField.value = secondField.value) {
        return true;
    }
}