function validateLoginForm() {
    var username = document.getElementById('loginUsername').value;
    var password = document.getElementById('loginPassword').value;

    if (username === '' || password === '') {
        alert('Please enter both username and password.');
        return false;
    }

    return true;
}

function validateRegisterForm() {
    var username = document.getElementById('registerUsername').value;
    var email = document.getElementById('registerEmail').value;
    var password = document.getElementById('registerPassword').value;

    if (username === '' || email === '' || password === '') {
        alert('Please fill in all the required fields.');
        return false;
    }

    return true;
}