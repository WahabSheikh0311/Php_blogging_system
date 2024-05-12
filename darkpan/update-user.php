<?php
 
 include "header.php";
 include "navbar.php";

 if(isset($_POST['submit'])){
    include "config.php";
    
    $userid =mysqli_real_escape_string($conn, $_POST['user_id']);
    $fname =mysqli_real_escape_string($conn, $_POST['f_name']);
    $user = mysqli_real_escape_string($conn, $_POST['username']);
    $email =mysqli_real_escape_string($conn, $_POST['email']);
    // $password = mysqli_real_escape_string($conn, md5 ($_POST['password']));
    $role = mysqli_real_escape_string($conn, $_POST['role']);

     $sql = "UPDATE user SET first_name = '{$fname}' ,  username = '{$user}', email = '{$email}', role = '{$role}' WHERE user_id ='{$userid}'";
    if(mysqli_query($conn,$sql)){
            //  header(" Location:  http://localhost/news-master/darkpan/users.php");
            
        }
    }


?>

<style>
     
     .card{
        background-color: var(--secondary);
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
      <div class="row" >
       <div class="col-md-12" >
    
        <div class="card" >
        <div class="card-header" >
            
            <h4>Modify User Details</h4>
             </div>
             <?php
                include "config.php";
                $user_id = $_GET['id'];
                $sql ="SELECT * FROM user WHERE user_id = '{$user_id}'";
                $result = mysqli_query($conn,$sql) or die ("Query Faild.");

               if(mysqli_num_rows($result) > 0){

                while($row = mysqli_fetch_assoc($result)){

                
                
                ?>
       <div class="card-body" >
        <table class="content-table table table-dark table-striped">

        <form  action="<?php $_SERVER['PHP_SELF'];    ?>" method ="POST">
        <div class="col-md-6 mb-3">
                          <input type="hidden" name="user_id"  class="form-control" value="<?php echo $row['user_id'] ; ?>" placeholder="" >
                      </div>
            <div class="row">
            
                <div class="col-md-6 mb-3">
                    <label for="">First Name</label>
                    <input type="text" name="f_name" class="form-control" value="<?php echo $row['first_name'] ; ?>" placeholder="" > 
                    </div>
                    <div class="col-md-6 mb-3">
                    <label for="">Username</label>
                    <input type="text" name="username" class="form-control" value="<?php echo $row['username'] ; ?>" placeholder="" >
                    </div>
                    <div class="col-md-6 mb-3">
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control" value="<?php echo $row['email'] ; ?>" placeholder="" > 
                    </div>
                    
                    <div class="col-md-6 mb-3">
                    <label>User Role</label>
                          <select class="form-control" name="role" value="<?php echo $row['role']; ?>">
                          <?php
                          
                          
                          if($row['role'] == 1){
                                  echo "<option value='0'>normal User</option>
                              <option value='1' selected>Admin</option>";
                               }else{
                                  echo  "<option value='0'selected>normal User</option>
                              <option value='1' >Admin</option>";
                               }
                               ?>
                              
                          </select>
                      </div>
            </div>
            <input type="submit" name="submit" class="btn btn-primary" value="Update" required />

        </form>
                <?php
                
                }

               }
                ?>



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