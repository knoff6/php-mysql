document.addEventListener('DOMContentLoaded', function() {
    var form = document.querySelector('form');

    form.addEventListener('submit', function(event) {
        var password = document.getElementById('password').value;
        var confirmPassword = document.getElementById('confirmPassword').value;
        var phoneNumber = document.getElementById('phoneNumber').value;

        // Check if passwords match
        if (password !== confirmPassword) {
            alert("Passwords do not match");
            event.preventDefault();
            return false;
        }

        // Check if phone number has 10 digits and does not start with zero
        if (!/^\d{10}$/.test(phoneNumber) || phoneNumber.charAt(0) === '0') {
            alert("Phone number must have 10 digits and should not start with zero");
            event.preventDefault();
            return false;
        }

        return true;
    });
});
