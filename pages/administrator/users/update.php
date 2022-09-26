<?php 

	if(!isset($_GET['id_users'])) {
		header("location: ?page=users");
	}

	$id_users = $_GET['id_users'];

	$sql = mysqli_query($conn, "select * from users where id_users= ".$id_users);

	if(mysqli_num_rows($sql) < 1) {
		header("location: ?page=users");
	}

    $data = mysqli_fetch_assoc($sql);
    

?>

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
            <h2 class="section-title">Update Admin</h2>
            <p class="section-lead">Update admin untuk mengubah data admin.
            </p>
            
            <form action="" method="post" class="needs-validation" novalidate="">
            <input type="hidden" name="id_users" value="<?=$data['id_users'];?>">

            <div class="row">
                

            <div class="form-group col-12 col-md-6 col-lg-6">
                      <label for="username">Username</label>
                      <input id="username" type="text" class="form-control" name="username" value="<?= $data['username']; ?>" tabindex="1" required>
                    </div>


                    <div class="form-group col-12 col-md-6 col-lg-6">
                      <label for="password">Password</label>
                      <input id="password" type="text" class="form-control" name="password" value="<?= $data['password']; ?>" tabindex="2" required>
                    </div>


                    <div class="form-group col-12 col-md-6 col-lg-6">
                    <label for="nama_lengkap">Nama Lengkap</label>
                    <input id="nama_lengkap" type="text" class="form-control" name="nama_lengkap" value="<?= $data['nama_lengkap']; ?>" tabindex="3" required>
                    </div>


                    <div class="form-group col-12 col-md-6 col-lg-6">
	                    <label for="hak_akses" class="">Hak Akses</label>
                      <input name="hak_akses" id="hak_akses" type="text" class="form-control" tabindex="4" value="Admin" required readonly>
                    </div>


                    <input type="submit" name="update" value="Update Data" class="ml-3 btn btn-primary">

                    </form>




                    <?php 
			
      if(isset($_POST['update'])) {

        $id_users 				= $_POST['id_users'];
        $username 		= htmlspecialchars($_POST['username']);
        $password 	= $_POST['password'];
        $nama_lengkap 		= htmlspecialchars(ucwords($_POST['nama_lengkap']));
        $hak_akses		= $_POST['hak_akses'];

        
          
        $update = mysqli_query($conn, "update users set username='$username', password='$password', nama_lengkap='$nama_lengkap', hak_akses='$hak_akses' where id_users= ".$id_users);
  
        if($update) {
          ?> 
                  <script type="text/javascript">
                      alert("Data Admin Berhasil Diupdate");
                      window.location.href="?page=users";
                  </script>
              <?php
          }else{
            ?> 
                <script type="text/javascript">
                    alert("Data Admin Gagal Diupdate");
                    window.location.href="?page=users";
                </script>
            <?php
          }

          }
    
    ?>


            </div>
          </div>
        </section>
      </div>