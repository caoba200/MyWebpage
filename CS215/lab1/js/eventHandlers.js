window.addEventListener('load', () => {
    hideBoxes();
});

var email = document.getElementById('email');
email.addEventListener('focusout', () => {
   validateEmail();
});

var email = document.getElementById('username');
email.addEventListener('focusout', () => {
   validateUsername();
});

var email = document.getElementById('password');
email.addEventListener('focusout', () => {
   validatePassword();
});

var email = document.getElementById('passwordr');
email.addEventListener('focusout', () => {
   validatePasswordr();
});

document.getElementById('signup').addEventListener('submit', function (event){
    event.preventDefault();
    validateForm();
});
