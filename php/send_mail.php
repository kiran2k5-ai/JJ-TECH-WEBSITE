<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "kirammrp1310@gmail.com";  // 🔁 Change this to your email
    $subject = "New Contact Message";
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $body = "From: $email\n\nMessage:\n$message";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
} else {
    echo "invalid";
}
?>
<form action="php/send_mail.php" method="POST">
  <input type="email" class="form-control mb-2" name="email" placeholder="Your Email" required />
  <textarea class="form-control mb-2" name="message" rows="3" placeholder="Your Message" required></textarea>
  <button type="submit" class="btn btn-primary btn-sm">Send</button>
</form>

