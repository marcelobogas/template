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
    <h1>Contact Us</h1>
</section>

<section class="location">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d119770.63231984423!2d-50.61648354897404!3d-20.265790289270512!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1635786573130!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</section>

<section class="contact-us">
    <div class="row">
        <div class="contact-col">
            <div>
                <i class="fa fa-home"></i>
                <span>
                    <h5>XYZ Road, Building</h5>
                    <p>Jales, São Paulo, BRA</p>
                </span>
            </div>
            <div>
                <i class="fa fa-phone"></i>
                <span>
                    <h5>+55 (00) 0000-0000</h5>
                    <p>Monday to Friday, 8AM to 5PM</p>
                </span>
            </div>
            <div>
                <i class="fa fa-envelope-o"></i>
                <span>
                    <h5>info@yourdomain.com</h5>
                    <p>Email us your query</p>
                </span>
            </div>
        </div>
        <div class="contact-col">
            <form class="" action="" method="post">
                <input type="text" name="" placeholder="Enter your name" required>
                <input type="email" name="" placeholder="Enter your email address" required>
                <input type="text" name="" placeholder="Enter your subject" required>
                <textarea rows="8" placeholder="Message" required></textarea>
                <button type="submit" class="hero-btn red-btn">Send Message</button>
            </form>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>