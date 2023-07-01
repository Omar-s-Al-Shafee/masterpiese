function validateForm() {
    const emailInput = document.getElementById('email');
    const passwordInput = document.getElementById('password');

    const emailError = document.getElementById('email-error');
    const passwordError = document.getElementById('password-error');

    let isValid = true;

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
    } else if (!validatePassword(passwordInput.value.trim())){
      passwordError.textContent = 'Password must contain at least 8 characters, including at least one letter and one digit.';
      isValid = false;

    } else {
        passwordError.textContent = '';
    }

    return isValid;
}

function validateEmail(email) {
    // Email validation regular expression
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailPattern.test(email);
}
function validatePassword(password){
const passwordPattern = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
return passwordPattern.test(password);
}