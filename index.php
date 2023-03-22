<?php
session_start();

// Check if user is not logged in
if(isset($_SESSION['username'])) {
    // Redirect to login page
    header("location: dashboard.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<style>
body {
  background-image: url("/test/frontpage1.png");
  background-repeat: no-repeat;
  background-size: cover;

  #loginModal .modal-dialog {
      max-width: 400px;
    }

    #loginModal .modal-header,
    #loginModal .modal-body {
      text-align: center;
    }

    #loginModal .modal-body input {
      margin-bottom: 10px;
    }
}

</style>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" id="loginModalLabel" data-toggle="modal" data-target="#loginModal" href="#">Login</a>
                </li>
            </ul>
        </div>
    </nav>

<!-- Login Modal -->
  <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="loginModalLabel">Log In</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
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
                <label class="form-label">Username</label>
              <input style="width: 70%; text-align: center;" type="username" class="form-control" id="username" name="username" placeholder="Username">
            </div>
            <div class="form-group">
                <label class="form-label">Password</label>
              <input style="width: 70%; text-align: center;" type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
            <button style="width: 25%;" type="submit" name="login" class="btn btn-primary btn-block">Login</button>
          </form>
        </div>
      </div>
    </div>
  </div>

<!-- Login Modal -->
<!-- Button trigger login modal 
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#loginModal">
    Login
  </button> -->

<h1 style="text-align: center; color: white;">WELCOME TO EDUGLOBAL</h1>

<!-- Carousel -->
<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: First slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#555" dy=".3em">First slide</text></svg>
        </div>
        <div class="carousel-item">
          <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Second slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#666"></rect><text x="50%" y="50%" fill="#444" dy=".3em">Second slide</text></svg>
        </div>
        <div class="carousel-item">
          <svg class="bd-placeholder-img bd-placeholder-img-lg d-block w-100" width="800" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Third slide" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#555"></rect><text x="50%" y="50%" fill="#333" dy=".3em">Third slide</text></svg>
        </div>
      </div>
      <button hidden="hidden" class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button hidden="hidden" class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
<!-- Carousel -->

<br>
<br>
<br>
<br>
<br>
<br>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
<!-- Carousel script -->
    <script>
        const myCarouselElement = document.querySelector('#myCarousel')

const carousel = new bootstrap.Carousel(myCarouselElement, {
  interval: 2000,
  touch: false
})
    </script>
</body>
</html>
