<?php
// Start session if not already started
if (session_status() == PHP_SESSION_NONE) {
    //session_start();
}

include("db.php"); // Assuming this file contains your database connection

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Sanitize inputs to prevent SQL injection
    $email = mysqli_real_escape_string($con, $email);
    $password = mysqli_real_escape_string($con, $password);

    // Query to check if admin exists with provided credentials
    $query = "SELECT * FROM admin WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) == 1) {
        // Admin exists, set session variable and redirect to admin dashboard
        $_SESSION['admin_email'] = $email;
        mysqli_free_result($result); // Free the result set
        mysqli_close($con); // Close database connection
        header("Location: admin/insert-product.php"); // Redirect to admin dashboard page
        exit();
    } else {
        // Admin doesn't exist with provided credentials, show error message
        echo "<script>alert('Invalid email or password');</script>";
    }
}
?>

<?php
$active = "Login";
include("db.php");
include("functions.php");
include("header.php");
?>

<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="index.php"><i class="fa fa-home"></i> Home</a>
                    <span>Login</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Form Section Begin -->

<!-- Register Section Begin -->
<div class="register-login-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="login-form" style="background: darkgrey;">
                    <h2 style="color: white;">Admin Login</h2>
                    <form action="adminlog.php" method="post">
                        <div class="group-input">
                            <label for="username">Email *</label>
                            <input type="text" id="username" name="email" required>
                            <div id="email_error"></div>
                        </div>
                        <div class="group-input">
                            <label for="pass">Password *</label>
                            <input type="password" id="pass" name="password" required>
                            <div id="password_error"></div>
                        </div>

                        <button name="login" class="site-btn login-btn" style="background: orange;">Sign In</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Register Form Section End -->

<?php
include('footer.php');
?>

<style>
    .login-form {
        background-color: #f9f9f9;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .login-form h2 {
        margin-bottom: 20px;
        color: #333;
    }

    .group-input {
        margin-bottom: 20px;
    }

    .group-input label {
        color: #555;
        font-weight: 500;
    }

    .group-input input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        outline: none;
    }

    .group-input input:focus {
        border-color: #66afe9;
    }

    .login-btn {
        background-color: #66afe9;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .login-btn:hover {
        background-color: #5a90d8;
    }

    .switch-login {
        margin-top: 10px;
        text-align: center;
    }

    .or-login {
        color: #66afe9;
    }
</style>
