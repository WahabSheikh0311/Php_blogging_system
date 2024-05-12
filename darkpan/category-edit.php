<?php
include "config.php";
include "header.php";
include "navbar.php";

// Check if the form is submitted
if (isset($_POST['category_update'])) {
    // Sanitize inputs
    $categories_id = mysqli_real_escape_string($conn, $_POST['categories_id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $navbar_status = isset($_POST['navbar_status']) ? 1 : 0;
    $status = isset($_POST['status']) ? 1 : 0;

    // Update query
    $query = "UPDATE categories SET name='$name', description='$description', navbar_status='$navbar_status', status='$status' WHERE id='$categories_id'";
    $query_run = mysqli_query($conn, $query);
    
    if ($query_run) {
        $_SESSION['message'] = "Category Updated Successfully";
        
    } else {
        $_SESSION['message'] = "Failed to update category";
    }
}

?>

<style>
    .card {
        background-color: var(--secondary);
        margin-left: 20%;
        width: 50%;
        margin-top: ;
    }
</style>

<div class="main">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <div class="container-fluid px-4 ">
        <h1 class="mt-4">Edit</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
            <li class="breadcrumb-item active">Edit</li>
            <?php include "message.php"; ?>
        </ol>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Category
                            <a href="All-category.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <?php
                        if (isset($_GET['id'])) {
                            $category_id = $_GET['id'];
                            $category_edit = "SELECT * FROM categories WHERE id='$category_id' LIMIT 1";
                            $category_run = mysqli_query($conn, $category_edit);

                            if (mysqli_num_rows($category_run) > 0) {
                                $row = mysqli_fetch_array($category_run);
                        ?>
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                                    <input type="hidden" name="categories_id" value="<?= $row['id'] ?>">
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <label for=""> Name</label>
                                            <input type="text" name="name" value="<?= $row['name'] ?>" class="form-control" placeholder="">
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="">Description</label>
                                            <textarea name="description" class="form-control" rows="4"><?= $row['description'] ?></textarea>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">navbar status</label>
                                            <input type="checkbox" name="navbar_status" <?= $row['navbar_status'] == '1' ? 'checked' : '' ?> />
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">status</label>
                                            <input type="checkbox" name="status" <?= $row['status'] == '1' ? 'checked' : '' ?> />
                                        </div>
                                    </div>
                                    <input type="submit" name="category_update" class="btn btn-primary" value="Update Category" required />
                                </form>
                            <?php
                            } else {
                            ?>
                                <h4>No Record Found</h4>
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
