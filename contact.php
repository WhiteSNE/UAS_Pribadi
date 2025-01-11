<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/global-font.css">
    <link rel="stylesheet" href="assets/css/contact-theme.css">
    <title>Title</title>
</head>

<body>
    <?php include('includes/header.php'); ?>

    <main>
        <!-- Banner -->
        <div class="container-fluid p-0" style="width: 100%;">
            <div class="banner-img position-relative overflow-hidden" style="height: 40rem;">
                <img src="assets/img/car1.jpg" alt="banner-img-main" class="w-100 h-100 object-fit-cover">
                <div class="card-container position-absolute top-50 start-50 translate-middle text-center text-white">
                    <!-- Text Section -->
                    <div class="mb-4">
                        <h1 class="text-center" style="text-decoration:underline;">Contact Us</h1>
                        <p class="text-center">
                            We love to hear your thoughts about our city. If you have any questions, feel free to contact us!
                        </p>
                    </div>
                    <!-- Card Section -->
                    <div class="card bg-dark text-white shadow mx-auto" style="width: 18rem; height: 25rem;">
                        <img src="assets/img/Glaucus.webp" class="card-img-top" alt="contact" style="object-fit: cover; height: 18rem;">
                        <div class="card-body d-flex flex-column">
                            <p class="card-title">Our Contact Agent</p>
                            <!-- Button to Open Modal -->
                            <button class="btn btn-primary mt-auto" data-bs-toggle="modal" data-bs-target="#contactFormModal">
                                Contact Us
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Structure -->
        <div class="modal fade" id="contactFormModal" tabindex="-1" aria-labelledby="contactFormModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h5 class="modal-title" id="contactFormModalLabel">Contact Us</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <!-- Modal Body -->
                    <div class="modal-body">
                        <form id="contactForm" action="#">
                            <div class="mb-3">
                                <label for="name" class="form-label">Your Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Your Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Your Message</label>
                                <textarea class="form-control" id="message" name="message" rows="4" placeholder="Write your message here" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include('includes/footer.php') ?>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Contact form handling
            const contactForm = document.getElementById('contactForm');
            const contactModal = document.getElementById('contactFormModal');

            if (contactForm && contactModal) {
                const contactModalBody = contactModal.querySelector('.modal-body');

                contactForm.addEventListener('submit', function(event) {
                    event.preventDefault(); // Prevent form submission

                    const formData = new FormData(this);

                    // Send the form data to 'message.php' for processing
                    fetch('includes/message.php', { // Changed to 'message.php' for form handling
                        method: 'POST',
                        body: formData,
                    })
                    .then(response => response.text()) // Expect plain text response
                    .then(data => {
                        const alert = document.createElement('div');
                        alert.className = 'alert alert-success';
                        alert.textContent = data;

                        // Clear any existing alert messages
                        const existingAlert = contactModalBody.querySelector('.alert');
                        if (existingAlert) {
                            existingAlert.remove();
                        }

                        contactModalBody.appendChild(alert);
                        this.reset(); // Clear the form fields
                    })
                    .catch(error => {
                        const alert = document.createElement('div');
                        alert.className = 'alert alert-danger';
                        alert.textContent = `An error occurred: ${error.message}`;

                        // Clear any existing alert messages
                        const existingAlert = contactModalBody.querySelector('.alert');
                        if (existingAlert) {
                            existingAlert.remove();
                        }

                        contactModalBody.appendChild(alert);
                    });
                });

                // Add an event listener to clear the notice message when the modal is hidden
                contactModal.addEventListener('hidden.bs.modal', function () {
                    // Remove any alert messages
                    const existingAlert = contactModalBody.querySelector('.alert');
                    if (existingAlert) {
                        existingAlert.remove();
                    }

                    // Reset the form fields
                    contactForm.reset();
                });
            } else {
                console.error('Contact form with id #contactForm or modal with id #contactFormModal not found.');
            }
        });
    </script>

</body>
</html>
