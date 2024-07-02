<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/contact_us.css"/>
    <title>Contact Us</title>
</head>
<body>

 <?php

    include('navbar.php');
    
   ?>
    <header>
        <h1>Contact Us</h1>
    </header>
    <section class="contact-form">
        <h2>Get in Touch</h2>
        <form action="../controller/contact_us.php" method="POST" id="contactForm">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit">Submit</button>
        </form>
    </section>
    <footer>
        <?php

    include('footer.php');
    
   ?>
    </footer>

    
    <script>
        // JavaScript for Form Validation
const contactForm = document.getElementById('contactForm');

contactForm.addEventListener('submit', (e) => {
    const name = contactForm.querySelector('#name').value.trim();
    const email = contactForm.querySelector('#email').value.trim();
    const message = contactForm.querySelector('#message').value.trim();
    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

    if (name === '' || email === '' || message === '') {
        e.preventDefault();
        alert('Please fill out all fields.');
    } else if (!emailPattern.test(email)) {
        e.preventDefault();
        alert('Please enter a valid email address.');
    }
});

    </script>
</body>
</html>
