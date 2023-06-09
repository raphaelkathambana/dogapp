<head>
    <link rel="stylesheet" href="/style/style.css" />
    <link rel="shortcut icon" href="/images/icons8_paw_prints.ico" type="image/x-icon" />
    <title></title>
</head>
<nav class="navbar">
    <div class="navbar-container">
        <a href="/">
            <img src="images\icons8_paw_prints_40px.png" alt="Website Logo. Two Paws" />
        </a>
        <a href="/" class="navbar-title">Pawsitive Puppers</a>
        <a href="blog.php" class="navbar-items">Posts</a>
        <a href="services.php" class="navbar-items">Dog Services</a>
        <a href="products.php" class="navbar-items">Dog Care</a>
        <a href="contact.php" class="navbar-items">Contact Us</a>
        <?php if (isset($_COOKIE["session"])): ?>
            <a href="profile.html" class="navbar-items">
                <?php echo $username; ?>
            </a>
            <a href="logout.php" class="navbar-items">Log Out</a>
        <?php else: ?>
            <a href="login.html" class="navbar-items">Login</a>
            <a href="register.html" class="navbar-items">Register</a>
        <?php endif ?>
        <input type="checkbox" name="check-box" id="check-box" />
        <div class="hamburger-lines">
            <span class="line line1"></span>
            <span class="line line2"></span>
            <span class="line line3"></span>
        </div>
    </div>
</nav>