function signupValidation() {
    var name = document.signup.name.value;
    var email = document.signup.email.value;
    var phone = document.signup.phone.value;
    var password = document.signup.password.value;
    var gender = document.signup.gender.value;

    if (nameValid(name)) {
        document.getElementById("name").style.border = "";
        if (passwordValid(email)) {
            document.getElementById("name").style.border = "";
            if (passwordValid(phone)) {
                document.getElementById("name").style.border = "";
                if (passwordValid(password)) {
                    document.getElementById("name").style.border = "";
                    return true;
                }
            }
        }
    }

    if (!nameValid(name)) {
        document.getElementById("name").style.border = "1px solid red";
    } else {
        document.getElementById("name").style.border = "";
    }

    if (!nameValid(email)) {
        document.getElementById("email").style.border = "1px solid red";
    } else {
        document.getElementById("email").style.border = "";
    }

    if (!nameValid(phone)) {
        document.getElementById("phone").style.border = "1px solid red";
    } else {
        document.getElementById("phone").style.border = "";
    }

    if (!nameValid(password)) {
        document.getElementById("password").style.border = "1px solid red";
    } else {
        document.getElementById("password").style.border = "";
    }

    return false;
}


function nameValid(name) {
    var letters = /^[A-Za-z]+$/;
    if (name.match(letters)) {
        return true;
    } else {
        document.getElementById("name").style.border = "1px solid red";
        return false;
    }
}

function emailValid(email) {
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (email.match(mailformat)) {
        return true;
    } else {
        document.getElementById("email").style.border = "1px solid red";
        return false;
    }
}

function nameValid(phone) {
    var phone_len = phpne.length;
    if (phone_len != 11) {
        return false;
    }
    return true;
}

function passwordValid(password) {
    var passid_len = passid.length;
    if (passid_len == 0 || passid_len >= 6 || passid_len < 21) {
        return false;
    }
    return true;
}






/////////////////////////////////////


function passid_validation(passid, mx, my) {
    var passid_len = passid.value.length;
    if (passid_len == 0 || passid_len >= my || passid_len < mx) {
        alert("Password should not be empty / length be between " + mx + " to " + my);
        passid.focus();
        return false;
    }
    return true;
}




function ValidateEmail(uemail) {
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (uemail.value.match(mailformat)) {
        return true;
    } else {
        alert("You have entered an invalid email address!");
        uemail.focus();
        return false;
    }
}

function validsex(umsex, ufsex) {
    var x = 0;

    if (umsex.checked) {
        x++;
    }
    if (ufsex.checked) {
        x++;
    }
    if (x == 0) {
        alert('Select Male/Female');
        umsex.focus();
        return false;
    } else {
        alert('Form Successfully Submitted');
        window.location.reload()
        return true;
    }
}
