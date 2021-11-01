<?php include __DIR__ . '/includes/header.php'; ?>

<section class="header" style="background-image: linear-gradient(rgba(4,9,30,0.7), rgba(4,9,30,0.7)), url(<?= getenv('APP_IMG'); ?>/banner-main.jpg);">
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
    <div class="text-box">
        <h1>World's Biggest University</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur eum libero minus velit odit, laborum modi?<br> Harum ullam quisquam numquam sequi provident, temporibus accusantium quam nam eius vitae, dolor qui!</p>
        <a href="" class="hero-btn">Visit Us To Know More</a>
    </div>
</section>

<section class="course">
    <h1>Courses We Offer</h1>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>

    <div class="row">
        <div class="course-col">
            <h3>Intermediate</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, veniam. Omnis repellat iure obcaecati tempore! Iusto recusandae nostrum ullam vitae animi ex accusamus doloremque architecto temporibus! Recusandae voluptas magnam nemo.</p>
        </div>
        <div class="course-col">
            <h3>Degree</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, veniam. Omnis repellat iure obcaecati tempore! Iusto recusandae nostrum ullam vitae animi ex accusamus doloremque architecto temporibus! Recusandae voluptas magnam nemo.</p>
        </div>
        <div class="course-col">
            <h3>Post Graduation</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, veniam. Omnis repellat iure obcaecati tempore! Iusto recusandae nostrum ullam vitae animi ex accusamus doloremque architecto temporibus! Recusandae voluptas magnam nemo.</p>
        </div>
    </div>
</section>

<section class="campus">
    <h1>Our Global Campus</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, veniam. Omnis repellat iure obcaecati tempore! Iusto recusandae nostrum ullam vitae animi ex accusamus doloremque architecto temporibus! Recusandae voluptas magnam nemo.</p>

    <div class="row">
        <div class="campus-col">
            <img src="<?= getenv('APP_IMG') ?>/london.jpg">
            <div class="layer">
                <h3>LONDON</h3>
            </div>
        </div>
        <div class="campus-col">
            <img src="<?= getenv('APP_IMG') ?>/new-york.jpg">
            <div class="layer">
                <h3>NEW YORK</h3>
            </div>
        </div>
        <div class="campus-col">
            <img src="<?= getenv('APP_IMG') ?>/japan.jpg">
            <div class="layer">
                <h3>JAPAN</h3>
            </div>
        </div>
    </div>
</section>

<section class="facilities">
    <h1>Our Facilities</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, veniam. Omnis repellat iure obcaecati tempore!</p>

    <div class="row">
        <div class="facilities-col">
            <img src="<?= getenv('APP_IMG') ?>/library.jpg">
            <h3>World Class Library</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam similique ipsam labore dolorem quam, earum temporibus voluptas et minima doloremque, qui esse aut, fugiat deleniti distinctio ea quo porro ratione!</p>
        </div>
        <div class="facilities-col">
            <img src="<?= getenv('APP_IMG') ?>/gymnasium.jpg">
            <h3>Largest Paly Ground</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam similique ipsam labore dolorem quam, earum temporibus voluptas et minima doloremque, qui esse aut, fugiat deleniti distinctio ea quo porro ratione!</p>
        </div>
        <div class="facilities-col">
            <img src="<?= getenv('APP_IMG') ?>/caffeteria.jpg">
            <h3>Tasty and Health Food</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam similique ipsam labore dolorem quam, earum temporibus voluptas et minima doloremque, qui esse aut, fugiat deleniti distinctio ea quo porro ratione!</p>
        </div>
    </div>
</section>

<section class="testimonials">
    <h1>What Our Students Says</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et, veniam. Omnis repellat iure obcaecati tempore!</p>

    <div class="row">
        <div class="testimonial-col">
            <img src="<?= getenv('APP_IMG') ?>/student-1.jpg">
            <div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam sint ad modi officia consequatur quaerat et laudantium. Praesentium earum, blanditiis voluptatem aut dolorem facere nostrum neque labore recusandae beatae expedita.</p>
                <h3>Crhistine Berkley</h3>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
        </div>
        <div class="testimonial-col">
            <img src="<?= getenv('APP_IMG') ?>/student-2.png">
            <div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam sint ad modi officia consequatur quaerat et laudantium. Praesentium earum, blanditiis voluptatem aut dolorem facere nostrum neque labore recusandae beatae expedita.</p>
                <h3>David Byer</h3>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
            </div>
        </div>
    </div>

</section>

<section class="cta" style="background-image: linear-gradient(rgba(4,9,30,0.7), rgba(4,9,30,0.7)), url(<?= getenv('APP_IMG') ?>/online-courses.jpg);">
    <h1>Enroll For Our Various Online Courses<br> Anywhere From The World</h1>
    <a href="contact" class="hero-btn">CONTACT US</a>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>