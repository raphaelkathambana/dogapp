<?php
include_once "layout/header.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact Us</title>
</head>

<body>
    <?php include_once "layout/navbar.php"; ?>
    <div class="untree_co--site-section">
        <div class="container">
            <div class="section-heading">
                <h3 class="display-4 text-center">Contact Us</h3>
            </div>
            <p class="text-center">
                Have a question, need assistance? We're just a message away!
            </p>
            <div class="contact-group">
                <div class="info-group">
                    <div class="img-group">
                        <img src="/images/icons8_address_40px.png" alt="Location Image" class="img-icon" />
                        <h2>Location</h2>
                    </div>
                    <p>Sixpeeks Complex, Abaca Road, Nairobi</p>
                    <div class="img-group">
                        <img src="/images/icons8_newsletter_40px.png" alt="Location Image" class="img-icon" />
                        <h2>Email</h2>
                    </div>
                    <p>info@pawsitivepuppers.com</p>
                    <div class="img-group">
                        <img src="/images/icons8_ringer_volume_40px.png" alt="Location Image" class="img-icon" />
                        <h2>Call</h2>
                    </div>
                    <p>+254-739-209908</p>
                </div>
                <div class="sign-group">
                    <form method="post" action="makeContact.php">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Your Name *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Your Email *" value=""/>
                        </div>
                        <div class="form-group">
                            <textarea name="message" class="form-control" cols="30" rows="5"
                                placeholder="Message *"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="w-100 btn btn-lg btn-primary" value="Send" name="contact"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include_once "layout/footer.php"; ?>

</body>

</html>