const home = document.querySelector(".home");
const signupBtn = document.querySelector("#signup");
const loginBtn = document.querySelector("#loginB");
const signUpForm = document.querySelector(".signup_form");
const loginForm = document.querySelector(".login_form");

document.addEventListener("DOMContentLoaded", function() {
  const formCloseBtn = document.querySelector(".form_close");
  
  formCloseBtn.addEventListener("click", function() {
    home.style.display = "none";
  });
});

document.addEventListener("DOMContentLoaded", function() {
  const formOpenBtn = document.querySelector("#form_open");

  formOpenBtn.addEventListener("click", function() {
    home.style.display = "block";
  });
});

document.addEventListener("DOMContentLoaded", function() {
  const formOpenBtn = document.querySelector("#form_open");

  formOpenBtn.addEventListener("click", function() {
    home.style.display = "block";
  });
});

document.addEventListener("DOMContentLoaded", function() {

  signupBtn.addEventListener("click", function(event) {
    event.preventDefault();
    signUpForm.style.display = "block";
    loginForm.style.display = "none";

  loginBtn.addEventListener("click", function(event) {
    event.preventDefault();
    loginForm.style.display = "block";
    signUpForm.style.display = "none";
    
  });
  });
});



