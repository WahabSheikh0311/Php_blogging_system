<?php
include "config.php";
include "header.php";
include "navbar.php";

?>

<style>
   .card {
      background-color: var(--secondary);
   }

   h4 a {
      margin-left: 75%;
   }
</style>

<div class="main">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

   <div class="container-fluid px-4 ">
      <h1 class="mt-4">Post</h1>
      <ol class="breadcrumb mb-4">
         <li class="breadcrumb-item active">Dashboard</li>
         <li class="breadcrumb-item active">post</li>
      </ol>
      <div class="row ">
         <div class="col-md-12">
            <div class="card">
               <div class="card-header ">
                  <h4>All Posts
                     <a href="add-post.php" class="btn btn-primary">Add Post</a>
                  </h4>
               </div>
               <div class="card-body">
                  <table class="content-table table table-dark table-striped">
                     <thead>
                        <tr>
                           <th>ID</th>
                           <th>Tittle</th>
                           <th>Category Name</th>
                           <th>Image</th>
                           <th>Status</th>
                           <th>Edit</th>
                           <th>Delete</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php

                       
            $limit = 3;
            $pages = isset($_GET['pages']) ? $_GET['pages'] : 1;
            $offset = ($pages - 1) * $limit;

                        $post = "SELECT * FROM post WHERE status != '2' LIMIT {$offset}, {$limit}";
                        $post_run = mysqli_query($conn, $post);
                        if (mysqli_num_rows($post_run) > 0) {
                           foreach ($post_run as $post) {
                        ?>
                              <tr>
                                 <td><?= $post['id'] ?></td>
                                 <td><?= $post['Tittle'] ?></td>
                                 <td><?= $post['Category_name'] ?></td>
                                 <td><img src="img/<?= $post['image'] ?>" width="60px" height="60px" /></td>
                                 <td><?= $post['status'] == '1' ? 'Hidden' : 'Visible' ?></td>
                                 <td>
                                    <a href="post-edit.php?id=<?= $post['id'] ?>" class="btn btn-success">Edit</a>
                                 </td>
                                 <td>
                                    <form action="post-delete.php" method= "POST">
                                    <button type="submit" name="post-delete" value="<?= $post['id'] ?>" class="btn btn-danger">Delete</button>
                                    </form>
                                 </td>
                              </tr>
                        <?php
                           }
                        } else {
                        ?>
                           <tr>
                              <td colspan="6">No Record Found</td>
                           </tr>
                        <?php
                        }
                        ?>
                     </tbody>
                  </table>
                  <?php
               // Pagination
               $sql1 = "SELECT * FROM user";
               $result1 = mysqli_query($conn, $sql1) or die ("Query Failed");

               if (mysqli_num_rows($result1) > 0) {
                  $total_record = mysqli_num_rows($result1);
                  $total_pages = ceil($total_record / $limit);
                  echo '<br>';
                  echo '<ul class="pagination justify-content-center">' ;
                  
                  if ($pages > 1) {
                     echo '<li class="page-item"><a class="page-link" href="All-Post.php?pages='.($pages - 1).'">Previous</a></li>';
                  }
                  for ($i = 1; $i <= $total_pages; $i++) {
                     echo '<li class="page-item"><a class="page-link" href="All-Post.php?pages='.$i.'">'.$i.'</a></li>';
                  }
                  if ($pages < $total_pages) {
                     echo '<li class="page-item"><a class="page-link" href="All-Post.php?pages='.($pages + 1).'">Next</a></li>';
                  }
                  echo '</ul>';
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
