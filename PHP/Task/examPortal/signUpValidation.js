document.getElementById('form').addEventListener('submit', function(event) {
    let valid = true;
 
    document.querySelectorAll('.error').forEach(el => el.textContent = '');
 
    const firstName = document.getElementById('firstName').value;
    if (firstName.trim() === '') {
        document.getElementById('firstName-error').textContent = 'firstName is required';
        valid = false;
    }

    const lastName = document.getElementById('lastName').value;
    if (lastName.trim() === '') {
        document.getElementById('lastName-error').textContent = 'lastName is required';
        valid = false;
    }

    const userName = document.getElementById('userName').value;
    if (userName.trim() === '') {
        document.getElementById('userName-error').textContent = 'userName is required';
        valid = false;
    }
 
    const email = document.getElementById('email').value;
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        document.getElementById('email-error').textContent = 'Enter a valid email address';
        valid = false;
    }

    const mobile = document.getElementById('mobile').value;
    const mobilePattern = /^\d{10}$/;
    if (!mobilePattern.test(mobile)) {
        document.getElementById('mobile-error').textContent = 'Enter a valid mobile number';
        valid = false;
    }
 
    const password = document.getElementById('password').value;
    if (password.length < 6) {
        document.getElementById('password-error').textContent = 'Password must be at least 6 characters long';
        valid = false;
    }
    if (!valid) {
        event.preventDefault();
    }
});