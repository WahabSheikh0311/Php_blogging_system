<?php
include "header.php";

$conn = mysqli_connect("localhost:3307", "root", "", "blooging_website") or die ("Connection Failed : " . mysqli_connect_error());

if (isset($_GET['post_id'])) {
    $post_id = $_GET['post_id'];

    // Fetch the post details based on post_id
    $query = "SELECT * FROM post WHERE id = $post_id";
    $result = mysqli_query($conn, $query);
    $post = mysqli_fetch_assoc($result);

    if ($post) {
        ?>
        <br><br>
        <div class="post" style="max-width: 800px; margin: 0 auto; text-align: left;">
            <img src="darkpan/img/<?= $post['image'] ?>" alt="" style="max-width: 100%; height: auto; border: 1px solid #ccc; border-radius: 5px;">
            <h2><?= $post['Tittle'] ?></h2>
            <p><?= $post['Category_name'] ?></p>
            <p>Posted on: <?= $post['created_at'] ?></p>
            <p><?= $post['description'] ?></p>
        </div>


                            
        <div class="comment-box">
            <h2>Leave a Comment</h2>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                <input type="hidden" name="post_id" value="<?= $post_id ?>"> <!-- Hidden field to store post_id -->
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="comment">Comment:</label>
                    <textarea id="comments" name="comments" rows="4" required></textarea>
                </div>
                <button type="submit">Submit</button>
            </form>
        </div>
        <?php
    } else {
        echo "Post not found.";
    }
}




if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $post_id = $_POST['post_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comments = $_POST['comments'];

    
    $insert_query = "INSERT INTO comments (post_id, name, email, comments) VALUES ('$post_id', '$name', '$email', '$comments')";
    $insert_result = mysqli_query($conn, $insert_query);

    if ($insert_result) {
        echo "Comment submitted successfully.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}


include "js.php";
include "footer.php";
?>
