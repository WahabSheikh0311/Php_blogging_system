<?php
  include "config.php";
 include "header.php";
 include "navbar.php";
 include "message.php";
?>

<style>
     
     .card{
        background-color: var(--secondary);
     }
     h4 a{
        margin-left: 70%;
     }
</style>

<div class="main">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <div class="container-fluid px-4 ">
        <h1 class="mt-4">Category</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
            <li class="breadcrumb-item active">Category</li>
            
        </ol>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                <div class="card-header" >
            
            <h4>All Category
               <a href="add-category.php" class="btn btn-primary" >Add Category</a>
            </h4>
             </div>
       <div class="card-body" >
       <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">


       
            
        <table class="content-table table table-dark table-striped">
        <thead>
            <tr>
                          <th>ID</th>
                          <th> Category Name</th>
                          <th>Status</th>
                          <th>Edit</th>
                          <th>Delete</th>
            </tr>
                      </thead>
                      <tbody>
                      <?php
        $categories = "SELECT * FROM categories WHERE status!='2'";
        $categories_run = mysqli_query($conn,$categories);

        if(mysqli_num_rows($categories_run) > 0){
              
            foreach($categories_run as $item){
                
                ?>
                        <tr>
                        <td> <?=$item['id'] ?></td>
                            <td><?=$item['name'] ?></td>
                            <td>
                                <?= $item['status'] == '1'? 'hidden' :'vissible' ?>
                            </td>
                            <td>
         <a href="category-edit.php?id=<?= $item['id'] ?>" class="btn btn-danger" ></i>Edit</a>
                            </td>
                            <td>
                             <a href="category-delete.php" name="category-delete" value= "<?= $item['id'] ; ?>'" class="btn btn-info" >Delete</a>
                            </td>
                            
                        </tr>

                        <?php
                           }
                           }else{
            
                          ?>
                         <tr>
                            <td colspan="5">No Record Found</td>
                        </tr>
                       <?php
                     }
       
       
       
                      ?>

                      </tbody>
                  </table>



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