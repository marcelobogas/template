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
    <h1>Our Courses</h1>
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

<?php include __DIR__ . '/includes/footer.php'; ?>