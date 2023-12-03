function validateForm() {
    var name = document.getElementById('name').value;
    var phone = document.getElementById('phone').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var confirmPassword = document.getElementById('confirmPassword').value;

    // Reset previous error messages
    resetErrorMessages();

    // Validate name (you can add more specific checks)
    if (name.trim() === '') {
        displayErrorMessage('name', "Name cannot be empty");
        return false;
    }

    // Validate phone (you can add more specific checks)
    if (phone.trim() === '') {
        displayErrorMessage('phone', "Phone cannot be empty");
        return false;
    }

    // Validate email (you can add more specific checks)
    if (email.trim() === '') {
        displayErrorMessage('email', "Email cannot be empty");
        return false;
    }

    // Validate password length
    if (password.length < 5) {
        displayErrorMessage('password', "Password must be at least 5 characters long");
        return false;
    }

    // Validate password and confirm password match
    if (password !== confirmPassword) {
        displayErrorMessage('confirmPassword', "Passwords do not match");
        return false;
    }

    return true;
}

function resetErrorMessages() {
    var errorElements = document.querySelectorAll('.error-message');
    errorElements.forEach(function (element) {
        element.textContent = '';
    });
}

function displayErrorMessage(fieldId, message) {
    var errorElement = document.getElementById(fieldId + '-error');
    errorElement.textContent = message;
}
