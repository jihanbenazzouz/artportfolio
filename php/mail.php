<?php
   
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to      = 'jihenazzouz@gmail.com';
    $subject = 'the subject';
    $message = 'hello its me';
    $headers = 'From: jihenazzouz@gmail'       . "\r\n" .
                 'Reply-To: webmaster@example.com' . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);
}
?>