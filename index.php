<?php

include "header.php";

?>
<style>
    .see-more-btn {
        background-color: #4CAF50;
        border: none;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin-top: 10px;
        border-radius: 5px;
        cursor: pointer;
    }

    .see-more-btn:hover {
        background-color: #45a049;
    }

    .description {
        display: none;
    }

    .show-description {
        display: block;
    }
</style>
<main>
    <!-- Trending Area Start -->
    <div class="trending-area fix pt-25 gray-bg">
        <div class="container">
            <div class="trending-main">
                <div class="row">

                    <div class="col-lg-8">
                        <!-- Trending Top -->
                        <div class="slider-active">
                            <!-- Single -->
                            <div class="single-slider">
                                <div class="trending-top mb-30">
                                    <div class="trend-top-img">
                                        <img src="assets/img/trending/trending_top2.jpg" alt="">
                                        <div class="trend-top-cap">
                                            <span class="bgr" data-animation="fadeInUp" data-delay=".2s"
                                                data-duration="1000ms">Business</span>
                                            <h2><a href="latest_news.php" data-animation="fadeInUp" data-delay=".4s"
                                                    data-duration="1000ms">Anna Lora Stuns In White At Her Australian
                                                    Premiere</a></h2>
                                            <p data-animation="fadeInUp" data-delay=".6s" data-duration="1000ms">by
                                                Alice cloe - Jun 19, 2020</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single -->
                            <div class="single-slider">
                                <div class="trending-top mb-30">
                                    <div class="trend-top-img">
                                        <img src="assets/img/trending/trending_top02.jpg" alt="">
                                        <div class="trend-top-cap">
                                            <span class="bgr" data-animation="fadeInUp" data-delay=".2s"
                                                data-duration="1000ms">Business</span>
                                            <h2><a href="latest_news.php" data-animation="fadeInUp" data-delay=".4s"
                                                    data-duration="1000ms">Anna Lora Stuns In White At Her Australian
                                                    Premiere</a></h2>
                                            <p data-animation="fadeInUp" data-delay=".6s" data-duration="1000ms">by
                                                Alice cloe - Jun 19, 2020</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single -->
                            <div class="single-slider">
                                <div class="trending-top mb-30">
                                    <div class="trend-top-img">
                                        <img src="assets/img/trending/trending_top03.jpg" alt="">
                                        <div class="trend-top-cap">
                                            <span class="bgr" data-animation="fadeInUp" data-delay=".2s"
                                                data-duration="1000ms">Business</span>
                                            <h2><a href="latest_news.php" data-animation="fadeInUp" data-delay=".4s"
                                                    data-duration="1000ms">Anna Lora Stuns In White At Her Australian
                                                    Premiere</a></h2>
                                            <p data-animation="fadeInUp" data-delay=".6s" data-duration="1000ms">by
                                                Alice cloe - Jun 19, 2020</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Right content -->
                    <div class="col-lg-4">
                        <!-- Trending Top -->
                        <div class="row">


                            <div class="col-lg-12 col-md-6 col-sm-6">
                                <div class="trending-top mb-30">
                                    <div class="trend-top-img">
                                        <img src="assets/img/trending/trending_top3.jpg" alt="">
                                        <div class="trend-top-cap trend-top-cap2">
                                            <span class="bgb">FASHION</span>
                                            <h2><a href="latest_news.php">Secretart for Economic Air
                                                    plane that looks like</a></h2>
                                            <p>by Alice cloe - Jun 19, 2020</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6 col-sm-6">
                                <div class="trending-top mb-30">
                                    <div class="trend-top-img">
                                        <img src="assets/img/trending/trending_top4.jpg" alt="">
                                        <div class="trend-top-cap trend-top-cap2">
                                            <span class="bgg">TECH </span>
                                            <h2><a href="latest_news.php">Secretart for Economic Air plane that looks
                                                    like</a></h2>
                                            <p>by Alice cloe - Jun 19, 2020</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Trending Area End -->
    <!-- Whats New Start -->
    <section class="whats-news-area pt-50 pb-20 gray-bg">
        <div class="container">
            <div class="row">

                <div class="col-lg-8">

                    <div class="whats-news-wrapper">
                        <!-- Heading & Nav Button -->
                        <div class="row justify-content-between align-items-end mb-15">
                            <div class="col-xl-4">
                                <div class="section-tittle mb-30">
                                    <h3>Whats New</h3>
                                </div>
                            </div>
                            <div class="col-xl-8 col-md-9">
                                <div class="properties__button">
                                    <!--Nav Button  -->
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <a class="nav-item nav-link" href="Lifestyle.php">Lifestyle</a>
                                            <a class="nav-item nav-link" href="Fashion.php">Fashion</a>
                                            <a class="nav-item nav-link" href="Sport.php">Sports</a>
                                            <a class="nav-item nav-link" href="Technologay.php">Technologay</a>
                                        </div>
                                    </nav>
                                    <!--End Nav Button  -->
                                </div>
                            </div>
                        </div>
                        <!-- Tab content -->
                        <div class="row">
                        <?php
