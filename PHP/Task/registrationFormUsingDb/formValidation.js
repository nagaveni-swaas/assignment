const form = document.getElementById('form');
const username = document.getElementById('username');
const email = document.getElementById('email');
const password = document.getElementById('password');
const password2 = document.getElementById('password2');
//event listener
form.addEventListener('register',e=>{
    e.preventDefault();
    Validate();
});
function Validate(){
    const usernameValue=username.value.trim();
    const emailValue=email.value.trim();
    const passwordValue=password.value.trim();
    const password2Value=password2.value.trim();
    if(usernameValue==''){
        setErrorMessage(username,'username cannot be empty');
    }
    else{
        setSuccessMessage(username);
    }
}