<?php

$carikode = mysqli_query($conn, "select  max(kode_perusahaan) from users");
$datakode = mysqli_fetch_array($carikode);
if ($datakode) {
  $nilaikode = substr($datakode[0], 1);
  $kode = (int) $nilaikode;
  $kode = $kode + 1;
  $hasilkode = "P" . str_pad($kode, 4, "0", STR_PAD_LEFT);
} else {
  $hasilkode = "P0001";
}

?>
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Perusahaan</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="index.html">Dashboard</a></div>
        <div class="breadcrumb-item">Perusahaan</div>
      </div>
    </div>

    <div class="section-body">
      <h2 class="section-title">Data Perusahaan</h2>
      <p class="section-lead">Data Perusahaan terdiri dari nama perusahaan dan password untuk login karyawan.
      </p>

      <div class="row">
        <div class="col-12 col-md-6 col-lg-12">

          <button type="button" class="btn mr-2 mb-2 btn-primary" data-toggle="modal" data-target="#InsertModalUsers">
            <i class="fas fa-user-plus"></i> Insert Perusahaan
          </button>

          <div class="card">
            <div class="card-body">
              <div class="card-title">
                <h5>Table Perusahaan</h5>
              </div>

              <div class="table-responsive">
                <table class="mb-0 table table-hover" id="datatables">
                  <thead>
                    <tr style="text-align: center;">
                      <th scope="col">No.</th>
                      <th scope="col">Kode Perusahaan</th>
                      <th scope="col">Username</th>
                      <th scope="col">Password</th>
                      <th scope="col">Nama Perusahaan</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>

                  <tbody>

                    <?php

                    $no = 1;
                    $result = tampil("select * from users where hak_akses = 'Perusahaan' ");

                    foreach ($result as $data) :

                    ?>

                      <tr style="text-align: center;">
                        <td><?= $no++; ?></td>
                        <td><?= $data['kode_perusahaan']; ?></td>
                        <td><?= $data['username']; ?></td>
                        <td><?= $data['password']; ?></td>
                        <td><?= $data['nama_perusahaan']; ?></td>

                        <td>
                          <a href="?page=users&action=update&id_users=<?= $data['id_users']; ?>" class="btn btn-success mb-2">
                            <i class="fas fa-edit"></i> Update
                          </a>

                          <a onclick="return confirm('Yakin Ingin Menghapus Data..??')" href="?page=users&action=delete&id_users=<?= $data['id_users']; ?>" class="btn btn-danger mb-2">
                            <i class="fas fa-trash"></i> Delete
                          </a>
                        </td>
                      </tr>

                    <?php endforeach; ?>


                  </tbody>
                </table>
              </div>

            </div>
          </div>

        </div>
      </div>


    </div>
</div>


<?php

if (isset($_POST['insert'])) {
  $username =  $_POST['username'];
  $password = $_POST['password'];
  $nama_perusahaan = $_POST['nama_perusahaan'];


  $sql = mysqli_query($conn, "INSERT INTO users (username, password, nama_lengkap, hak_akses, kode_perusahaan, nama_perusahaan, nrp) VALUES 
                ('$username', '$password', '', 'Perusahaan', '$hasilkode', '$nama_perusahaan', '')");

  if ($sql) {
?>
    <script type="text/javascript">
      alert("Data Perusahaan Berhasil Ditambahkan");
      window.location.href = "?page=users";
    </script>
<?php
  }
}

?>







<!-- Modal Insert Users-->
<div class="modal fade" id="InsertModalUsers" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="InsertModalLabelUsers">Insert Perusahaan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form action="" method="post" class="needs-validation" novalidate="">

          <div class="position-relative form-group">
            <label for="username" class="">Username</label>
            <input name="username" id="username" type="text" class="form-control" tabindex="1" required>
          </div>

          <div class="position-relative form-group">
            <label for="password" class="">Password</label>
            <input name="password" id="password" type="password" class="form-control" tabindex="2" required>
          </div>

          <div class="position-relative form-group">
            <label for="nama_perusahaan" class="">Nama Perusahaan</label>
            <input name="nama_perusahaan" id="nama_perusahaan" type="text" class="form-control" tabindex="3" required>
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" name="insert" value="Insert Data" class="btn btn-primary">
        </form>

      </div>

    </div>
  </div>
</div>