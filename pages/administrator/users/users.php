
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Admin</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="index.html">Dashboard</a></div>
              <div class="breadcrumb-item">Admin</div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">Data Admin</h2>
            <p class="section-lead">Data Admin terdiri dari nama Admin dan hak akses aplikasi ini.
            </p>

            <div class="row">
              <div class="col-12 col-md-6 col-lg-12">

            <button type="button" class="btn mr-2 mb-2 btn-primary" data-toggle="modal" data-target="#InsertModalUsers">
                <i class="fas fa-user-plus"></i> Insert Admin
            </button>

                <div class="card">
                  <div class="card-body">
                  <div class="card-title">
                    <h5>Table Admin</h5>
                  </div>

                  	<div class="table-responsive">
                    <table class="mb-0 table table-hover" id="datatables">
                      <thead>
                        <tr style="text-align: center;">
                          <th scope="col">No.</th>
                          <th scope="col">Username</th>
                          <th scope="col">Password</th>
                          <th scope="col">Nama Lengkap</th>
                          <th scope="col">Hak Akses</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      
                      <tbody>
                      
                        <?php 
                    
                        $no = 1;
                        $result = tampil("select * from users where hak_akses = 'Admin' ");
                        
                        foreach($result as $data) :

                        ?>

                        <tr style="text-align: center;">
                          <td><?= $no++; ?></td>
                          <td><?= $data['username']; ?></td>
                          <td><?= $data['password']; ?></td>
                          <td><?= $data['nama_lengkap']; ?></td>
                          <td><?= $data['hak_akses']; ?></td>
                          
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

            if(isset($_POST['insert'])) {
                $username =  htmlspecialchars($_POST['username']);
                $password = $_POST['password'];
                $nama_lengkap = htmlspecialchars(ucwords($_POST['nama_lengkap']));
                $hak_akses = $_POST['hak_akses'];
                    

                $sql = mysqli_query($conn, "INSERT INTO users (username, password, nama_lengkap, hak_akses, kode_perusahaan, nama_perusahaan, nrp) VALUES ('$username', '$password', '$nama_lengkap', '$hak_akses', '', '', '')");
                    
                if($sql) {
                    ?> 
                        <script type="text/javascript">
                            alert("Data Admin Berhasil Ditambahkan");
                            window.location.href="?page=users";
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
                <h5 class="modal-title" id="InsertModalLabelUsers">Insert Admin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="" method="post" class="needs-validation" novalidate="">

                    <div class="position-relative form-group">
                        <label for="username" class="">Username</label>
                        <input name="username" id="username"  type="text" class="form-control" tabindex="1" required>
                    </div>

                    <div class="position-relative form-group">
                        <label for="password" class="">Password</label>
                        <input name="password" id="password"  type="password" class="form-control" tabindex="2" required>
                    </div>
                    
                    <div class="position-relative form-group">
                        <label for="nama_lengkap" class="">Nama Lengkap</label>
                        <input name="nama_lengkap" id="nama_lengkap" type="text" class="form-control" tabindex="3" required>
                    </div>

	                <div class="position-relative form-group">
                      <label for="hak_akses" class="">Hak Akses</label>
                      <input name="hak_akses" id="hak_akses" type="text" class="form-control" tabindex="4" value="Admin" required readonly>
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