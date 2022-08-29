const usernameEl = document.querySelector('#user');
const passwordEl = document.querySelector('#pass');
const emailEl = document.querySelector('#email');
const confirmPasswordEl = document.querySelector('#retype');

const form=document.querySelector('#signup');


form.addEventListener('submit', function(e){
    e.preventDefault();

    let isUsernameValid = checkUsername(),
        isEmailValid = checkEmail(),
        isPasswordValid = checkPassword(),
        isConfirmPasswordValid = checkConfirmPassword();

    let isFormValid = isUsernameValid &&
        isEmailValid &&
        isPasswordValid &&
        isConfirmPasswordValid;

    if(isFormValid){
        document.getElementById('signup').submit();
    }
});

//Min-Max input
const isBetween = (length, min, max) => length < min || length > max false : true; 

//Email Regex
const isEmailValid = (email) => {
    const re = ("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
    return re.test(password);
}

//Password Regex
const isPasswordSecure = (password) => {
    const re = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
    return re.test(password);
};

const showError = (input, message) =>{

    const formField = input.parentElement;

    //Add error class to element
    formField.classList.remove('success');
    formField.classList.remove('error');

    //show error message in alert box WITHIN the div
    const error=formField.querySelector('alert');
    error.textContent = message;
}


const showSuccess = (input) => {

    const formField = input.parentElement;

    //Add success class to element
    formField.classList.remove('error');
    formField.classList.add('success');

    //clear alert box WITHIN the div
    const error = formField.querySelector('small');
    error.textContent = '';
}

//Form Field Validation --------

//username
const checkUsername = () => {

    let valid = false; 
    const min = 3,
        max = 25;
    const username = usernameEl.value.trim();

    if(!isBetween(username.length, min, max)){
        showError(usernameEl, 'Username must be between ${min} and ${max} characters.')
    } 
    else{
        showSuccess(usernameEl);
        valid = true;
    }
    return valid;
}

//email
const checkEmail = () => {

    let valid = false;
    const email = emailEl.value.trim();
    if(!isEmailValid(email)){
        showError(emailEl, "Email is not valid.")
    }
    else{
        showSuccess(emailEl);
        valid = true;
    }
    return valid;
}

//password
const checkPassword = () => {

    let valid = false; 
    const password = passwordEl.value.trim();

    if(!isPasswordSecure(password)){
        showError(passwordEl, 'Password must be meet the following criteria: <ul><li>5 characters long</li><li>at least 1 uppercase character</li><li>at least 1 lowecase character</li><li>at least 1 special character</li></ul>');
    }
    else{
        showSuccess(passwordEl);
        valid = true;
    }

    return valid;
}

//confirm password
const checkConfirmPassword = () => {
    
    let valid = false;
    const confirmPassword = confirmPasswordEl.value.trim();
    const password = passwordEl.value.trim();

    if(password !== confirmPassword){
        showError(confirmPasswordEl, "Password does not match");
    }
    else{
        showSuccess(confirmPasswordEl);
        valid = true;
    }

    return valid;
}