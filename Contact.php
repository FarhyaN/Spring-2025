<?php include 'header.php'; ?>

<section>
    <h2>Contact Us</h2>
    <form action="process_contact.php" method="POST">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="5" required></textarea><br><br>

        <input type="submit" value="Send Message">
    </form>
    
    <p>Email: info@deliciousbites.com</p>
    <p>Phone: (123) 456-7890</p>
    <p>Address: 123 Flavor St, Food City, YUM 12345</p>


</section>

<?php include 'footer.php'; ?>
