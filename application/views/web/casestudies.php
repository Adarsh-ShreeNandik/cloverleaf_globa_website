<style>
    /* blog setions area starts */
    .latest-news-blog-area {
        padding: 2rem 3rem;
    }

    @media (min-width: 1024px) {
        .latest-news-blog-area {
            padding: 2rem 2rem;
        }
    }

    @media (min-width: 768px) and (max-width: 1023px) {
        .latest-news-blog-area {
            padding: 2rem 1rem;
        }
    }

    .latest-news-cards {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
        padding: 0;
    }

    @media (min-width: 768px) and (max-width: 1023px) {
        .latest-news-cards {
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
        }
    }

    @media (min-width: 480px) and (max-width: 767px) {
        .latest-news-cards {
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
        }
    }

    @media (max-width: 479px) {
        .latest-news-cards {
            grid-template-columns: repeat(1, 1fr);
            row-gap: 20px;
        }
    }

    .news-cards {
        background-color: #fff;
        box-shadow: 0 0px 10px rgba(0, 0, 0, 0.1);
        position: relative;
    }

    .news-cards .card-img img {
        height: 200px;
        width: 100%;
    }

    @media (min-width: 768px) and (max-width: 1023px) {
        .news-cards .card-img img {
            height: 200px;
        }
    }

    .news-cards .card-contect {
        padding: 1rem 1rem;
    }

    .news-cards .card-contect h4 {
        -webkit-box-orient: vertical;
        display: -webkit-box;
        overflow: hidden;
        text-overflow: ellipsis;
        -webkit-line-clamp: 1;
        color: #111;
        font-size: 19px;
        font-weight: bold;
        font-family: var(--font-default);
    }

    .news-cards .card-contect h4 a {
        color: #000;
        font-weight: 500;
        font-family: var(--font-default);
    }

    .news-cards .card-contect p {
        color: #333;
        margin-top: 10px;
        -webkit-box-orient: vertical;
        display: -webkit-box;
        overflow: hidden;
        text-overflow: ellipsis;
        -webkit-line-clamp: 3;
        font-size: 14px;
        font-family: var(--font-default);
    }

    .news-cards .news-catagory {
        position: absolute;
        top: 0;
        background-color: #007bff;
        /* Assuming $nshPrimary is blue */
        margin-left: 1.5rem;
        padding: 1px 10px;
        border-radius: 0 0 8px 8px;
        color: #000;
        font-weight: 600;
        font-size: 14px;
    }

    .more-info {
        color: red;
    }

    .more-info:hover {
        color: red;
    }

    .more-info i {
        color: red;
        font-size: 15px;
        margin-left: 5px;
    }

    .more-info:hover i {
        transform: translateX(10px);
        transition-duration: 400ms;
    }

    /* blog section area ends here */




    .breadcrumbs .page-header {
        margin-top: 1px
    }

    .row.gy-4.abut-row-gy-4 {
        display: flex;
        flex-wrap: wrap;
        flex-direction: column-reverse;
    }

    h3.color-txt {
        font-size: 2.75rem;
        color: #009649;
    }

    .col-lg-6.position-relative.align-self-start.order-lg-last.order-first.col-full-width {
        width: 100%;
        display: flex;
        justify-content: space-around;

    }

    .col-lg-6.content.order-last.order-lg-first.col-full-width {
        width: 100%;

        /* padding-top: 15px; */
    }

    .ul-none {
        margin-top: 10px;
        padding-bottom: 15px;
    }

    .ul-none li {
        list-style: none;
        /* padding-top:10px; */
    }

    .col-lg-6.content.order-last.order-lg-first.col-full-width.bprder-div {
        border: 1px solid blue;
        border-radius: 30px;
        margin-top: 25px;
        background: #2424a5;
        color: #fff;
        font-size: 1.3rem;
        padding: 18px;
    }

    h3.color-txt.hpadding {
        padding: 50px 0;
    }

    h3.color-txt.pd-top {
        padding-top: 20px;
    }

    section#about {
        padding: 0px 0;
    }

    .section-header {
        text-align: center;
        padding: 20px 0;
        position: relative;
        margin-top: 20px;
    }

    .section-header span {
        top: 35px;

    }

    .features .features-item .ul-none li {
        list-style: none;
        padding-bottom: 0px !important;
    }

    .txt-colp {

        font-size: 18px;
        line-height: 24px;
        color: #777777;
    }

    .col-md-12 h6 {
        font-weight: 700;
        margin-bottom: 5px;
        text-transform: uppercase;
        color: #038466;
    }

    .box-height {
        /* height: 10vh; */
        font-size: 10px;
        margin-bottom: 10px;
        font-weight: 700;
    }

    .bg-mypink {
        background-color: #e88899;
    }

    .bg-myyellow {
        background-color: #c0c00b;
    }

    .hviolet {
        font-weight: 700;
        color: violet;
        margin-bottom: 30px;
    }

    .hblacklight {
        color: #777777;
        font-weight: 700;
        margin-bottom: 15px;
    }

    .hgreen {
        font-weight: 700;
        color: #038466;
    }

    ul.shape-sec {
        display: flex;
        list-style: none;
    }

    .border-bottom-link:hover {
        border-bottom: 1px solid #009649;
    }

    .border-bottom-link {
        font-size: 15px;
    }

    /* ---------------------------------------------------------------------- */

    ol.num li:before {
        content: counter(li);
        counter-increment: li;
        position: absolute;
        top: -44px !important;

        left: -165px !important;
        font-size: 125px !important;
    }

    ol.num li {

        padding: 6px 18px 0 30px !important;
        height: 110px !important;

        font-size: 18px !important;
    }

    /* Mobile screen shadow Text hide  */
    @media (max-width: 700px) {
        .dis-none {
            display: none !important;
            /* color: #dc3545 !important; */
        }
    }
