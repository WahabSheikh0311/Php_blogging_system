<?php
include "config.php";
include "header.php";
include "navbar.php";

if (isset($_POST['post_add'])) {
    $category_id = mysqli_real_escape_string($conn, $_POST['category_id']);
    $Tittle = mysqli_real_escape_string($conn, $_POST['Tittle']);
    $Category_name = mysqli_real_escape_string($conn, $_POST['Category_name']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $image = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    $image_extension = pathinfo($image, PATHINFO_EXTENSION);
    $filename = time() . '.' . $image_extension;
    $status = isset($_POST['status']) ? 1 : 0;

    $query = "INSERT INTO post (category_id, Tittle, Category_name, description, image, status) VALUES ('$category_id', '$Tittle', '$Category_name', '$description', '$filename', $status)";
    $query_run = mysqli_query($conn, $query);
    if ($query_run) {
        move_uploaded_file($image_tmp, 'img/' . $filename);
        $_SESSION['message'] = "Post Created Successfully";
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
                        <h4>Add New Post</h4>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
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
                                                <option value="<?= $categoriesitem['id'] ?>"><?= $categoriesitem['name'] ?></option>
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
                                    <input type="text" name="Tittle" required class="form-control">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Category Name</label>
                                    <input type="text" name="Category_name" required class="form-control">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Description</label>
                                    <textarea name="description" required class="form-control" rows="6"></textarea>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Post image</label>
                                    <input type="file" name="image" style="background-color:black;" required>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Status</label>
                                    <input type="checkbox" name="status" value="on">
                                </div>
                                <button type="submit" name="post_add" class="btn btn-primary" >Save Post</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include "sidebar.php";
        include "footer.php";
        include "scripts.php";
        ?>
    </div>
</div>
