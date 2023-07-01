function validateForm() {
  event.preventDefault();
 const fullNameInput = document.getElementById('full-name');
 const emailInput = document.getElementById('email');
 const passwordInput = document.getElementById('password');
 const confirmPasswordInput = document.getElementById('confirm-password');

 const fullNameError = document.getElementById('full-name-error');
 const emailError = document.getElementById('email-error');
 const passwordError = document.getElementById('password-error');
 const confirmPasswordError = document.getElementById('confirm-password-error');

 let isValid = true;

 if (fullNameInput.value.trim() === '') {
   fullNameError.textContent = 'Please enter your full name.';
   isValid = false;
 } else {
   fullNameError.textContent = '';
 }

 if (emailInput.value.trim() === '') {
   emailError.textContent = 'Please enter your email.';
   isValid = false;
 } else if (!validateEmail(emailInput.value.trim())) {
   emailError.textContent = 'Please enter a valid email address.';
   isValid = false;
 } else {
   emailError.textContent = '';
 }

 if (passwordInput.value.trim() === '') {
   passwordError.textContent = 'Please enter your password.';
   isValid = false;
 } else if (!validatePassword(passwordInput.value.trim())) {
   passwordError.textContent = 'Password must contain at least 8 characters, including at least one letter and one digit.';
   isValid = false;
 } else {
   passwordError.textContent = '';
 }

 if (confirmPasswordInput.value.trim() === '') {
   confirmPasswordError.textContent = 'Please confirm your password.';
   isValid = false;
 } else if (passwordInput.value !== confirmPasswordInput.value) {
   confirmPasswordError.textContent = 'Passwords do not match.';
   isValid = false;
 } else {
   confirmPasswordError.textContent = '';
 }

 return isValid;
}

function validateEmail(email) {
 // Email validation regular expression
 const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
 return emailPattern.test(email);
}

function validatePassword(password) {
 const passwordPattern = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
 return passwordPattern.test(password);
}



$(document).ready(function() {
 $(".toggle-password").click(function() {
   $(this).toggleClass("fa-eye fa-eye-slash");
   var input = $($(this).attr("toggle"));
   if (input.attr("type") == "password") {
     input.attr("type", "text");
   } else {
     input.attr("type", "password");
   }
 });
});