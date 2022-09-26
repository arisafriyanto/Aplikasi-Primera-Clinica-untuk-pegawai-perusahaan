
<?php 

$nrp = $_SESSION['nrp'];

// foreach ($nrp as $hasil_nrp) {
//     $hasil_nrp;
// }


?>

      <!-- Main Content -->
    <div class="main-content">
    <section class="section">
        <div class="section-header">
        <h1>Barcode</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="index.html">Dashboard</a></div>
            <div class="breadcrumb-item">Barcode</div>
        </div>
        </div>


        <div class="row sortable-card text-center">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card card-primary">
                  <div class="card-header " style="float: left;">
                    <h4>Barcode</h4>
                  </div>
                  <div class="card-body">
                      
    <img src="../../assets/library/barcode.php?text=<?= $nrp; ?>&print=true&size=100" alt="<?= $nrp; ?>">

                  </div>
                </div>
              </div>
        </div>


    </section>
    </div>