$conn = mysqli_connect("localhost:3307", "root", "", "blooging_website") or die ("Connection Failed : " . mysqli_connect_error());
$limit = 4;
$pages = isset($_GET['pages']) ? $_GET['pages'] : 1;
$offset = ($pages - 1) * $limit;

$post = "SELECT * FROM post WHERE status != '2' LIMIT {$offset}, {$limit}";
$post_run = mysqli_query($conn, $post);
if (mysqli_num_rows($post_run) > 0) {
    foreach ($post_run as $post) {
        ?>
        <div class="col-xl-6 col-lg-6 col-md-6">
            <div class="whats-news-single mb-40 mb-40">
                <div class="whates-img">
                    <img src="darkpan/img/<?= $post['image'] ?>" alt="">
                </div>
                <div class="whates-caption whates-caption2">
                    <p><?= $post['Category_name'] ?></p>
                    <h4><a href="blog.php?post_id=<?= $post['id'] ?>">
                            <?= $post['Tittle'] ?>
                        </a></h4>
                    <span>Posted on : <?= $post['created_at'] ?></span>
                    <p class="description"><?= $post['description'] ?></p>
                    <a href="blog.php?post_id=<?= $post['id'] ?>" class="see-more-btn">Read More</a>
                </div>
            </div>
        </div>
        <?php
    }
}
?>



                            <div class="col-12">

                                <!-- Nav Card -->
                                <div class="tab-content" id="nav-tabContent">
                                    <!-- card one -->
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                        aria-labelledby="nav-home-tab">
                                        <div class="row">
                                            <!-- Left Details Caption -->
                                            <div class="col-xl-6 col-lg-12">
                                                <div class="whats-news-single mb-40 mb-40">
                                                    <div class="whates-img">
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- Right single caption -->
                                            <div class="col-xl-6 col-lg-12">
                                                <div class="row">
                                                    <!-- single -->
                                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                        <div class="whats-right-single mb-20">
                                                            <div class="whats-right-img">
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                        <div class="whats-right-single mb-20">
                                                            <div class="whats-right-img">
                                                            </div>
                                                            <div class="whats-right-cap">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                        <div class="whats-right-single mb-20">
                                                            <div class="whats-right-img">
                                                            </div>
                                                            <div class="whats-right-cap">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                        <div class="whats-right-single mb-20">
                                                            <div class="whats-right-img">
                                                            </div>
                                                            <div class="whats-right-cap">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card two -->
                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                        aria-labelledby="nav-profile-tab">
                                        <div class="row">
                                            <!-- Left Details Caption -->
                                            <div class="col-xl-6">
                                                <div class="whats-news-single mb-40">
                                                    <div class="whates-img">
                                                        <img src="assets/img/gallery/whats_right_img2.png" alt="">
                                                    </div>
                                                    <div class="whates-caption">
                                                        <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                        <span>by Alice cloe - Jun 19, 2020</span>
                                                        <p>Struggling to sell one multi-million dollar home currently on
                                                            the market won’t stop actress and singer Jennifer Lopez.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Right single caption -->
                                            <div class="col-xl-6 col-lg-12">
                                                <div class="row">
                                                    <!-- single -->
                                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                        <div class="whats-right-single mb-20">
                                                            <div class="whats-right-img">
                                                                <img src="assets/img/gallery/whats_right_img1.png"
                                                                    alt="">
                                                            </div>
                                                            <div class="whats-right-cap">
                                                                <span class="colorb">FASHION</span>
                                                                <h4><a href="latest_news.html">Portrait of group of
                                                                        friends ting eat. market in.</a></h4>
                                                                <p>Jun 19, 2020</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                        <div class="whats-right-single mb-20">
                                                            <div class="whats-right-img">
                                                                <img src="assets/img/gallery/whats_right_img2.png"
                                                                    alt="">
                                                            </div>
                                                            <div class="whats-right-cap">
                                                                <span class="colorb">FASHION</span>
                                                                <h4><a href="latest_news.html">Portrait of group of
                                                                        friends ting eat. market in.</a></h4>
                                                                <p>Jun 19, 2020</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                        <div class="whats-right-single mb-20">
                                                            <div class="whats-right-img">
                                                                <img src="assets/img/gallery/whats_right_img3.png"
                                                                    alt="">
                                                            </div>
                                                            <div class="whats-right-cap">
                                                                <span class="colorg">FASHION</span>
                                                                <h4><a href="latest_news.html">Portrait of group of
                                                                        friends ting eat. market in.</a></h4>
                                                                <p>Jun 19, 2020</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                        <div class="whats-right-single mb-20">
                                                            <div class="whats-right-img">
                                                                <img src="assets/img/gallery/whats_right_img4.png"
                                                                    alt="">
                                                            </div>
                                                            <div class="whats-right-cap">
                                                                <span class="colorr">FASHION</span>
                                                                <h4><a href="latest_news.html">Portrait of group of
                                                                        friends ting eat. market in.</a></h4>
                                                                <p>Jun 19, 2020</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card three -->
                                    <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                        aria-labelledby="nav-contact-tab">
                                        <div class="row">
                                            <!-- Left Details Caption -->
                                            <div class="col-xl-6">
                                                <div class="whats-news-single mb-40">
                                                    <div class="whates-img">
                                                        <img src="assets/img/gallery/whats_right_img4.png" alt="">
                                                    </div>
                                                    <div class="whates-caption">
                                                        <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                        <span>by Alice cloe - Jun 19, 2020</span>
                                                        <p>Struggling to sell one multi-million dollar home currently on
                                                            the market won’t stop actress and singer Jennifer Lopez.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Right single caption -->
                                            <div class="col-xl-6 col-lg-12">
                                                <div class="row">
                                                    <!-- single -->
                                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                        <div class="whats-right-single mb-20">
                                                            <div class="whats-right-img">
                                                                <img src="assets/img/gallery/whats_right_img1.png"
                                                                    alt="">
                                                            </div>
                                                            <div class="whats-right-cap">
                                                                <span class="colorb">FASHION</span>
                                                                <h4><a href="latest_news.html">Portrait of group of
                                                                        friends ting eat. market in.</a></h4>
                                                                <p>Jun 19, 2020</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                        <div class="whats-right-single mb-20">
                                                            <div class="whats-right-img">
                                                                <img src="assets/img/gallery/whats_right_img2.png"
                                                                    alt="">
                                                            </div>
                                                            <div class="whats-right-cap">
                                                                <span class="colorb">FASHION</span>
                                                                <h4><a href="latest_news.html">Portrait of group of
                                                                        friends ting eat. market in.</a></h4>
                                                                <p>Jun 19, 2020</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                        <div class="whats-right-single mb-20">
                                                            <div class="whats-right-img">
                                                                <img src="assets/img/gallery/whats_right_img3.png"
                                                                    alt="">
                                                            </div>
                                                            <div class="whats-right-cap">
                                                                <span class="colorg">FASHION</span>
                                                                <h4><a href="latest_news.html">Portrait of group of
                                                                        friends ting eat. market in.</a></h4>
                                                                <p>Jun 19, 2020</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                        <div class="whats-right-single mb-20">
                                                            <div class="whats-right-img">
                                                                <img src="assets/img/gallery/whats_right_img4.png"
                                                                    alt="">
                                                            </div>
                                                            <div class="whats-right-cap">
                                                                <span class="colorr">FASHION</span>
                                                                <h4><a href="latest_news.html">Portrait of group of
                                                                        friends ting eat. market in.</a></h4>
                                                                <p>Jun 19, 2020</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- card fure -->
                                    <div class="tab-pane fade" id="nav-last" role="tabpanel"
                                        aria-labelledby="nav-last-tab">
                                        <div class="row">
                                            <!-- Left Details Caption -->
                                            <div class="col-xl-6">
                                                <div class="whats-news-single mb-40">
                                                    <div class="whates-img">
                                                        <img src="assets/img/gallery/whats_right_img2.png" alt="">
                                                    </div>
                                                    <div class="whates-caption">
                                                        <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                        <span>by Alice cloe - Jun 19, 2020</span>
                                                        <p>Struggling to sell one multi-million dollar home currently on
                                                            the market won’t stop actress and singer Jennifer Lopez.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Right single caption -->
                                            <div class="col-xl-6 col-lg-12">
                                                <div class="row">
                                                    <!-- single -->
                                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                        <div class="whats-right-single mb-20">
                                                            <div class="whats-right-img">
                                                                <img src="assets/img/gallery/whats_right_img1.png"
                                                                    alt="">
                                                            </div>
                                                            <div class="whats-right-cap">
                                                                <span class="colorb">FASHION</span>
                                                                <h4><a href="latest_news.html">Portrait of group of
                                                                        friends ting eat. market in.</a></h4>
                                                                <p>Jun 19, 2020</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                        <div class="whats-right-single mb-20">
                                                            <div class="whats-right-img">
                                                                <img src="assets/img/gallery/whats_right_img2.png"
                                                                    alt="">
                                                            </div>
                                                            <div class="whats-right-cap">
                                                                <span class="colorb">FASHION</span>
                                                                <h4><a href="latest_news.html">Portrait of group of
                                                                        friends ting eat. market in.</a></h4>
                                                                <p>Jun 19, 2020</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                        <div class="whats-right-single mb-20">
                                                            <div class="whats-right-img">
                                                                <img src="assets/img/gallery/whats_right_img3.png"
                                                                    alt="">
                                                            </div>
                                                            <div class="whats-right-cap">
                                                                <span class="colorg">FASHION</span>
                                                                <h4><a href="latest_news.html">Portrait of group of
                                                                        friends ting eat. market in.</a></h4>
                                                                <p>Jun 19, 2020</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                        <div class="whats-right-single mb-20">
                                                            <div class="whats-right-img">
                                                                <img src="assets/img/gallery/whats_right_img4.png"
                                                                    alt="">
                                                            </div>
                                                            <div class="whats-right-cap">
                                                                <span class="colorr">FASHION</span>
                                                                <h4><a href="latest_news.html">Portrait of group of
                                                                        friends ting eat. market in.</a></h4>
                                                                <p>Jun 19, 2020</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- card Five -->
                                    <div class="tab-pane fade" id="nav-nav-Sport" role="tabpanel"
                                        aria-labelledby="nav-Sports">
                                        <div class="row">
                                            <!-- Left Details Caption -->
                                            <div class="col-xl-6">
                                                <div class="whats-news-single mb-40">
                                                    <div class="whates-img">
                                                        <img src="assets/img/gallery/whats_news_details1.png" alt="">
                                                    </div>
                                                    <div class="whates-caption">
                                                        <h4><a href="#">Secretart for Economic Air
                                                                plane that looks like</a></h4>
                                                        <span>by Alice cloe - Jun 19, 2020</span>
                                                        <p>Struggling to sell one multi-million dollar home currently on
                                                            the market won’t stop actress and singer Jennifer Lopez.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Right single caption -->
                                            <div class="col-xl-6 col-lg-12">
                                                <div class="row">
                                                    <!-- single -->
                                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                        <div class="whats-right-single mb-20">
                                                            <div class="whats-right-img">
                                                                <img src="assets/img/gallery/whats_right_img1.png"
                                                                    alt="">
                                                            </div>
                                                            <div class="whats-right-cap">
                                                                <span class="colorb">FASHION</span>
                                                                <h4><a href="latest_news.html">Portrait of group of
                                                                        friends ting eat. market in.</a></h4>
                                                                <p>Jun 19, 2020</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                        <div class="whats-right-single mb-20">
                                                            <div class="whats-right-img">
                                                                <img src="assets/img/gallery/whats_right_img2.png"
                                                                    alt="">
                                                            </div>
                                                            <div class="whats-right-cap">
                                                                <span class="colorb">FASHION</span>
                                                                <h4><a href="latest_news.html">Portrait of group of
                                                                        friends ting eat. market in.</a></h4>
                                                                <p>Jun 19, 2020</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                        <div class="whats-right-single mb-20">
                                                            <div class="whats-right-img">
                                                                <img src="assets/img/gallery/whats_right_img3.png"
                                                                    alt="">
                                                            </div>
                                                            <div class="whats-right-cap">
                                                                <span class="colorg">FASHION</span>
                                                                <h4><a href="latest_news.html">Portrait of group of
                                                                        friends ting eat. market in.</a></h4>
                                                                <p>Jun 19, 2020</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                        <div class="whats-right-single mb-20">
                                                            <div class="whats-right-img">
                                                                <img src="assets/img/gallery/whats_right_img4.png"
                                                                    alt="">
                                                            </div>
                                                            <div class="whats-right-cap">
                                                                <span class="colorr">FASHION</span>
                                                                <h4><a href="latest_news.html">Portrait of group of
                                                                        friends ting eat. market in.</a></h4>
                                                                <p>Jun 19, 2020</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- End Nav Card -->
                                <?php
                    $sql1 = "SELECT * FROM user";
                    $result1 = mysqli_query($conn, $sql1) or die ("Query Failed");

                    if (mysqli_num_rows($result1) > 0) {
                        $total_record = mysqli_num_rows($result1);
                        $total_pages = ceil($total_record / $limit);
                        echo '<br>';
                        echo '<ul class="pagination justify-content-center">';

                        if ($pages > 1) {
                            echo '<li class="page-item"><a class="page-link" href="index.php?pages=' . ($pages - 1) . '">Previous</a></li>';
                        }
                        for ($i = 1; $i <= $total_pages; $i++) {
                            echo '<li class="page-item"><a class="page-link" href="index.php?pages=' . $i . '">' . $i . '</a></li>';
                        }
                        if ($pages < $total_pages) {
                            echo '<li class="page-item"><a class="page-link" href="index.php?pages=' . ($pages + 1) . '">Next</a></li>';
                        }
                        echo '</ul>';
                    }

                    ?>
                            </div>
                            
                        </div>
                    </div>

                    <!-- Banner -->
                    <div class="banner-one mt-20 mb-30">
                        <img src="assets/img/gallery/body_card1.png" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <!-- Flow Socail -->
                    <div class="single-follow mb-45">
                        <div class="single-box">
                            <div class="follow-us d-flex align-items-center">
                                <div class="follow-social">
                                    <a href="#"><img src="assets/img/news/icon-fb.png" alt=""></a>
                                </div>
                                <div class="follow-count">
                                    <span>8,045</span>
                                    <p>Fans</p>
                                </div>
                            </div>
                            <div class="follow-us d-flex align-items-center">
                                <div class="follow-social">
                                    <a href="#"><img src="assets/img/news/icon-tw.png" alt=""></a>
                                </div>
                                <div class="follow-count">
                                    <span>8,045</span>
                                    <p>Fans</p>
                                </div>
                            </div>
                            <div class="follow-us d-flex align-items-center">
                                <div class="follow-social">
                                    <a href="#"><img src="assets/img/news/icon-ins.png" alt=""></a>
                                </div>
                                <div class="follow-count">
                                    <span>8,045</span>
                                    <p>Fans</p>
                                </div>
                            </div>
                            <div class="follow-us d-flex align-items-center">
                                <div class="follow-social">
                                    <a href="#"><img src="assets/img/news/icon-yo.png" alt=""></a>
                                </div>
                                <div class="follow-count">
                                    <span>8,045</span>
                                    <p>Fans</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Most Recent Area -->
                    <div class="most-recent-area">
                        <!-- Section Tittle -->
                        <div class="small-tittle mb-20">
                            <h4>Most Recent</h4>
                        </div>
                        <!-- Details -->
                        <div class="most-recent mb-40">
                            <div class="most-recent-img">
                                <img src="assets/img/gallery/most_recent.png" alt="">
                                <div class="most-recent-cap">
                                    <span class="bgbeg">Vogue</span>
                                    <h4><a href="latest_news.html">What to Wear: 9+ Cute Work <br>
                                            Outfits to Wear This.</a></h4>
                                    <p>Jhon | 2 hours ago</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single -->
                        <div class="most-recent-single">
                            <div class="most-recent-images">
                                <img src="assets/img/gallery/most_recent1.png" alt="">
                            </div>
                            <div class="most-recent-capt">
                                <h4><a href="latest_news.html">Scarlett’s disappointment at latest accolade</a></h4>
                                <p>Jhon | 2 hours ago</p>
                            </div>
                        </div>
                        <!-- Single -->
                        <div class="most-recent-single">
                            <div class="most-recent-images">
                                <img src="assets/img/gallery/most_recent2.png" alt="">
                            </div>
                            <div class="most-recent-capt">
                                <h4><a href="latest_news.html">Most Beautiful Things to Do in Sidney with Your BF</a>
                                </h4>
                                <p>Jhon | 3 hours ago</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Whats New End -->
    <!--   Weekly2-News start -->
    <div class="weekly2-news-area pt-50 pb-30 gray-bg">
        <div class="container">
            <div class="weekly2-wrapper">
                <div class="row">
                    <!-- Banner -->

                </div>

                <!-- section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="small-tittle mb-30">
                        </div>
                    </div>
                </div>
                <!-- Slider -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="weekly2-news-active d-flex">
                            <!-- Single -->
                            <div class="weekly2-single">
                                <div class="weekly2-img">
                                </div>
                                <div class="weekly2-caption">

                                </div>
                            </div>
                            <!-- Single -->
                            <div class="weekly2-single">
                                <div class="weekly2-img">
                                </div>
                                <div class="weekly2-caption">

                                </div>
                            </div>
                            <!-- Single -->
                            <div class="weekly2-single">
                                <div class="weekly2-img">
                                </div>
                                <div class="weekly2-caption">

                                </div>
                            </div>
                            <!-- Single -->
                            <div class="weekly2-single">
                                <div class="weekly2-img">
                                </div>
                                <div class="weekly2-caption">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <!-- End Weekly-News -->
    <!--  Recent Articles start -->
    <div class="recent-articles pt-80 pb-80">
        <div class="container">
            <div class="recent-wrapper">
                <!-- section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-30">

                            <!--Recent Articles End -->
                            <!-- Start Video Area -->
                            <div class="youtube-area video-padding d-none d-sm-block">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="video-items-active">
                                                <div class="video-items text-center">
                                                    <video controls>
                                                        <source src="assets/video/news2.mp4" type="video/mp4">
                                                        Your browser does not support the video tag.
                                                    </video>
                                                </div>
                                                <div class="video-items text-center">
                                                    <video controls>
                                                        <source src="assets/video/news1.mp4" type="video/mp4">
                                                        Your browser does not support the video tag.
                                                    </video>
                                                </div>
                                                <div class="video-items text-center">
                                                    <video controls>
                                                        <source src="assets/video/news3.mp4" type="video/mp4">
                                                        Your browser does not support the video tag.
                                                    </video>
                                                </div>
                                                <div class="video-items text-center">
                                                    <video controls>
                                                        <source src="assets/video/news1.mp4" type="video/mp4">
                                                        Your browser does not support the video tag.
                                                    </video>
                                                </div>
                                                <div class="video-items text-center">
                                                    <video controls>
                                                        <source src="assets/video/news3.mp4" type="video/mp4">
                                                        Your browser does not support the video tag.
                                                    </video>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Start Video area-->
                        <!--   Weekly3-News start -->
                        <div class="weekly3-news-area pt-80 pb-130">
                            <div class="container">
                                <div class="weekly3-wrapper">
                                    <div class="row">

                                        <div class="col-lg-12">
                                            <div class="slider-wrapper">
                                                <!-- Slider -->
                                                <div class="row">

                                                    <div class="col-lg-12">
                                                        <div class="weekly3-news-active dot-style d-flex">
                                                            <div class="weekly3-single">
                                                                <div class="weekly3-img">
                                                                    <img src="assets/img/gallery/weekly2News1.png"
                                                                        alt="">
                                                                </div>
                                                                <div class="weekly3-caption">
                                                                    <h4><a href="Sport.php">What to Expect From
                                                                            the 2020 Oscar Nomin
                                                                            ations</a></h4>
                                                                    <p>19 Jan 2020</p>
                                                                </div>
                                                            </div>
                                                            <div class="weekly3-single">
                                                                <div class="weekly3-img">
                                                                    <img src="assets/img/gallery/weekly2News2.png"
                                                                        alt="">
                                                                </div>
                                                                <div class="weekly3-caption">
                                                                    <h4><a href="latest_news.html">What to Expect From
                                                                            the 2020 Oscar Nomin
                                                                            ations</a></h4>
                                                                    <p>19 Jan 2020</p>
                                                                </div>
                                                            </div>
                                                            <div class="weekly3-single">
                                                                <div class="weekly3-img">
                                                                    <img src="assets/img/gallery/weekly2News3.png"
                                                                        alt="">
                                                                </div>
                                                                <div class="weekly3-caption">
                                                                    <h4><a href="latest_news.html">What to Expect From
                                                                            the 2020 Oscar Nomin
                                                                            ations</a></h4>
                                                                    <p>19 Jan 2020</p>
                                                                </div>
                                                            </div>
                                                            <div class="weekly3-single">
                                                                <div class="weekly3-img">
                                                                    <img src="assets/img/gallery/weekly2News4.png"
                                                                        alt="">
                                                                </div>
                                                                <div class="weekly3-caption">
                                                                    <h4><a href="latest_news.html">What to Expect From
                                                                            the 2020 Oscar Nomin
                                                                            ations</a></h4>
                                                                    <p>19 Jan 2020</p>
                                                                </div>
                                                            </div>
                                                            <div class="weekly3-single">
                                                                <div class="weekly3-img">
                                                                    <img src="assets/img/gallery/weekly2News2.png"
                                                                        alt="">
                                                                </div>
                                                                <div class="weekly3-caption">
                                                                    <h4><a href="latest_news.html">What to Expect From
                                                                            the 2020 Oscar Nomin
                                                                            ations</a></h4>
                                                                    <p>19 Jan 2020</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Weekly-News -->
                        <!-- banner-last Start -->
                        <div class="banner-area gray-bg pt-90 pb-90">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-10 col-md-10">
                                        <div class="banner-one">

                                   <?php
                                    include "pagination.php";
                                   
                                   ?>


                                        </div>
                                    </div>
                                </div>
                            </div>
             

                        </div>
  
                        <!-- banner-last End -->

</main>

<!-- Search model Begin -->
<div class="search-model-box">
    <div class="d-flex align-items-center h-100 justify-content-center">
        <div class="search-close-btn">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Searching key.....">
        </form>
    </div>
</div>
<!-- Search model end -->




</body>

</html>

<?php
include "js.php";
include "footer.php";
?>;