<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduGlobal</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
body {
  background-image: url("/test/frontpage1.png");
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
</head>
<body>
<br>
<br>
<br>
<br>
<br>
<br>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Login
                    </div>
                    <div class="card-body">
                        <?php
                        if(isset($_POST['login'])) {
                            require_once "config.php";
                            $username = $_POST['username'];
                            $password = $_POST['password'];

                            $query = "SELECT * FROM users WHERE username='$username'";
                            $result = mysqli_query($conn, $query);

                            if(mysqli_num_rows($result) > 0) {
                                $row = mysqli_fetch_assoc($result);
                                if(password_verify($password, $row['password'])) {
                                    session_start();
                                    $_SESSION['username'] = $username;
                                    header("location: dashboard.php");
                                    exit;
                                } else {
                                    echo "<div class='alert alert-danger'>Invalid password</div>";
                                }
                            } else {
                                echo "<div class='alert alert-danger'>Invalid username</div>";
                            }
                        }
                        ?>
                        <form method="POST">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <button type="submit" name="login" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<footer style="position: fixed; bottom: 0; left: 50%; transform: translateX(-50%); text-align: center;">
    <p style="color: white; font-weight: bold;">Copyright TM Global © 2023</p>
</footer>

</body>
</html>
