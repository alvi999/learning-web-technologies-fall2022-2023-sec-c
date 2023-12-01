function validateForm() {
    var name = document.getElementById('name').value;
    var contact = document.getElementById('contact').value;
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    var inputs = [name, contact, username, password];

    if (!validateNullInput(inputs)) {
        return false;
    }

    if (password.length < 5) {
        alert("Password must be at least 5 characters long.");
        return false;
    }

    if (!isUsernameUnique(username)) {
        alert("Username is not unique. Please choose another username.");
        return false;
    }

    return true;
}

function validateNullInput(inputs) {
    for (let i = 0; i < inputs.length; i++) {
        if (!inputs[i]) {
            alert("Please fill in all fields.");
            return false;
        }
    }
    return true;
}

function isUsernameUnique(username) {
    // Example: Check if the username is unique by comparing it with existing usernames
    // Note: This is a simplistic client-side check; server-side validation is also necessary
    var existingUsernames = ["existingUsername1", "existingUsername2", "existingUsername3"];
    
    return !existingUsernames.includes(username);
}
