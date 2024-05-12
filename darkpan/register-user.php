<?php
include "config.php";
include "header.php";
include "navbar.php";


if(isset($_POST['save'])){
    include "config.php";

    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $user = mysqli_real_escape_string($conn, $_POST['user']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, md5 ($_POST['password']));
    $role = mysqli_real_escape_string($conn, $_POST['role']);

    $sql = "SELECT username FROM user WHERE username = '{$user}'";

    $result = mysqli_query($conn,$sql) or die("Query Failed.");

    if(mysqli_num_rows($result) > 0){
        echo "<p style='color:red;text-align:center;margin: 10px 0;'>Username Already Exists</p>";
    }else{
        $sql1 = "INSERT INTO user (first_name, username, email, password, role)
            VALUES ('{$fname}','{$user}','{$email}','{$password}','{$role}')";

        if(mysqli_query($conn,$sql1)){
            
        }
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
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Add User
                        <a href="users.php" class="btn btn-danger float-end" >BACK</a>

                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                        <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="">First Name</label>
                                    <input type="text" name="fname" class="form-control" placeholder="">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Username</label>
                                    <input type="text" name="user" class="form-control" placeholder="">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Email</label>
                                    <input type="text" name="email" class="form-control" placeholder="">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="">Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label>User Role</label>
                                    <select class="form-control" name="role">
                                        <option value="0">Normal User</option>
                                        <option value="1">Admin</option>
                                    </select>
                                </div>
                            </div>
                            <input type="submit" name="save" class="btn btn-primary" value="Save" required />
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
