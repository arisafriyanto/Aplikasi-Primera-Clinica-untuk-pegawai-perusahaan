<?php 

  session_start();
  
  include "../../functions.php";

  if(!isset($_SESSION['Admin'])) {
    header("location: ../../index.php");
  }


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Primera Clinica</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="../../node_modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="../../node_modules/weathericons/css/weather-icons.min.css">
  <link rel="stylesheet" href="../../node_modules/weathericons/css/weather-icons-wind.min.css">
  <link rel="stylesheet" href="../../node_modules/summernote/dist/summernote-bs4.css">

  <!-- Template CSS -->
  <link href="../../assets/DataTables/datatables.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../../assets/css/style.css">
  <link rel="stylesheet" href="../../assets/css/components.css">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
            
          </div>
        </form>
        <ul class="navbar-nav navbar-right">
          
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="../../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, <?php echo $_SESSION['username'] ?></div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title"><?php echo $_SESSION['username'] ?></div>
              <div class="dropdown-divider"></div>
              <a href="../../logout.php" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>


      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.php"><img src="../../assets/img/loro.png" width="90%"></a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.php"><img src="../../assets/img/dua.png"></a>
          </div>
          <ul class="sidebar-menu">

            <li class="menu-header">Dashboard</li>
              <li>
                <a href="index.php" class="nav-link">
                  <i class="fas fa-fire"></i>
                  <span>Dashboard</span>
                </a>
              </li>


              <li>
                <a href="?page=users" class="nav-link">
                  <i class="fas fa-user"></i>
                  <span>Perusahaan</span>
                </a>
              </li>
                
          </ul>
        </aside>
      </div>



            <?php 

            @$page = $_GET['page'];
            @$action = $_GET['action'];

            if($page == "") {
                      include "dashboard.php";
            }else if($page  == "users") {
              if($action == "") {
                include "users/users.php";
              }else if($action == "update") {
                include "users/update.php";
              }else if($action == "delete") {
                include "users/delete.php";
              }
            }

            ?>



        
              </div>
            </div>
          </div>
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; <?= date("Y"); ?> <div class="bullet">arisafriyanto
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="../../assets/js/stisla.js"></script>

  <!-- JS Libraies -->
  <script src="../../node_modules/simpleweather/jquery.simpleWeather.min.js"></script>
  <script src="../../node_modules/chart.js/dist/Chart.min.js"></script>
  <script src="../../node_modules/jqvmap/dist/jquery.vmap.min.js"></script>
  <script src="../../node_modules/jqvmap/dist/maps/jquery.vmap.world.js"></script>
  <script src="../../node_modules/summernote/dist/summernote-bs4.js"></script>
  <script src="../../node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

  <!-- Template JS File -->
  <script src="../../assets/js/scripts.js"></script>
  <script src="../../assets/js/custom.js"></script>
  
  <!-- Page Specific JS File -->
  <script src="../../assets/js/page/index-0.js"></script>

  
  
  <script src="../../assets/DataTables/datatables.min.js"></script>


<script type="text/javascript">
    $(document).ready(function() {
        $('#datatables').DataTable();
    });
</script>

</body>
</html>
