function signinValidation() {
    var name = document.signin.name.value;
    var password = document.signin.password.value;

    if (nameValid(name)) {
        document.getElementById("name").style.border = "";
        if (passwordValid(password)) {
            document.getElementById("name").style.border = "";
            return true;
        }
    }

    if (!nameValid(name)) {
        document.getElementById("name").style.border = "1px solid red";
    } else {
        document.getElementById("name").style.border = "";
    }

    if (!nameValid(password)) {
        document.getElementById("password").style.border = "1px solid red";
    } else {
        document.getElementById("password").style.border = "";
    }

    return false;
}


function nameValid(name) {
    var n_len = name.length;
    if (n_len == 0) {
        return false;
    }
    return true;
}

function passwordValid(password) {
    var p_len = password.length;
    if (p_len == 0) {
        return false;
    }
    return true;
}
