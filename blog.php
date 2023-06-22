<?php
include_once "layout/header.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Dog Blog</title>
</head>
<body>
    <?php include_once "layout/navbar.php";?>
        <div class="section-heading">
            <h3 class="text-center">Our Blog</h3>
        </div>
        <div class="blog-grid col-md-6 text-md-right">
            <div class="blog-grid-item">
                <h3 class="display-4">Gabe Itches</h3>
                <p>
                    Pawsitive Puppers' is more than just a blog; it's a community that celebrates the magic of dogs. The stories and experiences shared here are heartwarming and remind us of the incredible bond we share with our four-legged companions. It's a safe haven for dog lovers to come together, learn from each other, and find support. I'm grateful to have stumbled upon this gem of a blog!
                </p>
            </div>
            <div class="blog-grid-item">
                <h3 class="display-4">Hargreaves</h3>
                <p>
                    Pawsitive Puppers is a breath of fresh air in the dog blogosphere! The content is always uplifting and inspiring, reminding us of the joy and unconditional love our furry friends bring to our lives. The articles are well-written and backed by expert knowledge. Whenever I need a little pick-me-up, I know I can count on this blog to put a smile on my face. Thank you for spreading the doggie happiness!
                </p>
            </div>
            <div class="blog-grid-item">
                <h3 class="display-4">Jack Black</h3>
                <p>
                    I can't thank 'Pawsitive Puppers' enough for the invaluable information they provide. From training tips to health advice, I've learned so much that has improved the well-being of my furry friend. This blog has become my trusted companion on this wonderful journey of being a dog owner. Kudos to the team behind 'Pawsitive Puppers' for their dedication and passion!
                </p>
            </div>
            <div class="blog-grid-item">
                <h3 class="display-4">Joseph Christ</h3>
                <p>
                    Pawsitive Puppers' is my go-to resource for all things dog-related. The articles are not only informative but also engaging and fun to read. I love how they strike a balance between education and entertainment. Plus, the community surrounding the blog is incredible. It's so heartwarming to connect with fellow dog lovers and share our experiences. Thank you for creating such a pawsitively amazing blog!
                </p>
            </div>
            <div class="blog-grid-item">
                <h3 class="display-4">Boris Bucovic</h3>
                <p>
                    As a dog lover, I can't express how much I adore 'Pawsitive Puppers.' The content is always heartwarming and uplifting, providing a daily dose of happiness. From heartwarming rescue stories to useful tips on dog health, this blog covers it all. It's clear that the writers truly understand the bond between humans and dogs. Keep up the fantastic work!
                </p>
            </div>
            <div class="blog-grid-item">
                <h3 class="display-4">Philomena Cunk</h3>
                <p>
                    I stumbled upon 'Pawsitive Puppers' a few months ago, and it has quickly become my favorite dog blog! The articles are not only informative and well-researched but also filled with genuine love for our furry friends. I've learned so much about dog care and training from this blog. Thank you for creating such a "pawsome" platform!
                </p>
            </div>
        </div>

        <div>
            <div class="section-heading">
                <h3 class="text-center">What are Your Thought?</h3>
                <h4 class="text-left col">Comment Them Below</h4>
            </div>
            <div class="form-group">
                <form action="blog.php" method="post">
                    <textarea name="comment" class="form-control" id="comment"></textarea>
                </form>
            </div>
        </div>
        <?php include_once "layout/footer.php";?>
    </body>
</html>
