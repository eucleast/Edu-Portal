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
  <title>Login Modal</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Custom CSS -->
  <style>
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
  </style>
</head>
<body>

  <!-- Button trigger login modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#loginModal">
    Login
  </button>

  <!-- Login Modal -->
  <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="loginModalLabel">Login</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <input type="email" class="form-control" id="inputEmail" placeholder="Email">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="inputPassword" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
