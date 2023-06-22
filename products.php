<?php
include_once "layout/header.php";
require_once "layout/session.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Our Products</title>
</head>
<body>
    <?php include_once "layout/navbar.php"; ?>
    <div class="untree_co--site-section">
        <div class="section-heading">
            <h3 class="text-center">Our Products</h3>
        </div>
        <div class="container">
            <div class="row">
                <div class="intro">
                    <div class="flex flex-ai-c">
                        <p>
                            Pawsitive Puppers hand picks the best, Trail-Tested, Natural Dog Treats and Chews to
                            Fuel Adventures Every Day. Explore our variety of
                            natural treats and chews and find what fuels
                            your dog's adventurous life.
                        </p>
                    </div>
                    <div class="card">
                        <img src="/images/yum.jpeg" alt="A Photo" class="img-product" />
                    </div>
                </div>
            </div>
            <div class="product">
                <div>
                    <img class="img-product-icon" src="/images/feedOne.webp" alt="Photo" />
                    <h3 class="display-4">ChewChew</h3>
                </div>
                <div>
                    <img class="img-product-icon" src="/images/feedTwo.jpeg" alt="Photo" />
                    <h3 class="display-4">Woof Meal</h3>
                </div>
                <div>
                    <img class="img-product-icon" src="/images/feedThree.webp" alt="Photo" />
                    <h3 class="display-4">Dog Chow</h3>
                </div>
                <div>
                    <img class="img-product-icon" src="/images/feedFour.jpg" alt="Photo" />
                    <h3 class="display-4">Bark Feed</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="container pt-0 pb-5">
            <div class="row flex flex-jc-c text-center">
                <div class="col-lg-6 section-heading aos-init" data-aos="fade-up">
                    <h3 class="text-center">What people are saying...</h3>
                </div>
            </div>
        </div>
        <div class="flex flex-ai-st review">
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="media-29191 text-center">
                    <div class="relative with">
                        <h2>Maggie Smith</h2>
                        <p class="mt-4">
                            “Pawsitive Puppers provides top-notch care for
                            my dog, Lily. The staff is always friendly and
                            accommodating, and Lily loves going there for
                            daycare and boarding. I highly recommend
                            Pawsitive Puppers to anyone looking for
                            high-quality dog care!”
                        </p>
                    </div>
                    <p></p>
                    <p></p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="media-29191 text-center">
                    <div class="relative with">
                        <h2>Samantha Lee</h2>
                        <p class="mt-4">
                            “Pawsitive Puppers is by far the best dog care
                            facility in Nairobi. The staff are friendly and
                            knowledgeable, and my dog always comes home
                            happy and healthy. I highly recommend them to
                            all dog owners!”
                        </p>
                    </div>
                    <p></p>
                    <p></p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="media-29191 text-center">
                    <div class="relative with">
                        <h2>Sarah Williams</h2>
                        <p class="mt-4">
                            “Pawsitive Puppers is the best place for dog
                            care in Nairobi. They offer a wide range of
                            services, from grooming to training to daycare
                            and more. My dog, Rufus, always comes home
                            exhausted from playing with his furry friends,
                            and I love that I can trust Pawsitive Puppers to
                            take great care of him. I highly recommend this
                            business to any dog owner!”
                        </p>
                    </div>
                    <p></p>
                    <p></p>
                </div>
            </div>
        </div>
    </div>
    <?php include_once "layout/footer.php"; ?>
</body>

</html>