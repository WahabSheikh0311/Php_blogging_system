<?php
include "header.php";
?>

<style>
    .body {
        background-color: whitesmoke;
        margin: 0 auto;
        padding: 0 20px;
        max-width: 1300px;
        box-sizing: border-box;
    }

    p {
        letter-spacing: 2px;
    }

    .main {
        display: flex;
        grid-template-columns: repeat(2, 1fr);
        grid-template-rows: repeat(3, 200px);
        margin-right: -15px;
        margin-left: -15px;
        margin-left: 2%;
    }

    .whats-news-single {
        width: 30%;
        margin: 15px;
        border-radius: 5px;
    }

    .whates-img img {
        width: 100%;
        height: 40vh;
        vertical-align: middle;
        border-style: none;
        object-fit: cover;
        transition: all .4s ease-out 0s;
    }

    .whates-img img:hover {
        transform: scale(1.05);
        /* Increase size on hover */
    }

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

    h1 {
        background-color: yellowgreen;
        letter-spacing: 5px;
        text-align: center;
    }
</style>

<div class="body">
    <div>
        <h1>Sports All Post</h1>
    </div>
    <div class="main">
        <?php
        $conn = mysqli_connect("localhost:3307", "root", "", "blooging_website") or die ("Connection Failed: " . mysqli_connect_error());

        $post_query = "SELECT * FROM post WHERE Category_name = 'Fashion' AND status != '2'";
        $post_result = mysqli_query($conn, $post_query);

        if (mysqli_num_rows($post_result) > 0) {
            $count = 0;
            while ($post = mysqli_fetch_assoc($post_result)) {
                ?>
                <div class="whats-news-single">
                    <div class="whates-img">
                        <img src="darkpan/img/<?= $post['image'] ?>" alt="">
                    </div>
                    <div class="whates-caption whates-caption2">
                        <p>
                            <?= $post['Category_name'] ?>
                        </p>
                        <h4><a href="blog.php?post_id=<?= $post['id'] ?>">
                                <?= $post['Tittle'] ?>
                            </a></h4>
                        <span>Posted on:
                            <?= $post['created_at'] ?>
                        </span>
                        <p class="description">
                            <?= $post['description'] ?>
                        </p><br>
                        <a href="blog.php?post_id=<?= $post['id'] ?>" class="see-more-btn">Read More</a>
                    </div>
                </div>
                <?php
                $count++;
                if ($count % 3 == 0) {
                    echo '</div><div class="main">';
                }
            }
        } else {
            echo "No posts available in the Technology category.";
        }
        ?>
    </div>
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
</div>

<?php
include "js.php";
include "footer.php";
?>
