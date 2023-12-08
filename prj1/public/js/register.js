function checkPassword(){
    password = document.getElementById("password");
    confirmPassword = document.getElementById("password-confirmation");
    console.log(password);
    if(password.value != confirmPassword.value){
        alert("As senhas não coincidem");
        confirmPassword.value = '';
    }
}