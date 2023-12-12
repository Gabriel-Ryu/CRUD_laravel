function checkPassword(){
    password = document.getElementById("password");
    confirmPassword = document.getElementById("password-confirmation");
    console.log(password);
    if(password.value != confirmPassword.value){
        alert("As senhas não coincidem");
        confirmPassword.value = '';
    }
}
function checkUsername(){
    const alert = document.getElementById("label-alert");
    const actualStyle = alert.style.display;
    usernameDB = document.getElementById("access_nameDB");
    username = document.getElementById("access_name");
    if(usernameDB.value == username.value){
        alert.style.display = 'block';
    }
    else{
        alert.style.display = 'none';
    }
}