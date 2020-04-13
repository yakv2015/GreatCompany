
let showPass = document.querySelector('.form-auth_showpassbtn');
showPass.onclick = function() {
    let password = document.querySelector('.form-auth_pass_field');
        if (password.type === 'password') {
            showPass.style.backgroundImage = 'url(../images/eyeclose.png)';
            password.type = 'text';
            
        }
        else {
            showPass.style.backgroundImage = 'url(../images/eyeopen.png)';
            password.type = 'password';
            
        }
}
