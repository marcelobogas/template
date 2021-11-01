<?php include __DIR__ . '/includes/header.php'; ?>

<section class="sub-header" style="background-image: linear-gradient(rgba(4,9,30,0.7), rgba(4,9,30,0.7)), url(<?= getenv('APP_IMG'); ?>/graduation.jpg);">
    <nav>
        <a href="home"><img src="<?= getenv('APP_IMG'); ?>/logo.jpg"></a>
        <div class="nav-links" id="nav-links">
            <i class="fa fa-times" onclick="hideMenu();"></i>
            <ul>
                <li><a href="home">HOME</a></li>
                <li><a href="about">ABOUT</a></li>
                <li><a href="courses">COURSE</a></li>
                <li><a href="blog">BLOG</a></li>
                <li><a href="contact">CONTACT </a></li>
            </ul>
        </div>
        <i class="fa fa-bars" onclick="showMenu();"></i>
    </nav>
    <h1>About Us</h1>
</section>

<section class="about-us">
    <div class="row">
        <div class="about-col">
            <h1>We are the world's largest university</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae ratione veritatis eius, hic quia debitis consequatur illum odio molestias similique expedita ex esse, explicabo alias, officiis nemo voluptates. Impedit, nam!</p>
            <a href="" class="hero-btn red-btn">EXPLORE NOW</a>
        </div>
        <div class="about-col">
            <img src="<?= getenv('APP_IMG'); ?>/about-us.jpg">
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>