</style>
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="page-header d-flex align-items-center mb-0"
            style="background-image: url('<?= base_url("assets/img/bg.jpg"); ?>');">
            <div class="container position-relative">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>Case Studies</h2>
                    </div>
                </div>
            </div>
        </div>
        <nav>
            <div class="container">
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Case Studies</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Breadcrumbs -->


    <!-- The blog sections starts from here -->
    <section class="latest-news-blog-area">
        <!-- <h3 class="mb-4">Recent News </h3> -->
        <section class="latest-news-cards">
            
            <div class="news-cards">
                <div class="card-img">
                    <a href="<?=base_url('andhra_packaging_machine/'); ?>" <?php if($page == "andhra_packaging_machine")echo 'class="active"'; ?>><img src="<?=base_url('assets/img/case_study_3.jpg'); ?>" alt="Image"></a>
                </div>
                <div class="card-contect">
                    <h4><a href="<?=base_url('andhra_packaging_machine/'); ?>" <?php if($page == "andhra_packaging_machine")echo 'class="active"'; ?>>Andhra Packaging Celebrates Milestone Achievement</a></h4>
                    <p>We are excited to announce a significant milestone at Andhra Packaging with the successful commissioning of our first SHINKO machine, a pivotal development in our ongoing commitment to excellence in packaging solutions. What makes this achievement particularly noteworthy is that it was accomplished entirely by the Cloverleaf team, without the need for any expatriate assistance—a testament to the skill, expertise, and dedication of our local workforce. </p>
                    <a href="<?=base_url('andhra_packaging_machine/'); ?>" <?php if($page == "andhra_packaging_machine")echo 'class="active"'; ?> class="more-info">Read More <i class="fa-solid fa-angles-right"></i></a>
                </div>
                <!-- <a href="./news.php" class="news-catagory">CATOGRY</a> -->
            </div>
            <div class="news-cards">
                <div class="card-img">
                    <a href="<?=base_url('revolutionizing_the_packaging_industry/'); ?>" <?php if($page == "revolutionizing_the_packaging_industry")echo 'class="active"'; ?>><img src="<?=base_url('assets/img/casestudyblog.jpg'); ?>" alt=""></a>
                </div>
                <div class="card-contect">
                    <h4><a href="<?=base_url('revolutionizing_the_packaging_industry/'); ?>" <?php if($page == "revolutionizing_the_packaging_industry")echo 'class="active"'; ?>>Revolutionizing the Packaging Industry with Industry 4.0</a></h4>
                    <p>In the ever-evolving world of industry and manufacturing, change is the only constant. The carton
                        packaging industry, in particular, faces an array of challenges in maintaining efficient machine
                        services and keeping records of essential documents. The importance of addressing these issues
                        cannot be overstated, and the key to a more productive and profitable future lies in harnessing the
                        power of Industry 4.0-based services.</p>
                    <a href="<?=base_url('revolutionizing_the_packaging_industry/'); ?>" <?php if($page == "revolutionizing_the_packaging_industry")echo 'class="active"'; ?> class="more-info">Read More <i class="fa-solid fa-angles-right"></i></a>
                </div>
                <!-- <a href="./news.php" class="news-catagory">CATOGRY</a> -->
            </div>

            <!-- <div class="news-cards">
            <div class="card-img">
                <a href="javascript:void(0)"><img src="assets/img/bg.jpg" alt=""></a>
            </div>
            <div class="card-contect">
                <h4><a href="javascript:void(0)"> Migration linear 101</a></h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam cupiditate cumque molestiae ut maxime
                    minus expedita repudiandae omnis, numquam necessitatibus!</p>
                    <a href="" class="more-info">Read More  <i class="fa-solid fa-angles-right"></i></a>
            </div>
        </div>
        <div class="news-cards">
            <div class="card-img">
                <a href="javascript:void(0)"><img src="assets/img/bg.jpg" alt=""></a>
            </div>
            <div class="card-contect">
                <h4><a href="javascript:void(0)"> Migration linear 101</a></h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam cupiditate cumque molestiae ut maxime
                    minus expedita repudiandae omnis, numquam necessitatibus!</p>
                    <a href="" class="more-info">Read More  <i class="fa-solid fa-angles-right"></i></a>
            </div>
        </div>
        <div class="news-cards">
            <div class="card-img">
                <a href="javascript:void(0)"><img src="assets/img/bg.jpg" alt=""></a>
            </div>
            <div class="card-contect">
                <h4><a href="javascript:void(0)"> Migration linear 101</a></h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam cupiditate cumque molestiae ut maxime
                    minus expedita repudiandae omnis, numquam necessitatibus!</p>
                    <a href="" class="more-info">Read More  <i class="fa-solid fa-angles-right"></i></a>
            </div>
        </div>
        <div class="news-cards">
            <div class="card-img">
                <a href="javascript:void(0)"><img src="assets/img/bg.jpg" alt=""></a>
            </div>
            <div class="card-contect">
                <h4><a href="javascript:void(0)"> Migration linear 101</a></h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam cupiditate cumque molestiae ut maxime
                    minus expedita repudiandae omnis, numquam necessitatibus!</p>
                    <a href="" class="more-info">Read More  <i class="fa-solid fa-angles-right"></i></a>
            </div>
        </div>
        <div class="news-cards">
            <div class="card-img">
                <a href="javascript:void(0)"><img src="assets/img/bg.jpg" alt=""></a>
            </div>
            <div class="card-contect">
                <h4><a href="javascript:void(0)"> Migration linear 101</a></h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam cupiditate cumque molestiae ut maxime
                    minus expedita repudiandae omnis, numquam necessitatibus!</p>
                    <a href="" class="more-info">Read More  <i class="fa-solid fa-angles-right"></i></a>
            </div>
        </div>
        <div class="news-cards">
            <div class="card-img">
                <a href="javascript:void(0)"><img src="assets/img/bg.jpg" alt=""></a>
            </div>
            <div class="card-contect">
                <h4><a href="javascript:void(0)"> Migration linear 101</a></h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam cupiditate cumque molestiae ut maxime
                    minus expedita repudiandae omnis, numquam necessitatibus!</p>
                    <a href="" class="more-info" >Read More  <i class="fa-solid fa-angles-right"></i></a>
            </div>
        </div> -->

        </section>
    </section>



</main>