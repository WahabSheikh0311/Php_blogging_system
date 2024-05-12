<?php
if(isset($_POST['post-delete'])){
    include "config.php"; 
    
    $post_id = $_POST['post-delete'];
    
   
    $check_img_query = "SELECT * FROM post WHERE id='$post_id' LIMIT 1"; 
    $img_res = mysqli_query($conn, $check_img_query);
    
   
    if($img_res){
        
        $res_data = mysqli_fetch_assoc($img_res);
        $image = $res_data['image'];

        
        $query = "DELETE FROM post WHERE id='$post_id' LIMIT 1";
        $query_run = mysqli_query($conn, $query);

       
        if($query_run){
            // Check if the image file exists and delete it
            if(file_exists('../uploads/posts/'.$image)){
                unlink("../uploads/posts/".$image);
            }
            $_SESSION['message'] = "Post Deleted Successfully"; 
        } else {
            $_SESSION['message'] = "Error: Unable to delete post.";
        }
    } 

   
    header("Location: All-Post.php");
    exit();
}
?>
