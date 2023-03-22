<?php
session_start();

// Check if user is not logged in
if(!isset($_SESSION['username'])) {
    // Redirect to login page
    header("location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<style>
.dropdown-submenu {
  position: relative;
}

.dropdown-submenu .dropdown-menu {
  top: 0;
  left: 100%;
  margin-top: -1px;
}
</style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Inventory
          </button>
          <ul class="dropdown-menu">
            <li class="dropdown-submenu">
                <a class="dropdown-item" href="#">Handover Documents</span></a>
            </li>
            <li class="dropdown-submenu">
                <a class="test" tabindex="-1" href="#">Products <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li class="dropdown-submenu">
                    <a class="test" href="#">IPLC <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">IPLC</a></li>
                      <li><a class="dropdown-item" href="#">IEPL</a></li>
                      <li><a class="dropdown-item" href="#">Backhaul</a></li>
                      <li><a class="dropdown-item" href="#">Transit</a></li>
                      <li><a class="dropdown-item" href="#">Interconnect</a></li>
                      <li><a class="dropdown-item" href="#">IRU</a></li>
                      <li class="dropdown-submenu">
                        <a href="#">Circuit List <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Vodafone</a></li>
                          <li><a class="dropdown-item" href="#">Google</a></li>
                          <li><a class="dropdown-item" href="#">Microsoft</a></li>
                          <li><a class="dropdown-item" href="#">GITN</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a class="test" tabindex="-1" href="#">Metro-E <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li class="dropdown-submenu">
                        <a href="#">NID <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">HRF</a></li>
                          <li><a class="dropdown-item" href="#">Raisecom</a></li>
                        </ul>
                      </li>
                      <li class="dropdown-submenu">
                        <a href="#">UPE <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Alcatel 7210</a></li>
                          <li><a class="dropdown-item" href="#">Alcatel 7520</a></li>
                          <li><a class="dropdown-item" href="#">Huawei</a></li>
                          <li><a class="dropdown-item" href="#">ZTE</a></li>
                        </ul>
                      </li>
                      <li><a class="dropdown-item" tabindex="-1" href="#">Express 1.0/2.0</a></li>
                      <li><a class="dropdown-item" tabindex="-1" href="#">Guidlines</a></li>
                    </ul>
                  </li>
                  <li><a class="dropdown-item" tabindex="-1" href="#">Leased Line</a></li>
                  <li><a class="dropdown-item" tabindex="-1" href="#">Voice</a></li>
                </ul>
            </li>
            <li class="dropdown-submenu">
                <a class="dropdown-item" href="#">Handy Apps <span class="caret"></span></a>
            </li>
            <li class="dropdown-submenu">
                <a class="dropdown-item" href="#">E-Learning <span class="caret"></span></a>
            </li>
          </ul>
        </div>
        <div class="collapse navbar-collapse" id="navbarNav">
            <form class="d-flex" role="search" style="width:30%;">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
        <div>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/test/logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <p>Welcome, <?php echo $_SESSION['username']; ?>!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script>
    $(document).ready(function(){
      $('.dropdown-submenu a.test').on("click", function(e){
        $(this).next('ul').toggle();
        e.stopPropagation();
        e.preventDefault();
      });
    });
    </script>
</body>
</html>
