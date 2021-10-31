<?php include __DIR__ . '/includes/header.php'; ?>

<section class="header-courses" style="background-image: linear-gradient(rgba(4,9,30,0.7), rgba(4,9,30,0.7)), url(<?= getenv('APP_IMG'); ?>/graduation.jpg);">
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
</section>

<section class="course">
    <h1>Our Courses</h1>
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

<?php include __DIR__ . '/includes/footer.php'; ?>