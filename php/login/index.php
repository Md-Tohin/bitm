<?php

session_start();

isset($_SESSION['email']) ? $db_email=$_SESSION['email'] : $db_email="admin@gmail.com";
isset($_SESSION['password']) ? $db_pass=$_SESSION['password'] : $db_pass="admin";

if (isset($_GET['login_btn'])) { 

   $inp_email = $_GET['email'];
   $inp_pass = $_GET['password'];

   if ($db_email == $inp_email && $db_pass == $inp_pass) {
        header("location: dashboard.php?message=success");
   } else {
        $message = "<div class='col-md-4 mx-auto mt-5'>
                <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                <strong>Email or Password are not Valid!</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
        </div>";
        echo $message;
   }
   
}



?>

<?php include "pages/header.php" ?>

    <div class="container">
        <div class="row mt-5">
            <h1 class="text-center text-danger my-5">Login Form</h1>
            <div class="col-md-5 mx-auto  Larger shadow">
                <form action="" method="GET">

                    <div class="mb-3 mt-4">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required>
                    </div>

                    <div class="mb-4 mt-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="Password" class="form-control" name="password" id="password" placeholder="Enter password" required>
                    </div>

                    <input type="submit" class="btn btn-success mb-4" name="login_btn" value="Login">

                    <a href="reset.php" class="btn btn-primary mb-4">Reset Password </a>
                </form>
            </div>
        </div>
    </div>

<?php include "pages/footer.php" ?>