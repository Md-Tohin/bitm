<?php
if (isset($_GET['reset_btn'])) {
    $_SESSION['email'] = $_GET['email'];
    $_SESSION['password'] = $_GET['password'];
    header("location: dashboard.php");
}
?>

<?php include "pages/header.php" ?>

    <div class="container">
        <div class="row mt-5">
            <h1 class="text-center text-danger my-5">Reset Form</h1>
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

                    <div class="mb-4 mt-4">
                        <label for="confirm_password" class="form-label">Confirm Password</label>
                        <input type="Password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Enter Confirm password" required>
                    </div>

                    <input type="submit" class="btn btn-primary mb-4" name="reset_btn" value="Reset Password">
                </form>
            </div>
        </div>
    </div>

<?php include "pages/footer.php" ?>