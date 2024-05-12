<?php
include "config.php";
include "header.php";
include "navbar.php";

if (isset($_POST['post_update'])) {
    $post_id = mysqli_real_escape_string($conn, $_POST['post_id']);
    $category_id = mysqli_real_escape_string($conn, $_POST['category_id']); 
    $Tittle = mysqli_real_escape_string($conn, $_POST['Tittle']); 
    $Category_name = mysqli_real_escape_string($conn, $_POST['Category_name']); 
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $old_filename = mysqli_real_escape_string($conn, $_POST['old_image']);
    $image = $_FILES['image']['name']; 

    $update_filename = "";
    if(!empty($image)){
        $image_extension = pathinfo($image, PATHINFO_EXTENSION);
        $filename = time() . '.' . $image_extension;
        $update_filename = $filename;
    } else {
        $update_filename = $old_filename;
    }

    $status = isset($_POST['status']) && $_POST['status'] == 'on' ? '1' : '0';

    $query = "UPDATE post SET category_id='$category_id', Tittle='$Tittle', Category_name='$Category_name', description='$description', image='$update_filename', status='$status' WHERE id='$post_id'";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        if(file_exists('img/' . $old_filename)){
            unlink("img/" . $old_filename); 
        }
        if(!empty($image)){
            move_uploaded_file($_FILES['image']['tmp_name'], 'img/' . $update_filename);
        }
        $_SESSION['message'] = "Post Updated Successfully";
    } else {
        $_SESSION['message'] = "Something went wrong!";
    }
}
?>

<style>
    .card {
        background-color: var(--secondary);
        width: 60%;
        margin-left: 20%;
    }

    h4 a {
        margin-left: 90%;
        margin-top: -8%;
    }
</style>

<div class="main">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <div class="container-fluid px-4">
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <?php include "message.php"; ?>
                        <h4>Edit Post
                        <a href="All-Post.php" class="btn btn-primary">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <?php
                        if(isset($_GET['id'])){

                            $post_id = mysqli_real_escape_string($conn, $_GET['id']);
                            $post_query = "SELECT * FROM post WHERE id='$post_id' LIMIT 1";
                            $post_query_result = mysqli_query($conn,$post_query);

                            if(mysqli_num_rows($post_query_result) > 0){

                                $post_row = mysqli_fetch_assoc($post_query_result);
                        ?>
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="post_id" value="<?= $post_row['id'] ?>">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="">Category List</label>
                                    <?php
                                    $categories_query = "SELECT * FROM categories WHERE status = 0";
                                    $categories_run = mysqli_query($conn, $categories_query);
                                    if (mysqli_num_rows($categories_run) > 0) {
                                        ?>
                                        <select name="category_id" required class="form-control">
                                            <option value="">--Select Category--</option>
                                            <?php
                                            foreach ($categories_run as $categoriesitem) {
                                                ?>
                                                <option value="<?= $categoriesitem['id'] ?>" <?= $categoriesitem['id'] == $post_row['category_id'] ? 'selected' : '' ?>>
                                                    <?= $categoriesitem['name'] ?>
                                                </option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                    <?php
                                    } else {
                                        ?>
                                        <h5>No Category Available</h5>
                                    <?php
                                    }
                                    ?>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Tittle</label>
                                    <input type="text" name="Tittle" value="<?= $post_row['Tittle'] ?>" required class="form-control">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">category Name</label>
                                    <input type="text" name="Category_name" value="<?= $post_row['Category_name'] ?>" required class="form-control">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Description</label>
                                    <textarea name="description" required class="form-control" rows="6"><?= $post_row['description'] ?></textarea>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Post image</label>
                                    <input type="hidden" name="old_image" value="<?= $post_row['image'] ?>" />
                                    <input type="file" name="image" style="background-color:black;">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Status</label>
                                    <input type="checkbox" name="status" <?= $post_row['status'] == '1' ? 'checked' : '' ?> value="on">
                                </div>
                                <button type="submit" name="post_update" class="btn btn-primary">Update Post</button>
                            </div>
                        </form>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include "sidebar.php";
include "footer.php";
include "scripts.php";
?>
