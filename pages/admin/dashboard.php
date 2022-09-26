
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Dashboard</h1>
          </div>
          <div class="row">

          <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1 card-primary">
                <div class="card-icon bg-danger">
                  <i class="fas fa-fire"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Dashboard</h4>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1 card-danger">
                <div class="card-icon bg-primary">
                  <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Perusahaan</h4>
                  </div>
                  <div class="card-body">
                    <?php  

                      $sql = mysqli_query($conn, "select * from users where hak_akses='Perusahaan'");
                      
                      echo mysqli_num_rows($sql);
                    
                    ?>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

