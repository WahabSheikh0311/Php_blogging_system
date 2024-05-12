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
      margin-left: 70%;
   }
</style>


<div class="main">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

   <div class="container-fluid px-4 ">
      <h1 class="mt-4">Users</h1>
      <ol class="breadcrumb mb-4">
         <li class="breadcrumb-item active">Dashboard</li>
         <li class="breadcrumb-item active">users</li>
      </ol>
      <div class="row">
         <div class="col-md-12">
            <?php
            include "config.php";

            $limit = 3;
            $pages = isset($_GET['pages']) ? $_GET['pages'] : 1;
            $offset = ($pages - 1) * $limit;

            $sql = "SELECT * FROM `user` ORDER BY user_id DESC LIMIT {$offset}, {$limit}";
            $result = mysqli_query($conn, $sql) or die ("Query Failed.");

            if (mysqli_num_rows($result) > 0) {
               ?>
               <div class="card">
                  <div class="card-header">
                     <h4>Register User
                        <a href="register-user.php" class="btn btn-primary">Add Admin</a>
                     </h4>
                  </div>
                  <div class="card-body">
                     <table class="content-table table table-dark table-striped">
                        <thead>
                           <th>S.No.</th>
                           <th>User Name</th>
                           <th>Email</th>
                           <th>Role</th>
                           <th>Edit</th>
                           <th>Delete</th>
                        </thead>
                        <tbody>
                           <?php
                           while ($row = mysqli_fetch_assoc($result)) {
                              ?>
                              <tr>
                                 <td class='id'>
                                    <?php echo $row['user_id']; ?>
                                 </td>
                                 <td>
                                    <?php echo $row['username']; ?>
                                 </td>
                                 <td>
                                    <?php echo $row['email']; ?>
                                 </td>
                                 <td>
                                    <?php echo ($row['role'] == 1) ? "Admin" : "Normal"; ?>
                                 </td>
                                 <td class='edit'><a href='update-user.php?id=<?php echo $row["user_id"]; ?>'><i
                                          class="fas fa-edit"></i></a></td>
                                 <td class='delete'><a href='delete-user.php?id=<?php echo $row["user_id"]; ?>'><i
                                          class="fa-solid fa-delete-left"></i></a></td>
                              </tr>
                              <?php
                           }
                           ?>
                        </tbody>
                     </table>
                  </div>
               </div>
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
                     echo '<li class="page-item"><a class="page-link" href="users.php?pages='.($pages - 1).'">Previous</a></li>';
                  }
                  for ($i = 1; $i <= $total_pages; $i++) {
                     echo '<li class="page-item"><a class="page-link" href="users.php?pages='.$i.'">'.$i.'</a></li>';
                  }
                  if ($pages < $total_pages) {
                     echo '<li class="page-item"><a class="page-link" href="users.php?pages='.($pages + 1).'">Next</a></li>';
                  }
                  echo '</ul>';
               }
            }
            ?>
         </div>
      </div>
   </div>
</div>

<?php
include "sidebar.php";
include "footer.php";
include "scripts.php";
?>
