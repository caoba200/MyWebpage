function hideBoxes() {
    var boxes = document.getElementsByClassName('validation-box');
    for (var i = 0; i < boxes.length; i++) {
        boxes[i].style.display = 'none';
    }
}

function createAlertBox(target, type, content, deleted) {
    var alertBox = document.getElementById(target);
    alertBox.classList.remove(deleted);
    alertBox.classList.add(type);
    alertBox.style.display = 'block';
    alertBox.innerHTML = content;
}

function validateEmail() {
    var email_regex = /^\w+@[a-zA-Z_]+\.[a-zA-Z]{2,3}$/;

    var email = document.getElementById('email');

    // Display alert messages
    if (email.value == '' || email.value == null) {
        var content = '<i class="fas fa-times-circle"></i> Email should not be empty.';
        createAlertBox('email-v', 'alert-danger', content);

        return false;
    }
    else if (!email_regex.test(email.value)) {
        var content = '<i class="fas fa-times-circle"></i> Email is not in correct format.';
        createAlertBox('email-v', 'alert-danger', content);

        return false;
    }
    else {
        var content = '<i class="fas fa-check-circle"></i> Email passes validation.';
        createAlertBox('email-v', 'alert-success', content, 'alert-danger');

        return true;
    }

}

function validateUsername() {
    var username = document.getElementById('username');
    if (username.value == '' || username.value == null) {
        var content = '<i class="fas fa-times-circle"></i> Username should not be empty.';
        createAlertBox('username-v', 'alert-danger', content);

        return false;
    }
    else {
        var content = '<i class="fas fa-check-circle"></i> Username passes validation.';
        createAlertBox('username-v', 'alert-success', content, 'alert-danger');

        return true;
    }
}

function validatePassword() {
    var password = document.getElementById('password');
    if (password.value == '' || password.value == null) {
        var content = '<i class="fas fa-times-circle"></i> Password should not be empty.';
        createAlertBox('password-v', 'alert-danger', content);

        return false;
    }
    else {
        var content = '<i class="fas fa-check-circle"></i> Password passes validation.';
        createAlertBox('password-v', 'alert-success', content, 'alert-danger');

        return true;
    }
}

function validatePasswordr() {
    var password = document.getElementById('password');
    var passwordr = document.getElementById('passwordr');
    if (passwordr.value == '' || passwordr.value == null) {
        var content = '<i class="fas fa-times-circle"></i> Password should not be empty.';
        createAlertBox('passwordr-v', 'alert-danger', content);

        return false;
    }
    else if (password.value != passwordr.value) {
        var content = '<i class="fas fa-times-circle"></i> Repeat password must match';
        createAlertBox('passwordr-v', 'alert-danger', content);

        return false;
    }
    else {
        var content = '<i class="fas fa-check-circle"></i> Password passes validation.';
        createAlertBox('passwordr-v', 'alert-success', content, 'alert-danger');

        return true;
    }
}


function validateForm() {
    if (validateEmail() && validateUsername() && validatePassword() && validatePasswordr()) {
        var email = document.getElementById('email').value;
        var uname = document.getElementById('username').value;
        var content = "Email: " + email + "<br>" + "Username: " + uname;
        var infoBox = document.getElementById('info-box');
        infoBox.classList.add('alert');
        infoBox.classList.add('alert-success');
        infoBox.innerHTML = content;
    }
    else {
        alert("Form is not valid");
    }
}
