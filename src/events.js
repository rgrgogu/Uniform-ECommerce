//This will set input value as integers

const onlyNumberKey = (evt) => {
    // So only characters in that range allowed
    let numbers = (evt.which) ? evt.which : evt.keyCode
    if (numbers > 31 && (numbers < 48 || numbers > 57))
    return false || alert("Numbers only...") || window.location.reload(true);
    return true;
}

//This will redirects to login page

const redirect = () => alert("Login first....") || window.location.replace("/login.html")