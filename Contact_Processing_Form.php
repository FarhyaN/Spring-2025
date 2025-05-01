<?php include 'header.php'; ?>

<section>
    <h2>Thank You!</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST["name"]);
        $email = htmlspecialchars($_POST["email"]);
        $message = htmlspecialchars($_POST["message"]);

        echo "<p>Thank you, <strong>$name</strong>! We’ve received your message:</p>";
        echo "<blockquote>$message</blockquote>";
        echo "<p>We'll respond to <strong>$email</strong> shortly.</p>";
    } else {
        echo "<p>Something went wrong. Please try again.</p>";
    }
    ?>
</section>

<?php include 'footer.php'; ?>

