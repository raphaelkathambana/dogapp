<?php
require_once "email.php";
try {
    $mail->addAddress('zahabiyashamoon2003@gmail.com'); //Name is optional
    $mail->Subject = 'Here is the subject';
    $mail->Body = 'Hey Sham. Have a Lovely Day!';
    $mail->AltBody = 'Told y"a';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
