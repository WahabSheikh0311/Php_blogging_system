<?php
include "config.php";
include "All-category.php";

if (isset($_POST['category_delete'])) {
    $category_id = $_POST['category_delete'];
    
    // Define your delete query here
    $query = "UPDATE categories set status= '2' WHERE id=' $category_id' LIMIT 1";
    
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        $_SESSION['message'] = "Category Deleted Successfully";
       
        exit(0);
    } else {
        $_SESSION['message'] = "Something went wrong";
        
        exit(0);
    }
}
?>
