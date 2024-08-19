document.getElementById('form').addEventListener('submit', function(event) {
    let valid = true;
 
    document.querySelectorAll('.error').forEach(el => el.textContent = '');

    const email = document.getElementById('email').value;
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        document.getElementById('email-error').textContent = 'Enter a valid email address';
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