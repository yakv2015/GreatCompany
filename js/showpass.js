let showPass = document.getElementById('togglePassword');

showPass.onclick = function() {
    let password = document.getElementById('passField');
        if (password.type === 'password') {
            password.type = 'text';
        }
        else {
            password.type = 'password';
        }
}