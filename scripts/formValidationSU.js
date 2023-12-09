document.getElementById('signUpForm').addEventListener('submit', function (event) {
    const firstName = document.getElementById('firstName').value;
    const lastName = document.getElementById('lastName').value;
    const username = document.getElementById('username').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    var regex = /[^\s@]+@[^\s@]+\.[^\s@]+/;

    function hasNumberF(firstName) {
        var regex = /\d/g;
        return regex.test(firstName);
    }

    function hasNumberL(lastName) {
        var regex = /\d/g;
        return regex.test(lastName);
    }

    // First name check
    if (!firstName) {
        document.getElementById('noFirstName').removeAttribute('hidden');
        event.preventDefault();

    } else if (hasNumberF(firstName)) {
        document.getElementById('noFirstName').setAttribute('hidden', 'hidden');
        document.getElementById('firstNameNumber').removeAttribute('hidden');
        event.preventDefault();

    } else {
        document.getElementById('noFirstName').setAttribute('hidden', 'hidden');
        document.getElementById('firstNameNumber').setAttribute('hidden', 'hidden');
    }

    // Last name check
    if (!lastName) {
        document.getElementById('noLastName').removeAttribute('hidden');
        event.preventDefault();

    } else if (hasNumberL(lastName)) {
        document.getElementById('noLastName').setAttribute('hidden', 'hidden');
        document.getElementById('lastNameNumber').removeAttribute('hidden');
        event.preventDefault();

    } else {
        document.getElementById('noLastName').setAttribute('hidden', 'hidden');
        document.getElementById('lastNameNumber').setAttribute('hidden', 'hidden');
    }

    // Username check
    if (!username) {
        document.getElementById('noUsername').removeAttribute('hidden');
        event.preventDefault();

    } else {
        document.getElementById('noUsername').setAttribute('hidden', 'hidden');
    }

    // Email check
    if (!email) {
        document.getElementById('noEmail').removeAttribute('hidden');
        event.preventDefault();

    } else {
        document.getElementById('noEmail').setAttribute('hidden', 'hidden');
        document.getElementById('invalidEmail').setAttribute('hidden', 'hidden');
    }

    // Password check
    if (!password) {
        document.getElementById('noPassword').removeAttribute('hidden');
        event.preventDefault();

    } else {
        document.getElementById('noPassword').setAttribute('hidden', 'hidden');
    }

    return false;
});


/*document.getElementById('signUpForm').addEventListener('submit', function (event) {
    const firstName = document.getElementById('firstName').value;
    const lastName = document.getElementById('lastName').value;
    const username = document.getElementById('username').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;


    var regex = /[^\s@]+@[^\s@]+\.[^\s@]+/;

    function hasNumberF(firstName) {
        var regex = /\d/g;
        return regex.test(firstName);

    }
    function hasNumberL(lastName) {
        var regex = /\d/g;
        return regex.test(lastName);
    }

    //first name check
    if (!firstName) {
        document.getElementById('noFirstName').removeAttribute('hidden');
        event.preventDefault();
    }
    else if (hasNumberF(firstName)) {
        document.getElementById('noFirstName').setAttribute('hidden', 'hidden');
        document.getElementById('firstNameNumber').removeAttribute('hidden');
        event.preventDefault();
    }
    else {
        document.getElementById('noFirstName').setAttribute('hidden', 'hidden');
        document.getElementById('firstNameNumber').setAttribute('hidden', 'hidden');
    }

    // last name check
    if (!lastName) {
        document.getElementById('noLastName').removeAttribute('hidden');
        event.preventDefault();
    }
    else if (hasNumberL(lastName)) {
        document.getElementById('noLastName').setAttribute('hidden', 'hidden');
        document.getElementById('lastNameNumber').removeAttribute('hidden');
        event.preventDefault();
    }
    else {
        document.getElementById('noLastName').setAttribute('hidden', 'hidden');
        document.getElementById('lastNameNumber').setAttribute('hidden', 'hidden');
    }

    // username check
    if (!username) {
        document.getElementById('noUsername').removeAttribute('hidden');
        event.preventDefault();
    } else {
        document.getElementById('noUsername').setAttribute('hidden', 'hidden');
    }

    // email check
    if (!email) {
        document.getElementById('noEmail').removeAttribute('hidden');
        event.preventDefault();
    } else {
        document.getElementById('noEmail').setAttribute('hidden', 'hidden');
        document.getElementById('invalidEmail').setAttribute('hidden', 'hidden');
    }

    // password check
    if (!password) {
        document.getElementById('noPassword').removeAttribute('hidden');
        event.preventDefault();
    } else {
        document.getElementById('noPassword').setAttribute('hidden', 'hidden');
    }
});*/
