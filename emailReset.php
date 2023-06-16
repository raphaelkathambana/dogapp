<?php

if (isset($_POST['verify'])) {
    if (!filter_var($_POST['user-email'], FILTER_VALIDATE_EMAIL)) {
        die("Error: Invalid email");
    } else {
        var_dump($_POST);
    }
} else  {
    echo /*html*/"<br>" . "Nope";
}

// require_once "email.php";
// try {
//     $mail->addAddress($_POST['user-email']); //Name is optional
//     $mail->Subject = 'Reset Password';
//     $mail->Body = 'Enter the following key to reset your password\n UUIIDDK';
//     $mail->AltBody = 'Alt Reset Password Using Email';

//     $mail->send();
//     echo 'Message has been sent'; header('Location: verifyKey.php')
// } catch (Exception $e) {
//     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
// }
