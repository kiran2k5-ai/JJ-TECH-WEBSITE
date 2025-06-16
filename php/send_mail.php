<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "kirammrp1310@gmail.com"; 
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


