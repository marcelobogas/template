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
    <h1>Our Certificate & Online Programs For <?= date('Y'); ?></h1>
</section>

<section class="blog-content">
    <div class="row">
        <div class="blog-left">
            <img src="<?= getenv('APP_IMG'); ?>/certificate.jpg">
            <h2>Our Certificate & Online Programs For <?= date('Y'); ?></h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate exercitationem quibusdam nostrum rem architecto soluta consectetur asperiores officiis odio commodi perferendis quos quasi rerum, accusamus maiores qui neque aspernatur placeat.</p>
            <br>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium aperiam nobis doloremque veniam dolore maiores cumque facilis vel atque deleniti! Esse recusandae laboriosam veniam iste iure ea, officia saepe modi?</p>
            <br>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. A officia temporibus sequi non. Suscipit quod fuga nulla a voluptates aut alias amet recusandae nobis obcaecati modi quisquam, sequi libero odio!</p>
        
            <div class="comment-box">
                <h3>Leave on comment</h3>
                <form class="comment-form">
                    <input type="text" placeholder="Enter Name">
                    <input type="email" placeholder="Enter Email">
                    <textarea rows="5" placeholder="Your comment"></textarea>
                    <button type="submit" class="hero-btn red-btn">POST COMMENT</button>
                </form>
            </div>
        </div>
        <div class="blog-right">
            <h3>Post Categories</h3>
            <div>
                <span>Business Analitycs</span>
                <span>21</span>
            </div>
            <div>
                <span>Data Science</span>
                <span>28</span>
            </div>
            <div>
                <span>Machine Learning</span>
                <span>15</span>
            </div>
            <div>
                <span>Computer Science</span>
                <span>33</span>
            </div>
            <div>
                <span>AutoCad</span>
                <span>18</span>
            </div>
            <div>
                <span>Journalism</span>
                <span>30</span>
            </div>
            <div>
                <span>Commerce</span>
                <span>30</span>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>