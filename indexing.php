<?php
include_once "layout/header.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pawsitive Puppers</title>
</head>

<body>
    <?php include_once "layout/navbar.php"; ?>
    <div class="section-heading">
        <h3 class="text-center">Pawsitive Puppers</h3>
    </div>
    <a href="auth.php">Authentication</a>
    <div class="intro-content">
        <div>
            <p>
                Pawsitive puppers is a leading dog care service provider in
                Nairobi offering premium services that meet and exceed the
                diverse needs of your furry friend. From healthy nutrition,
                exercise and grooming to customized training and play dates,
                our trained experts provide exceptional care and attention
                to your dog while you are away.
            </p>
        </div>
        <video width="350" height="270" autoplay muted loop>
            <source src="images/a website for dog owners.mp4" type="video/mp4" />
            Your browser does not support the video tag.
        </video>
    </div>
    <div class="services">
        <h1>Services</h1>
        <h3 class="mt-4">Nutrition &amp; Health Care</h3>
        <p>
            We provide a healthy and balanced nutritional plan that meets
            the dietary needs of your dog based on age, weight and breed.
            Our experts also offer regular health check-ups and vaccinations
            to ensure your dog remains fit and healthy.
        </p>
        <h3 class="mt-4">Grooming &amp; Spa Day</h3>
        <p>
            We offer a wide range of dog grooming services including coat
            trimming, nail clipping, ear cleaning, and expressing anal
            glands. We also provide a relaxing spa day for your dog with
            refreshing bath and soothing massage.
        </p>
        <h3 class="mt-4">Training &amp; Play dates</h3>
        <p>
            Our professional trainers provide customized training programs
            that cater to the unique needs of your dog. We offer obedience
            training, behavioral modification, and socialization classes. We
            also organize play dates for your dog to socialize and have fun!
        </p>
    </div>
    <div class="container">
        <div>
            <h3 class="text-center">
                Sign up for our newsletter now!
            </h3>
            <form class="form-subscribe mt-4">
                <div class="form-group d-flex">
                    <input type="email" class="form-control mr-2" placeholder="Enter your email" name="email"
                        data-ddg-inputtype="identities.emailAddress" data-ddg-autofill="true" />
                    <input type="submit" class="w-100 btn btn-lg btn-primary" value="Subscribe" st />
                </div>
            </form>
        </div>
    </div>
    <?php include_once "layout/footer.php"; ?>
</body>

</html>
