<?php
 include "config.php";
 include "header.php";
 include "navbar.php";


if (isset($_POST['Add_category'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    
   
    $navbar_status = isset($_POST['navbar_status']) ? '1' : '0';
    $status = isset($_POST['status']) ? '1' : '0';

    $query = "INSERT INTO categories (name, description, navbar_status, status) 
              VALUES ('$name', '$description', '$navbar_status', '$status')";
    
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        $_SESSION['message'] = "Category Added Successfully";
        
    } else {
        $_SESSION['message'] = "Something went wrong!";
        
    }
}

?>

<style>
     
     .card{
        background-color: var(--secondary);
        margin-left: 20%;
        width: 50%;
        margin-top: ;
     }
     
    
</style>

<div class="main">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <div class="container-fluid px-4 ">
        <h1 class="mt-4">Category</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
            <li class="breadcrumb-item active">category</li>
            <?php
            include "message.php";
            ?>
        </ol>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Add Category
                        <a href="All-category.php" class="btn btn-danger float-end" >BACK</a>

                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                        <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for=""> Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Description</label>
                                    <textarea  name="description" class="form-control" rows="4"></textarea>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">navbar status</label>
                                    <input type="checkbox" name="navbar_status" width="70px" height="70px" />
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">status</label>
                                    <input type="checkbox" name="status" width="70px" height="70px" />
                                </div>
                                
                            </div>
                            <input type="submit" name="Add_category" class="btn btn-primary" value="Save Category" required />
                        </form>
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