function gopage(page) {
    window.location.href = page;
}
function validateBookingForm() {
    const checkIn = document.getElementById('check-in').value;
    const checkOut = document.getElementById('check-out').value;
    const guests = document.getElementById('guests').value;
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const phone = document.getElementById('phone').value;
    const creditCard = document.querySelector('input[name="credit-card"]').value;
    const cvv = document.querySelector('input[name="security-code"]').value;

    if (!checkIn || !checkOut || !guests || !name || !email || !phone || !creditCard || !cvv) {
        alert("Please fill in all required fields.");
        return false;
    }

    if (guests <= 0) {
        alert("Number of guests must be greater than zero.");
        return false;
    }
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        alert("Please enter a valid email address.");
        return false;
    }
    const phonePattern = /^[0-9]{10}$/;
    if (!phonePattern.test(phone)) {
        alert("Please enter a valid 10-digit phone number.");
        return false;
    }
    const creditCardPattern = /^[0-9]{12}$/;
    if (!creditCardPattern.test(creditCard)) {
        alert("Please enter a valid 12-digit credit card number.");
        return false;
    }
    const cvvPattern = /^[0-9]{3,4}$/;
    if (!cvvPattern.test(cvv)) {
        alert("Please enter a valid CVV.");
        return false;
    }
    alert("Form submitted successfully!");
    return true;
}

