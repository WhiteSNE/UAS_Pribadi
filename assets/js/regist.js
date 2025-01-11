// Pre-registration form handling
document.getElementById("preRegForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent form submission

    let email = document.getElementById("email").value;
    let messageDiv = document.getElementById("message");

    // Basic client-side validation
    if (!email) {
        messageDiv.innerText = "Email is required!";
        return;
    }

    // Send the email data via AJAX to pre-register.php
    fetch("includes/pre-register.php", {
        method: "POST",
        body: new URLSearchParams({ email: email })
    })
    .then(response => response.text())  // Expect plain text response (success or error message)
    .then(data => {
        messageDiv.innerText = data;  // Show the response message from PHP

        // Make the success message green
        messageDiv.className = 'alert alert-success';  // Adding success alert class
    })
    .catch(error => {
        messageDiv.innerText = "There was an error processing your registration.";
        messageDiv.className = 'alert alert-danger';  // Adding error alert class
    });
});

// Add an event listener to reset the form when the modal is closed
const preRegModal = document.getElementById('preRegModal');
const preRegForm = document.getElementById('preRegForm');

preRegModal.addEventListener('hidden.bs.modal', function () {
    // Remove any alert messages
    const existingAlert = preRegModal.querySelector('.alert');
    if (existingAlert) {
        existingAlert.remove();
    }

    // Reset the form fields
    preRegForm.reset();
});
