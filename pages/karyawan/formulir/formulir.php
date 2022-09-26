
<?php 

    $nrp = $_SESSION['nrp'];

?>


      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Formulir</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="index.php">Dashboard</a></div>
              <div class="breadcrumb-item">Formulir</div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">Formulir Medical Check Up</h2>
            <p class="section-lead">Formulir medical check up untuk mengecek kondisi kesehatan pasien.
            </p>


          <?php 
          
              $query1 = mysqli_query($conn, "select * from jenis_pemeriksaan where nrp='$nrp' ");

              $jenis_pemeriksaan = mysqli_fetch_assoc($query1);
              $darah = $jenis_pemeriksaan['darah'];
              $urine = $jenis_pemeriksaan['urine'];
              $visus = $jenis_pemeriksaan['visus'];
              $bb_tb = $jenis_pemeriksaan['bb_tb'];
              $dokter = $jenis_pemeriksaan['dokter'];
              $gigi = $jenis_pemeriksaan['gigi'];
              $ekg = $jenis_pemeriksaan['ekg'];
              $audio = $jenis_pemeriksaan['audio'];
              $tekanan_darah = $jenis_pemeriksaan['tekanan_darah'];
              $spirometri = $jenis_pemeriksaan['spirometri'];
              $treadmill = $jenis_pemeriksaan['treadmill'];
              $rontgen = $jenis_pemeriksaan['rontgen'];

          
          ?>


            <div class="row">
              <div class="col-12 col-md-6 col-lg-12">


	            <div class="card card-primary">

	              <div class="card-title mb-0 mt-2">
	            	<img src="../../assets/img/satu.png">
	            	<h6 class="ml-3 mb-4">OH - IH - MCU SERVICES</h6>
	              	<h5 style="text-align: center;">Formulir Medical Check Up</h5>
	              </div>

	              <div class="card-body">
	                <form method="POST" action="" class="needs-validation" novalidate="">

	                  <div class="row">


	                    <div class="form-group col-12 mb-2">
                        <div class="alert alert-info text-center">
                          <b>JENIS PEMERIKSAAN</b>
                        </div>
	                    </div>




              <div class="ml-0 mr-0 col-6 col-md-6 col-lg-6">
                <div class="card card-primary">
                  <div class="card-header">                    


                        <div class="col-auto mr-1">
                          <label class="colorinput">
                            <input name="darah" type="checkbox" value="Darah" class="colorinput-input" <?php echo ($darah=='Darah')?"checked":""; ?>  />
                            <span class="colorinput-color bg-danger"></span>
                          </label>
                        </div>
                  		<p class="mt-2 ml-2">Darah</p>

                        <div class="col-auto mr-1">
                          <label class="colorinput">
                            <input name="urine" type="checkbox"
                            value="Urine" class="colorinput-input" <?php echo ($urine=='Urine')?"checked":""; ?>  />
                            <span class="colorinput-color bg-warning"></span>
                          </label>
                        </div>
                        <p class="mt-2 ml-2">Urine</p>

                        <div class="col-auto mr-1">
                          <label class="colorinput">
                            <input name="visus" type="checkbox"value="Visus" class="colorinput-input" <?php echo ($visus=='Visus')?"checked":""; ?>  />
                            <span class="colorinput-color bg-success"></span>
                          </label>
                        </div>
                        <p class="mt-2 ml-2">Visus</p>

                        <div class="col-auto mr-1">
                          <label class="colorinput">
                            <input name="bb_tb" type="checkbox" value="BB-TB" class="colorinput-input" <?php echo ($bb_tb=='BB-TB')?"checked":""; ?>  />
                            <span class="colorinput-color bg-info"></span>
                          </label>
                        </div>
                        <p class="mt-2 ml-2">BB-TB</p>


                  </div>
                </div>
              </div>






              <div class="ml-0 mr-0 col-6 col-md-6 col-lg-6">
                <div class="card card-primary">
                  <div class="card-header">


                        <div class="col-auto mr-1">
                          <label class="colorinput">
                            <input name="dokter" type="checkbox"value="Dokter" class="colorinput-input" <?php echo ($dokter=='Dokter')?"checked":""; ?>  />
                            <span class="colorinput-color bg-danger"></span>
                          </label>
                        </div>
                  		<p class="mt-2 ml-2">Dokter</p>

                        <div class="col-auto mr-1">
                          <label class="colorinput">
                            <input name="gigi" type="checkbox"value="Gigi" class="colorinput-input" <?php echo ($gigi=='Gigi')?"checked":""; ?>  />
                            <span class="colorinput-color bg-warning"></span>
                          </label>
                        </div>
                        <p class="mt-2 ml-3">Gigi</p>

                        <div class="col-auto mr-1">
                          <label class="colorinput">
                            <input name="ekg" type="checkbox"value="EKG" class="colorinput-input" <?php echo ($ekg=='EKG')?"checked":""; ?>  />
                            <span class="colorinput-color bg-success"></span>
                          </label>
                        </div>
                        <p class="mt-2 ml-3 ">EKG</p>

                        <div class="col-auto mr-1">
                          <label class="colorinput">
                            <input name="audio" type="checkbox"value="Audio" class="colorinput-input" <?php echo ($audio=='Audio')?"checked":""; ?>  />
                            <span class="colorinput-color bg-info"></span>
                          </label>
                        </div>
                        <p class="mt-2 ml-2">Audio</p>


                  </div>
                </div>
              </div>





              <div class="ml-0 mr-0 col-6 col-md-6 col-lg-6">
                <div class="card card-primary">
                  <div class="card-header">


                        <div class="col-auto mr-1">
                          <label class="colorinput">
                            <input name="tekanan_darah" type="checkbox" value="Tekanan Darah" class="colorinput-input" <?php echo ($tekanan_darah=='Tekanan Darah')?"checked":""; ?>  />
                            <span class="colorinput-color bg-danger"></span>
                          </label>
                        </div>
                  		<p class="mt-2 text-center">Tekanan Darah</p>

                        <div class="col-auto mr-1">
                          <label class="colorinput">
                            <input name="spirometri" type="checkbox"value="Spirometri" class="colorinput-input" <?php echo ($spirometri=='Spirometri')?"checked":""; ?>  />
                            <span class="colorinput-color bg-primary"></span>
                          </label>
                        </div>
                        <p class="mt-2 text-center">Spirometri</p>


                  </div>
                </div>
              </div>







              <div class="ml-0 mr-0 col-6 col-md-6 col-lg-6">
                <div class="card card-primary">
                  <div class="card-header">


                        <div class="col-auto mr-1">
                          <label class="colorinput">
                            <input name="treadmill" type="checkbox"value="Treadmill" class="colorinput-input" <?php echo ($treadmill=='Treadmill')?"checked":""; ?>  />
                            <span class="colorinput-color bg-danger"></span>
                          </label>
                        </div>
                  		<p class="mt-2 text-center">Treadmill</p>

                        <div class="col-auto mr-1">
                          <label class="colorinput">
                            <input name="rontgen" type="checkbox"value="Rontgen" class="colorinput-input" <?php echo ($rontgen=='Rontgen')?"checked":""; ?>  />
                            <span class="colorinput-color bg-primary"></span>
                          </label>
                        </div>
                        <p class="mt-2 text-center">Rontgen</p>


                  </div>
                </div>
              </div>





	                    <div class="form-group col-12 mb-2">
                          <div class="alert alert-primary  text-center">
                            <b>WAJIB DIISI OLEH KARYAWAN SEBELUM MEDICAL CHECK UP</b>
                          </div>
                      </div>
                      



          <?php 
          
              $query2 = mysqli_query($conn, "select * from data_karyawan where nrp='$nrp' ");
              
              $data_karyawan = mysqli_fetch_assoc($query2);
              $jenis_mcu = $data_karyawan['jenis_mcu'];
          
          ?>



              <div class="ml-0 mr-0 col-12 col-md-12 col-lg-12">
                <div class="card card-primary">
                  <div class="card-header">
            					<p class="mt-2">JENIS MCU</p>

                        <div class="col-auto ml-0">
                          <label class="colorinput">
                            <input name="jenis_mcu" type="radio" value="Pra Kerja" class="colorinput-input" <?php echo ($jenis_mcu=='Pra Kerja')?"checked":""; ?>  />
                            <span class="colorinput-color bg-danger"></span>
                          </label>
                        </div>
                        <p class="mt-2">Pra Kerja</p>

                        <div class="col-auto ml-3">
                          <label class="colorinput">
                            <input name="jenis_mcu" type="radio" value="Anuual/Periodik" class="colorinput-input" <?php echo ($jenis_mcu=='Anuual/Periodik')?"checked":""; ?>  />
                            <span class="colorinput-color bg-secondary"></span>
                          </label>
                        </div>
                        <p class="mt-2">Anuual/Periodik</p>

                        <div class="col-auto ml-3">
                          <label class="colorinput">
                            <input name="jenis_mcu" type="radio" value="Purmakarya" class="colorinput-input" <?php echo ($jenis_mcu=='Purmakarya')?"checked":""; ?>  />
                            <span class="colorinput-color bg-info"></span>
                          </label>
                        </div>
                        <p class="mt-2">Purmakarya</p>


                  </div>
                </div>
              </div>



                    <div class="form-group col-12 col-md-12 col-lg-12">
                      <label for="nama">Nama</label>
                      <input id="nama" type="text" class="form-control" name="nama" value="<?= $data_karyawan['nama']; ?>" required>
                    </div>


                    <div class="form-group col-6 col-md-6 col-lg-6">
                      <label for="nrp">Nrp</label>
                      <input id="nrp" type="number" class="form-control" name="nrp" value="<?= $data_karyawan['nrp']; ?>" required readonly>
                    </div>


                    <div class="form-group col-6 col-md-6 col-lg-6">
                      <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                            <option value="<?= $data_karyawan['jenis_kelamin']; ?>"><?= $data_karyawan['jenis_kelamin']; ?></option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>


                    <div class="form-group col-6 col-md-6 col-lg-6">
                      <label for="tgl_lahir">Tgl.Lahir/Usia</label>
                      <input id="tgl_lahir" type="date" class="form-control" name="tgl_lahir"  value="<?= $data_karyawan['tgl_lahir']; ?>" required>
                    </div>


                    <div class="form-group col-6 col-md-6 col-lg-6">
                      <label for="bagian">Bagian</label>
                      <input id="bagian" type="text" class="form-control" name="bagian" value="<?= $data_karyawan['bagian']; ?>" required>
                    </div>


                    <div class="form-group col-6 col-md-6 col-lg-6">
                      <label for="jabatan">Jabatan</label>
                      <input id="jabatan" type="text" class="form-control" name="jabatan" value="<?= $data_karyawan['jabatan']; ?>" required>
                    </div>


                    <div class="form-group col-6 col-md-6 col-lg-6">
                      <label for="departemen">Departemen</label>
                      <input id="departemen" type="text" class="form-control" name="departemen" value="<?= $data_karyawan['departemen']; ?>" required>
                    </div>


                    <div class="form-group col-6 col-md-6 col-lg-6">
                      <label for="nama_perusahaan">Nama Perusahaan</label>
                      <input id="nama_perusahaan" type="text" class="form-control" name="nama_perusahaan" value="<?= $_SESSION['nama_perusahaan']; ?>" value="<?= $data_karyawan['nama_perusahaan']; ?>" required readonly>
                    </div>


                    <div class="form-group col-6 col-md-6 col-lg-6">
                      <label for="puasa">Puasa</label>
                      <input id="puasa" type="text" class="form-control" name="puasa" value="<?= $data_karyawan['puasa']; ?>" required>
                    </div>


                    <div class="form-group col-6 col-md-6 col-lg-6">
                      <label for="tgl_mcu">Tgl.MCU</label>
                      <input id="tgl_mcu" type="date" class="form-control" name="tgl_mcu" value="<?= $data_karyawan['tgl_mcu']; ?>" required>
                    </div>


                    <div class="form-group col-6 col-md-6 col-lg-6">
                      <label for="no_hp">No.Hp</label>
                      <input id="no_hp" type="number" class="form-control" name="no_hp" value="<?= $data_karyawan['no_hp']; ?>" required>
                    </div>


<div class="form-group col-6 col-md-6 col-lg-6">
  <label for="username">Username</label>
  <input id="username" type="text" class="form-control" name="username" value="<?= $data_karyawan['username']; ?>" required>
</div>


<div class="form-group col-6 col-md-6 col-lg-6">
  <label for="password">Password</label>
  <input id="password" type="text" class="form-control" name="password" value="<?= $data_karyawan['password']; ?>" required>
</div>



                    <div class="form-group col-12 col-md-12 col-lg-12">
                      <label for="keluhan_sekarang">Keluhan Sekarang</label>
                      <input id="keluhan_sekarang" type="text" class="form-control" name="keluhan_sekarang" value="<?= $data_karyawan['keluhan_sekarang']; ?>" required>
                    </div>



                    <div class="form-group col-12 mb-2">
                      <div class="alert alert-success text-center">
                        <b>RIWAYAT BAHAYA LINGKUNGAN KERJA</b>
                      </div>
                    </div>









                  <?php 
                          
                          $query3 = mysqli_query($conn, "select * from bahaya_lingkungan_kerja where nrp='$nrp' ");
                          
                          $bahaya_lingkungan_kerja = mysqli_fetch_assoc($query3);
                      
                      ?>





                  <div class="card-body col-12 col-md-12 col-lg-12">

                  <div class="table-responsive">
                        <table class="">
                          
                            <tbody>
                              <tr>
                                <td>


                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">


                        <input type="text" class="form-control text-center" value="Bising" style="width: 160px; color: red;" readonly>

                      </div>
                        <input type="text" class="form-control" style="width: 80px;" name="jam_bising" value="<?= $bahaya_lingkungan_kerja['jam_bising']; ?>">
                        

                        <input type="text" class="form-control text-center" value="Jam/Hari, Selama" style="width: 190px;" readonly>
                    
                        
                        <input type="text" class="form-control" style="width: 80px;" name="tahun_bising" value="<?= $bahaya_lingkungan_kerja['tahun_bising']; ?>">

                        <span class="input-group-text">
                        	Tahun	
                        </span> 

                      </div>
                    </div>





                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">


                        <input type="text" class="form-control text-center" value="Getaran" style="width: 160px; color: red;" readonly>

                      </div>
                        <input type="text" class="form-control" style="width: 80px;" name="jam_getaran" value="<?= $bahaya_lingkungan_kerja['jam_getaran']; ?>">
                        

                        <input type="text" class="form-control text-center" value="Jam/Hari, Selama" style="width: 190px;" readonly>
                    
                        
                        <input type="text" class="form-control" style="width: 80px;" name="tahun_getaran" value="<?= $bahaya_lingkungan_kerja['tahun_getaran']; ?>">

                        <span class="input-group-text">
                        	Tahun	
                        </span>  

                      </div>
                    </div>







                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">


                        <input type="text" class="form-control text-center" value="Zat Kimia" style="width: 160px; color: red;" readonly>

                      </div>
                        <input type="text" class="form-control" style="width: 80px;" name="jam_zat_kimia" value="<?= $bahaya_lingkungan_kerja['jam_zat_kimia']; ?>">
                        

                        <input type="text" class="form-control text-center" value="Jam/Hari, Selama" style="width: 190px;" readonly>
                    
                        
                        <input type="text" class="form-control" style="width: 80px;" name="tahun_zat_kimia" value="<?= $bahaya_lingkungan_kerja['tahun_zat_kimia']; ?>">

                        <span class="input-group-text">
                        	Tahun	
                        </span>  

                      </div>
                    </div>





                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">


                        <input type="text" class="form-control text-center" value="Panas" style="width: 160px; color: red;" readonly>

                      </div>
                        <input type="text" class="form-control" style="width: 80px;" name="jam_panas" value="<?= $bahaya_lingkungan_kerja['jam_panas']; ?>">
                        

                        <input type="text" class="form-control text-center" value="Jam/Hari, Selama" style="width: 190px;" readonly>
                    
                        
                        <input type="text" class="form-control" style="width: 80px;" name="tahun_panas" value="<?= $bahaya_lingkungan_kerja['tahun_panas']; ?>">

                        <span class="input-group-text">
                        	Tahun	
                        </span>  

                      </div>
                    </div>





                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">


                        <input type="text" class="form-control text-center" value="Asap" style="width: 160px; color: red;" readonly>

                      </div>
                        <input type="text" class="form-control" style="width: 80px;" name="jam_asap" value="<?= $bahaya_lingkungan_kerja['jam_asap']; ?>">
                        

                        <input type="text" class="form-control text-center" value="Jam/Hari, Selama" style="width: 190px;" readonly>
                    
                        
                        <input type="text" class="form-control" style="width: 80px;" name="tahun_asap" value="<?= $bahaya_lingkungan_kerja['tahun_asap']; ?>">

                        <span class="input-group-text">
                        	Tahun	
                        </span>  

                      </div>
                    </div>






                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">


                        <input type="text" class="form-control text-center" value="Gerakan Berulang" style="width: 160px; color: red;" readonly>

                      </div>
                        <input type="text" class="form-control" style="width: 80px;" name="jam_gerakan_berulang" value="<?= $bahaya_lingkungan_kerja['jam_gerakan_berulang']; ?>">
                        

                        <input type="text" class="form-control text-center" value="Jam/Hari, Selama" style="width: 190px;" readonly>
                    
                        
                        <input type="text" class="form-control" style="width: 80px;" name="tahun_gerakan_berulang" value="<?= $bahaya_lingkungan_kerja['tahun_gerakan_berulang']; ?>">

                        <span class="input-group-text">
                        	Tahun	
                        </span>  

                      </div>
                    </div>







                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">


                        <input type="text" class="form-control text-center" value="Monitor Komputer" style="width: 160px; color: red;" readonly>

                      </div>
                        <input type="text" class="form-control" style="width: 80px;" name="jam_monitor_komputer" value="<?= $bahaya_lingkungan_kerja['jam_monitor_komputer']; ?>">
                        

                        <input type="text" class="form-control text-center" value="Jam/Hari, Selama" style="width: 190px;" readonly>
                    
                        
                        <input type="text" class="form-control" style="width: 80px;" name="tahun_monitor_komputer" value="<?= $bahaya_lingkungan_kerja['tahun_monitor_komputer']; ?>">

                        <span class="input-group-text">
                        	Tahun	
                        </span>  

                      </div>
                    </div>







                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">


                        <input type="text" class="form-control text-center" value="Mendorong/Menarik" style="width: 160px; color: red;" readonly>

                      </div>
                        <input type="text" class="form-control" style="width: 80px;" name="jam_mendorong_menarik" value="<?= $bahaya_lingkungan_kerja['jam_mendorong_menarik']; ?>">
                        

                        <input type="text" class="form-control text-center" value="Jam/Hari, Selama" style="width: 190px;" readonly>
                    
                        
                        <input type="text" class="form-control" style="width: 80px;" name="tahun_mendorong_menarik" value="<?= $bahaya_lingkungan_kerja['tahun_mendorong_menarik']; ?>">

                        <span class="input-group-text">
                        	Tahun	
                        </span>  

                      </div>
                    </div>







                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">


                        <input type="text" class="form-control text-center" value="Angkat Beban Berat" style="width: 160px; color: red;" readonly>

                      </div>
                        <input type="text" class="form-control" style="width: 80px;" name="jam_angkat_beban_berat" value="<?= $bahaya_lingkungan_kerja['jam_angkat_beban_berat']; ?>">
                        

                        <input type="text" class="form-control text-center" value="Jam/Hari, Selama" style="width: 190px;" readonly>
                    
                        
                        <input type="text" class="form-control" style="width: 80px;" name="tahun_angkat_beban_berat" value="<?= $bahaya_lingkungan_kerja['tahun_angkat_beban_berat']; ?>">

                        <span class="input-group-text">
                        	Tahun	
                        </span>  

                      </div>
                    </div>



                    </td>
                              </tr>
                            </tbody>
                        </table>
                  </div>


                </div>
















                    <div class="form-group col-12 mb-2">
                        <div class="alert alert-info  text-center">
                          <b>RIWAYAT KECELAKAAN KERJA</b>
                        </div>
                    </div>





              <?php 
                  
                  $query4 = mysqli_query($conn, "select * from kecelakaan_kerja where nrp='$nrp' ");
                  
                  $kecelakaan_kerja = mysqli_fetch_assoc($query4);
              
              ?>




                  <div class="card-body col-12 col-md-12 col-lg-12">



      <div class="table-responsive">
            <table class="">
              
                <tbody>
                  <tr>
                    <td>
                  
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">

                        <span class="input-group-text" style="padding-right: 100px; width: 180px;">
                        	Jatuh dari ketinggian
                        </span>

                        </div>

                        <span class="input-group-text">
                        	: Tahun	
                        </span> 

                        <input type="number" class="form-control" name="tahun_jatuh_dari_ketinggian" placeholder="............................" value="<?= $kecelakaan_kerja['tahun_jatuh_dari_ketinggian']; ?>" >

                      </div>
                    </div>

                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">

                        <span class="input-group-text" style="padding-right: 100px; width: 180px;">
                        	Tersayat benda tajam
                        </span>

                        </div>

                        <span class="input-group-text">
                        	: Tahun	
                        </span> 

                        <input type="number" class="form-control" name="tahun_tersayat_benda_tajam" placeholder="............................" value="<?= $kecelakaan_kerja['tahun_tersayat_benda_tajam']; ?>">

                      </div>
                    </div>



                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">

                        <span class="input-group-text" style="padding-right: 100px; width: 180px;">
                        	Tersengat listrik
                        </span>

                        </div>

                        <span class="input-group-text">
                        	: Tahun	
                        </span> 

                        <input type="number" class="form-control" name="tahun_tersengat_listrik" placeholder="............................" value="<?= $kecelakaan_kerja['tahun_tersengat_listrik']; ?>">

                      </div>
                    </div>




                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">

                        <span class="input-group-text" style="padding-right: 100px; width: 180px;">
                        	Terbakar
                        </span>

                        </div>

                        <span class="input-group-text">
                        	: Tahun	
                        </span> 

                        <input type="number" class="form-control" name="tahun_terbakar" placeholder="............................" value="<?= $kecelakaan_kerja['tahun_terbakar']; ?>">

                      </div>
                    </div>




                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">

                        <span class="input-group-text" style="padding-right: 100px; width: 180px;">
                        	Terbentur
                        </span>

                        </div>

                        <span class="input-group-text">
                        	: Tahun	
                        </span> 

                        <input type="number" class="form-control" name="tahun_terbentur" placeholder="............................" value="<?= $kecelakaan_kerja['tahun_terbentur']; ?>">

                      </div>
                  </div>
                  



                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">

                        <span class="input-group-text" style="padding-right: 100px; width: 180px;">
                        	Tergores
                        </span>

                        </div>

                        <span class="input-group-text">
                        	: Tahun	
                        </span> 

                        <input type="number" class="form-control" name="tahun_tergores" placeholder="............................" value="<?= $kecelakaan_kerja['tahun_tergores']; ?>">

                      </div>
	                </div>




                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">

                        <span class="input-group-text" style="padding-right: 100px; width: 180px;">
                        	Terkilir
                        </span>

                        </div>

                        <span class="input-group-text">
                        	: Tahun	
                        </span> 

                        <input type="number" class="form-control" name="tahun_terkilir" placeholder="............................" value="<?= $kecelakaan_kerja['tahun_terkilir']; ?>">

                      </div>
	                </div>





                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">

                        <span class="input-group-text" style="padding-right: 100px; width: 180px;">
                        	Tertiban
                        </span>

                        </div>

                        <span class="input-group-text">
                        	: Tahun	
                        </span> 

                        <input type="number" class="form-control" name="tahun_tertiban" placeholder="............................" value="<?= $kecelakaan_kerja['tahun_tertiban']; ?>">

                      </div>
	                </div>




                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">

                        <span class="input-group-text" style="padding-right: 100px; width: 180px;">
                        	Tertusuk
                        </span>

                        </div>

                        <span class="input-group-text">
                        	: Tahun	
                        </span> 

                        <input type="number" class="form-control" name="tahun_tertusuk" placeholder="............................" value="<?= $kecelakaan_kerja['tahun_tertusuk']; ?>">

                      </div>
	                </div>





                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">

                        <span class="input-group-text" style="padding-right: 100px; width: 180px;">
                        	Terpotong
                        </span>

                        </div>

                        <span class="input-group-text">
                        	: Tahun	
                        </span> 

                        <input type="number" class="form-control" name="tahun_terpotong" placeholder="............................" value="<?= $kecelakaan_kerja['tahun_terpotong']; ?>">

                      </div>
	                </div>



                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">

                        <span class="input-group-text" style="padding-right: 100px; width: 180px;">
                        	Kemasukan Benda Asing
                        </span>

                        </div>

                        <span class="input-group-text">
                        	: Tahun	
                        </span> 

                        <input type="number" class="form-control" name="tahun_kemasukan_benda_asing" placeholder="............................" value="<?= $kecelakaan_kerja['tahun_kemasukan_benda_asing']; ?>" >

                      </div>
                  </div>
                  




                  </td>
                              </tr>
                            </tbody>
                        </table>
                  </div>
	            </div>








                    <div class="form-group col-12 mb-2">
                        <div class="alert alert-warning  text-center">
                          <b>KEBIASAAN</b>
                        </div>
                    </div>




      <?php 
            
            $query5 = mysqli_query($conn, "select * from kebiasaan where nrp='$nrp' ");
            
            $kebiasaan = mysqli_fetch_assoc($query5);
            $minum_alkohol = $kebiasaan['minum_alkohol'];
            $merokok = $kebiasaan['merokok'];
            $olahraga = $kebiasaan['olahraga'];
            $minum_kopi = $kebiasaan['minum_kopi'];
        
        ?>





                    <div class="card-body col-12 col-md-12 col-lg-12">



                    <div class="table-responsive">
                        <table class="">
                          
                            <tbody>
                              <tr>
                                <td>


                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          

                        <span class="input-group-text">
                          1.
                        </span>

                        <span class="input-group-text" style="padding-right: 250px; width: 100px;">
                        
                        	Minum Alkohol
                        </span>

                        <span class="input-group-text">

                        <div class="col-auto mt-1">
                          <label class="colorinput">
                            <input name="minum_alkohol" type="radio" value="Ya" class="colorinput-input" <?php echo ($minum_alkohol=='Ya')?"checked":""; ?>  />
                            <span class="colorinput-color bg-success"></span>
                          </label>
                        </div>
                        <p class="mt-3">Ya</p>

                        </span>

                        <span class="input-group-text">

                        <div class="col-auto mt-1">
                          <label class="colorinput">
                            <input name="minum_alkohol" type="radio" value="Tidak" class="colorinput-input" <?php echo ($minum_alkohol=='Tidak')?"checked":""; ?>  />
                            <span class="colorinput-color bg-success"></span>
                          </label>
                        </div>
                        <p class="mt-3">Tidak</p>

                        </span>

                        </div>

                        <input type="text" class="form-control" name="jumlah_minum_alkohol" placeholder="............................" value="<?= $kebiasaan['jumlah_minum_alkohol']; ?>">

                        <span class="input-group-text" style="width: 100px;">
                        	Botol/hari
                        </span>

                      </div>
                    </div>




                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          

                        <span class="input-group-text">
                          2.
                        </span>

                        <span class="input-group-text" style="padding-right: 250px; width: 100px;">
                        
                        	Merokok
                        </span>

                        <span class="input-group-text">

                        <div class="col-auto mt-1">
                          <label class="colorinput">
                            <input name="merokok" type="radio" value="Ya" class="colorinput-input" <?php echo ($merokok=='Ya')?"checked":""; ?>  />
                            <span class="colorinput-color bg-success"></span>
                          </label>
                        </div>
                        <p class="mt-3">Ya</p>

                        </span>

                        <span class="input-group-text">

                        <div class="col-auto mt-1">
                          <label class="colorinput">
                            <input name="merokok" type="radio" value="Tidak" class="colorinput-input" <?php echo ($merokok=='Tidak')?"checked":""; ?>  />
                            <span class="colorinput-color bg-success"></span>
                          </label>
                        </div>
                        <p class="mt-3">Tidak</p>

                        </span>

                        </div>

                        <input type="text" class="form-control" name="jumlah_merokok" placeholder="............................" value="<?= $kebiasaan['jumlah_merokok']; ?>">

                        <span class="input-group-text" style="width: 100px;">
                        	Batang/hari
                        </span>

                      </div>
                    </div>





                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          

                        <span class="input-group-text">
                          3.
                        </span>

                        <span class="input-group-text" style="padding-right: 250px; width: 100px;">
                        
                        	Olahraga
                        </span>

                        <span class="input-group-text">

                        <div class="col-auto mt-1">
                          <label class="colorinput">
                            <input name="olahraga" type="radio" value="Ya" class="colorinput-input" <?php echo ($olahraga=='Ya')?"checked":""; ?>  />
                            <span class="colorinput-color bg-success"></span>
                          </label>
                        </div>
                        <p class="mt-3">Ya</p>

                        </span>

                        <span class="input-group-text">

                        <div class="col-auto mt-1">
                          <label class="colorinput">
                            <input name="olahraga" type="radio" value="Tidak" class="colorinput-input" <?php echo ($olahraga=='Tidak')?"checked":""; ?>  />
                            <span class="colorinput-color bg-success"></span>
                          </label>
                        </div>
                        <p class="mt-3">Tidak</p>

                        </span>

                        </div>

                        <input type="text" class="form-control" name="jumlah_olahraga" placeholder="............................" value="<?= $kebiasaan['jumlah_olahraga']; ?>">

                        <span class="input-group-text" style="width: 100px;">
                        	Kali/Minggu
                        </span>

                      </div>
                    </div>




                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          

                        <span class="input-group-text">
                          4.
                        </span>

                        <span class="input-group-text" style="padding-right: 250px; width: 100px;">
                        
                        	Minum Kopi
                        </span>

                        <span class="input-group-text">

                        <div class="col-auto mt-1">
                          <label class="colorinput">
                            <input name="minum_kopi" type="radio" value="Ya" class="colorinput-input" <?php echo ($minum_kopi=='Ya')?"checked":""; ?>  />
                            <span class="colorinput-color bg-success"></span>
                          </label>
                        </div>
                        <p class="mt-3">Ya</p>

                        </span>

                        <span class="input-group-text">

                        <div class="col-auto mt-1">
                          <label class="colorinput">
                            <input name="minum_kopi" type="radio" value="Tidak" class="colorinput-input" <?php echo ($minum_kopi=='Tidak')?"checked":""; ?>  />
                            <span class="colorinput-color bg-success"></span>
                          </label>
                        </div>
                        <p class="mt-3">Tidak</p>

                        </span>

                        </div>

                        <input type="text" class="form-control" name="jumlah_minum_kopi" placeholder="............................" value="<?= $kebiasaan['jumlah_minum_kopi']; ?>">

                        <span class="input-group-text" style="width: 100px;">
                        	Gelas/hari
                        </span>

                      </div>
                    </div>




                                </td>
                              </tr>
                            </tbody>
                        </table>
                    </div>



	            </div>















              <div class="form-group col-12 mb-2">
                  <div class="alert alert-info  text-center">
                    <b>RIWAYAT PENYAKIT KELUARGA</b>
                  </div>
              </div>






      <?php 
          
          $query6 = mysqli_query($conn, "select * from riwayat_penyakit_keluarga where nrp='$nrp' ");
          
          $kebiasaan = mysqli_fetch_assoc($query6);
          $penyakit_jantung = $kebiasaan['penyakit_jantung'];
          $penyakit_darah_tinggi = $kebiasaan['penyakit_darah_tinggi'];
          $penyakit_kencing_manis = $kebiasaan['penyakit_kencing_manis'];
          $penyakit_stroke = $kebiasaan['penyakit_stroke'];
          $penyakit_paru = $kebiasaan['penyakit_paru'];
          $penyakit_kanker_tumor = $kebiasaan['penyakit_kanker_tumor'];
          $penyakit_gangguan_jiwa = $kebiasaan['penyakit_gangguan_jiwa'];
          $penyakit_ginjal = $kebiasaan['penyakit_ginjal'];
          $penyakit_saluran_cerna = $kebiasaan['penyakit_saluran_cerna'];
          $penyakit_lain = $kebiasaan['penyakit_lain'];
      
      ?>





                    <div class="card-body col-12 col-md-12 col-lg-12">



                    <div class="table-responsive">
                        <table class="">
                          
                            <tbody>
                              <tr>
                                <td>


                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          

                        <span class="input-group-text" style="padding-right: 18px;">
                          A.
                        </span>

                        <span class="input-group-text" style="padding-right: 250px; width: 100px;">
                        
                        	Penyakit Jantung
                        </span>

                        <span class="input-group-text">

                        <div class="col-auto mt-1">
                          <label class="colorinput">
                            <input name="penyakit_jantung" type="radio" value="Ya" class="colorinput-input" <?php echo ($penyakit_jantung=='Ya')?"checked":""; ?>  />
                            <span class="colorinput-color bg-success"></span>
                          </label>
                        </div>
                        <p class="mt-3">Ya</p>

                        </span>

                        <span class="input-group-text">

                        <div class="col-auto mt-1">
                          <label class="colorinput">
                            <input name="penyakit_jantung" type="radio" value="Tidak" class="colorinput-input" <?php echo ($penyakit_jantung=='Tidak')?"checked":""; ?>  />
                            <span class="colorinput-color bg-success"></span>
                          </label>
                        </div>
                        <p class="mt-3">Tidak</p>

                        </span>

                        </div>

                      </div>
                    </div>




                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          

                        <span class="input-group-text" style="padding-right: 18px;">
                          B.
                        </span>

                        <span class="input-group-text" style="padding-right: 250px; width: 100px;">
                        
                        Penyakit Darah Tinggi
                        </span>

                        <span class="input-group-text">

                        <div class="col-auto mt-1">
                          <label class="colorinput">
                            <input name="penyakit_darah_tinggi" type="radio" value="Ya" class="colorinput-input" <?php echo ($penyakit_darah_tinggi=='Ya')?"checked":""; ?>  />
                            <span class="colorinput-color bg-success"></span>
                          </label>
                        </div>
                        <p class="mt-3">Ya</p>

                        </span>

                        <span class="input-group-text">

                        <div class="col-auto mt-1">
                          <label class="colorinput">
                            <input name="penyakit_darah_tinggi" type="radio" value="Tidak" class="colorinput-input" <?php echo ($penyakit_darah_tinggi=='Tidak')?"checked":""; ?>  />
                            <span class="colorinput-color bg-success"></span>
                          </label>
                        </div>
                        <p class="mt-3">Tidak</p>

                        </span>

                        </div>

                      </div>
                    </div>





                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          

                        <span class="input-group-text" style="padding-right: 18px;">
                          C.
                        </span>

                        <span class="input-group-text" style="padding-right: 250px; width: 100px;">
                        
                        Penyakit Kencing Manis
                        </span>

                        <span class="input-group-text">

                        <div class="col-auto mt-1">
                          <label class="colorinput">
                            <input name="penyakit_kencing_manis" type="radio" value="Ya" class="colorinput-input" <?php echo ($penyakit_kencing_manis=='Ya')?"checked":""; ?>  />
                            <span class="colorinput-color bg-success"></span>
                          </label>
                        </div>
                        <p class="mt-3">Ya</p>

                        </span>

                        <span class="input-group-text">

                        <div class="col-auto mt-1">
                          <label class="colorinput">
                            <input name="penyakit_kencing_manis" type="radio" value="Tidak" class="colorinput-input" <?php echo ($penyakit_kencing_manis=='Tidak')?"checked":""; ?>  />
                            <span class="colorinput-color bg-success"></span>
                          </label>
                        </div>
                        <p class="mt-3">Tidak</p>

                        </span>

                        </div>

                      </div>
                    </div>


                    

                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          

                        <span class="input-group-text" style="padding-right: 18px;">
                          D.
                        </span>

                        <span class="input-group-text" style="padding-right: 250px; width: 100px;">
                        
                        Penyakit Stroke
                        </span>

                        <span class="input-group-text">

                        <div class="col-auto mt-1">
                          <label class="colorinput">
                            <input name="penyakit_stroke" type="radio" value="Ya" class="colorinput-input" <?php echo ($penyakit_stroke=='Ya')?"checked":""; ?>  />
                            <span class="colorinput-color bg-success"></span>
                          </label>
                        </div>
                        <p class="mt-3">Ya</p>

                        </span>

                        <span class="input-group-text">

                        <div class="col-auto mt-1">
                          <label class="colorinput">
                            <input name="penyakit_stroke" type="radio" value="Tidak" class="colorinput-input" <?php echo ($penyakit_stroke=='Tidak')?"checked":""; ?>  />
                            <span class="colorinput-color bg-success"></span>
                          </label>
                        </div>
                        <p class="mt-3">Tidak</p>

                        </span>

                        </div>

                      </div>
                    </div>


                    

                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          

                        <span class="input-group-text" style="padding-right: 20px;">
                          E.
                        </span>

                        <span class="input-group-text" style="padding-right: 250px; width: 100px;">
                        
                        Penyakit Paru/Menahun/Asthma/TB
                        </span>

                        <span class="input-group-text">

                        <div class="col-auto mt-1">
                          <label class="colorinput">
                            <input name="penyakit_paru" type="radio" value="Ya" class="colorinput-input" <?php echo ($penyakit_paru=='Ya')?"checked":""; ?>  />
                            <span class="colorinput-color bg-success"></span>
                          </label>
                        </div>
                        <p class="mt-3">Ya</p>

                        </span>

                        <span class="input-group-text">

                        <div class="col-auto mt-1">
                          <label class="colorinput">
                            <input name="penyakit_paru" type="radio" value="Tidak" class="colorinput-input" <?php echo ($penyakit_paru=='Tidak')?"checked":""; ?>  />
                            <span class="colorinput-color bg-success"></span>
                          </label>
                        </div>
                        <p class="mt-3">Tidak</p>

                        </span>

                        </div>

                      </div>
                    </div>


                    

                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          

                        <span class="input-group-text" style="padding-right: 20px;">
                          F.
                        </span>

                        <span class="input-group-text" style="padding-right: 250px; width: 100px;">
                        
                        Penyakit Kanker/Tumor
                        </span>

                        <span class="input-group-text">

                        <div class="col-auto mt-1">
                          <label class="colorinput">
                            <input name="penyakit_kanker_tumor" type="radio" value="Ya" class="colorinput-input" <?php echo ($penyakit_kanker_tumor=='Ya')?"checked":""; ?>  />
                            <span class="colorinput-color bg-success"></span>
                          </label>
                        </div>
                        <p class="mt-3">Ya</p>

                        </span>

                        <span class="input-group-text">

                        <div class="col-auto mt-1">
                          <label class="colorinput">
                            <input name="penyakit_kanker_tumor" type="radio" value="Tidak" class="colorinput-input" <?php echo ($penyakit_kanker_tumor=='Tidak')?"checked":""; ?>  />
                            <span class="colorinput-color bg-success"></span>
                          </label>
                        </div>
                        <p class="mt-3">Tidak</p>

                        </span>

                        </div>

                      </div>
                    </div>


                    

                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          

                        <span class="input-group-text" style="padding-right: 18px;">
                          G.
                        </span>

                        <span class="input-group-text" style="padding-right: 250px; width: 100px;">
                        
                        Penyakit Gangguan Jiwa
                        </span>

                        <span class="input-group-text">

                        <div class="col-auto mt-1">
                          <label class="colorinput">
                            <input name="penyakit_gangguan_jiwa" type="radio" value="Ya" class="colorinput-input" <?php echo ($penyakit_gangguan_jiwa=='Ya')?"checked":""; ?>  />
                            <span class="colorinput-color bg-success"></span>
                          </label>
                        </div>
                        <p class="mt-3">Ya</p>

                        </span>

                        <span class="input-group-text">

                        <div class="col-auto mt-1">
                          <label class="colorinput">
                            <input name="penyakit_gangguan_jiwa" type="radio" value="Tidak" class="colorinput-input" <?php echo ($penyakit_gangguan_jiwa=='Tidak')?"checked":""; ?>  />
                            <span class="colorinput-color bg-success"></span>
                          </label>
                        </div>
                        <p class="mt-3">Tidak</p>

                        </span>

                        </div>

                      </div>
                    </div>


                    

                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          

                        <span class="input-group-text" style="padding-right: 18px;">
                          H.
                        </span>

                        <span class="input-group-text" style="padding-right: 250px; width: 100px;">
                        
                        Penyakit Ginjal
                        </span>

                        <span class="input-group-text">

                        <div class="col-auto mt-1">
                          <label class="colorinput">
                            <input name="penyakit_ginjal" type="radio" value="Ya" class="colorinput-input" <?php echo ($penyakit_ginjal=='Ya')?"checked":""; ?>  />
                            <span class="colorinput-color bg-success"></span>
                          </label>
                        </div>
                        <p class="mt-3">Ya</p>

                        </span>

                        <span class="input-group-text">

                        <div class="col-auto mt-1">
                          <label class="colorinput">
                            <input name="penyakit_ginjal" type="radio" value="Tidak" class="colorinput-input" <?php echo ($penyakit_ginjal=='Tidak')?"checked":""; ?>  />
                            <span class="colorinput-color bg-success"></span>
                          </label>
                        </div>
                        <p class="mt-3">Tidak</p>

                        </span>

                        </div>

                      </div>
                    </div>




                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          

                        <span class="input-group-text" style="padding-right: 25px;">
                          I.
                        </span>

                        <span class="input-group-text" style="padding-right: 250px; width: 100px;">
                        
                        Penyakit Saluran Cerna
                        </span>

                        <span class="input-group-text">

                        <div class="col-auto mt-1">
                          <label class="colorinput">
                            <input name="penyakit_saluran_cerna" type="radio" value="Ya" class="colorinput-input" <?php echo ($penyakit_saluran_cerna=='Ya')?"checked":""; ?>  />
                            <span class="colorinput-color bg-success"></span>
                          </label>
                        </div>
                        <p class="mt-3">Ya</p>

                        </span>

                        <span class="input-group-text">

                        <div class="col-auto mt-1">
                          <label class="colorinput">
                            <input name="penyakit_saluran_cerna" type="radio" value="Tidak" class="colorinput-input" <?php echo ($penyakit_saluran_cerna=='Tidak')?"checked":""; ?>  />
                            <span class="colorinput-color bg-success"></span>
                          </label>
                        </div>
                        <p class="mt-3">Tidak</p>

                        </span>

                        </div>

                      </div>
                    </div>

                    



                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          

                        <span class="input-group-text" style="padding-right: 25px;">
                          J.
                        </span>

                        <span class="input-group-text" style="padding-right: 250px; width: 100px;">
                        
                        Penyakit Lainnya...
                        </span>

                        <span class="input-group-text">

                        <div class="col-auto mt-1">
                          <label class="colorinput">
                            <input name="penyakit_lain" type="radio" value="Ya" class="colorinput-input" <?php echo ($penyakit_lain=='Ya')?"checked":""; ?>  />
                            <span class="colorinput-color bg-success"></span>
                          </label>
                        </div>
                        <p class="mt-3">Ya</p>

                        </span>

                        <span class="input-group-text">

                        <div class="col-auto mt-1">
                          <label class="colorinput">
                            <input name="penyakit_lain" type="radio" value="Tidak" class="colorinput-input" <?php echo ($penyakit_lain=='Tidak')?"checked":""; ?>  />
                            <span class="colorinput-color bg-success"></span>
                          </label>
                        </div>
                        <p class="mt-3">Tidak</p>

                        </span>

                        </div>

                      </div>


                    



                                </td>
                              </tr>
                            </tbody>
                        </table>
                    </div>



	            </div>










                    <div class="form-group col-12 mb-2">
                      <div class="alert alert-danger  text-center">
                        <b>RIWAYAT PENYAKIT PASIEN</b>
                      </div>
                    </div>



      <?php 
          
          $query7 = mysqli_query($conn, "select * from riwayat_penyakit_pasien where nrp='$nrp' ");
          
          $riwayat_penyakit_pasien = mysqli_fetch_assoc($query7);
      
      ?>












                  <div class="card-body col-12 col-md-6 col-lg-6">


                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">

                        <span class="input-group-text" style="padding-right: 110px; width: 230px;">
                        	Riwayat Hepatitis
                        </span>

                        </div>

                        <input type="text" class="form-control" name="riwayat_hepatitis" placeholder="............................" value="<?= $riwayat_penyakit_pasien['riwayat_hepatitis']; ?>">

                      </div>
                    </div>



                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">

                        <span class="input-group-text" style="padding-right: 110px; width: 230px;">
                        	Riwayat Pengobatan TBC
                        </span>

                        </div>

                        <input type="text" class="form-control" name="riwayat_pengobatan_tbc" placeholder="............................" value="<?= $riwayat_penyakit_pasien['riwayat_pengobatan_tbc']; ?>">

                      </div>
                    </div>



                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">

                        <span class="input-group-text" style="padding-right: 110px; width: 230px;">
                        	Hipertensi/Tekanan Darah Tinggi
                        </span>

                        </div>

                        <input type="text" class="form-control" name="hipertensi" placeholder=".................." value="<?= $riwayat_penyakit_pasien['hipertensi']; ?>">

                      </div>
                    </div>



                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">

                        <span class="input-group-text" style="padding-right: 110px; width: 230px;">
                        	Diabetes Melitus / Kencing Manis
                        </span>

                        </div>

                        <input type="text" class="form-control" name="diabetes_melitus" placeholder="............................" value="<?= $riwayat_penyakit_pasien['diabetes_melitus']; ?>">

                      </div>
                    </div>




                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">

                        <span class="input-group-text" style="padding-right: 110px; width: 230px;">
                        	Riwayat Operasi
                        </span>

                        </div>

                        <input type="text" class="form-control" name="riwayat_operasi" placeholder="............................" value="<?= $riwayat_penyakit_pasien['riwayat_operasi']; ?>">

                      </div>
                    </div>
                </div>



                  <div class="card-body col-12 col-md-6 col-lg-6 mt-0">



                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">

                        <span class="input-group-text" style="padding-right: 110px; width: 230px;">
                        	Riwayat Rawat Inap
                        </span>

                        </div>

                        <input type="text" class="form-control" name="riwayat_rawat_inap" placeholder="............................" value="<?= $riwayat_penyakit_pasien['riwayat_rawat_inap']; ?>">

                      </div>
                    </div>




                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">

                        <span class="input-group-text" style="padding-right: 110px; width: 230px;">
                        	Pengobatan Saat Ini
                        </span>

                        </div>

                        <input type="text" class="form-control" name="pengobatan_saat_ini" placeholder="............................" value="<?= $riwayat_penyakit_pasien['pengobatan_saat_ini']; ?>">

                      </div>
                    </div>



                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">

                        <span class="input-group-text" style="padding-right: 110px; width: 230px;">
                        	Alergi Obat/Makanan
                        </span>

                        </div>

                        <input type="text" class="form-control" name="alergi_obat_makanan" placeholder="............................" value="<?= $riwayat_penyakit_pasien['alergi_obat_makanan']; ?>">

                      </div>
                    </div>



                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">

                        <span class="input-group-text" style="padding-right: 110px; width: 230px;">
                        	Konsumsi Obat
                        </span>

                        </div>

                        <input type="text" class="form-control" name="konsumsi_obat" placeholder="............................" value="<?= $riwayat_penyakit_pasien['konsumsi_obat']; ?>">

                      </div>
                    </div>



                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">

                        <span class="input-group-text" style="padding-right: 110px; width: 230px;">
                        	Lain - lain
                        </span>

                        </div>

                        <input type="text" class="form-control" name="lain_lain" placeholder="............................" value="<?= $riwayat_penyakit_pasien['lain_lain']; ?>">

                      </div>
                    </div>
                </div>






                  <div class="form-group ml-3">
                    <button type="submit" name="update_formulir" class="btn btn-primary btn-lg btn-block">
                      <i class="fas fa-submit"></i> Submit
                    </button>
                  </div>










                  </form>







<?php 

$kode_perusahaan = $_SESSION['kode_perusahaan'];

if(isset($_POST['update_formulir'])) {
  
    @$darah = $_POST['darah'];
    @$urine = $_POST['urine'];
    @$visus = $_POST['visus'];
    @$bb_tb = $_POST['bb_tb'];
    @$dokter = $_POST['dokter'];
    @$gigi = $_POST['gigi'];
    @$ekg = $_POST['ekg'];
    @$audio = $_POST['audio'];
    @$tekanan_darah = $_POST['tekanan_darah'];
    @$spirometri = $_POST['spirometri'];
    @$treadmill = $_POST['treadmill'];
    @$rontgen = $_POST['rontgen'];






    @$jenis_mcu = $_POST['jenis_mcu'];
    @$nama = htmlspecialchars(ucwords( $_POST['nama']));
    @$nrp = $_POST['nrp'];
    @$jenis_kelamin = $_POST['jenis_kelamin'];
    @$tgl_lahir = $_POST['tgl_lahir'];
    @$bagian = htmlspecialchars(ucwords( $_POST['bagian']));
    @$jabatan = htmlspecialchars(ucwords( $_POST['jabatan']));
    @$departemen = htmlspecialchars(ucwords( $_POST['departemen']));
    @$nama_perusahaan = htmlspecialchars($_POST['nama_perusahaan']);
    @$puasa = htmlspecialchars(ucwords( $_POST['puasa']));
    @$tgl_mcu = $_POST['tgl_mcu'];
    @$keluhan_sekarang = htmlspecialchars( $_POST['keluhan_sekarang']);
    @$no_hp = $_POST['no_hp'];
    @$username = htmlspecialchars( $_POST['username']);
    @$password = $_POST['password'];




    @$jam_bising = $_POST['jam_bising'];
    @$tahun_bising = $_POST['tahun_bising'];
    @$jam_getaran = $_POST['jam_getaran'];
    @$tahun_getaran = $_POST['tahun_getaran'];
    @$jam_zat_kimia = $_POST['jam_zat_kimia'];
    @$tahun_zat_kimia = $_POST['tahun_zat_kimia'];
    @$jam_panas = $_POST['jam_panas'];
    @$tahun_panas = $_POST['tahun_panas'];
    @$jam_asap = $_POST['jam_asap'];
    @$tahun_asap = $_POST['tahun_asap'];
    @$jam_gerakan_berulang = $_POST['jam_gerakan_berulang'];
    @$tahun_gerakan_berulang = $_POST['tahun_gerakan_berulang'];
    @$jam_monitor_komputer = $_POST['jam_monitor_komputer'];
    @$tahun_monitor_komputer = $_POST['tahun_monitor_komputer'];
    @$jam_mendorong_menarik = $_POST['jam_mendorong_menarik'];
    @$tahun_mendorong_menarik = $_POST['tahun_mendorong_menarik'];
    @$jam_angkat_beban_berat = $_POST['jam_angkat_beban_berat'];
    @$tahun_angkat_beban_berat = $_POST['tahun_angkat_beban_berat'];





    @$tahun_jatuh_dari_ketinggian = $_POST['tahun_jatuh_dari_ketinggian'];
    @$tahun_tersayat_benda_tajam = $_POST['tahun_tersayat_benda_tajam'];
    @$tahun_tersengat_listrik = $_POST['tahun_tersengat_listrik'];
    @$tahun_terbakar = $_POST['tahun_terbakar'];
    @$tahun_terbentur = $_POST['tahun_terbentur'];
    @$tahun_tergores = $_POST['tahun_tergores'];
    @$tahun_terkilir = $_POST['tahun_terkilir'];
    @$tahun_tertiban = $_POST['tahun_tertiban'];
    @$tahun_tertusuk = $_POST['tahun_tertusuk'];
    @$tahun_terpotong = $_POST['tahun_terpotong'];
    @$tahun_kemasukan_benda_asing = $_POST['tahun_kemasukan_benda_asing'];



    @$minum_alkohol = $_POST['minum_alkohol'];
    @$jumlah_minum_alkohol = $_POST['jumlah_minum_alkohol'];
    @$merokok = $_POST['merokok'];
    @$jumlah_merokok = $_POST['jumlah_merokok'];
    @$olahraga = $_POST['olahraga'];
    @$jumlah_olahraga = $_POST['jumlah_olahraga'];
    @$minum_kopi = $_POST['minum_kopi'];
    @$jumlah_minum_kopi = $_POST['jumlah_minum_kopi'];



    @$penyakit_jantung = $_POST['penyakit_jantung'];
    @$penyakit_darah_tinggi = $_POST['penyakit_darah_tinggi'];
    @$penyakit_kencing_manis = $_POST['penyakit_kencing_manis'];
    @$penyakit_stroke = $_POST['penyakit_stroke'];
    @$penyakit_paru = $_POST['penyakit_paru'];
    @$penyakit_kanker_tumor = $_POST['penyakit_kanker_tumor'];
    @$penyakit_gangguan_jiwa = $_POST['penyakit_gangguan_jiwa'];
    @$penyakit_ginjal = $_POST['penyakit_ginjal'];
    @$penyakit_saluran_cerna = $_POST['penyakit_saluran_cerna'];
    @$penyakit_lain = $_POST['penyakit_lain'];




    @$riwayat_hepatitis = htmlspecialchars(ucwords( $_POST['riwayat_hepatitis']));
    @$riwayat_pengobatan_tbc = htmlspecialchars(ucwords( $_POST['riwayat_pengobatan_tbc']));
    @$hipertensi = htmlspecialchars(ucwords( $_POST['hipertensi']));
    @$diabetes_melitus = htmlspecialchars(ucwords( $_POST['diabetes_melitus']));
    @$riwayat_operasi = htmlspecialchars(ucwords( $_POST['riwayat_operasi']));
    @$riwayat_rawat_inap = htmlspecialchars(ucwords( $_POST['riwayat_rawat_inap']));
    @$pengobatan_saat_ini = htmlspecialchars(ucwords( $_POST['pengobatan_saat_ini']));
    @$alergi_obat_makanan = htmlspecialchars(ucwords( $_POST['alergi_obat_makanan']));
    @$konsumsi_obat = htmlspecialchars(ucwords( $_POST['konsumsi_obat']));
    @$lain_lain = htmlspecialchars(ucwords( $_POST['lain_lain']));


        

    $sql = mysqli_query($conn, 
    "update jenis_pemeriksaan set darah='$darah', urine='$urine', visus='$visus', bb_tb='$bb_tb', dokter='$dokter', gigi='$gigi', ekg='$ekg', audio='$audio', tekanan_darah='$tekanan_darah', spirometri='$spirometri', treadmill='$treadmill', rontgen='$rontgen' where nrp='$nrp' ");


    $sql = mysqli_query($conn, 
    "update data_karyawan set jenis_mcu='$jenis_mcu', nama='$nama', jenis_kelamin='$jenis_kelamin', tgl_lahir='$tgl_lahir', bagian='$bagian', jabatan='$jabatan', departemen='$departemen', nama_perusahaan='$nama_perusahaan', puasa='$puasa', tgl_mcu='$tgl_mcu', keluhan_sekarang='$keluhan_sekarang', no_hp='$no_hp', username='$username', password='$password' where nrp='$nrp' ");


    $sql = mysqli_query($conn, 
    "update bahaya_lingkungan_kerja set jam_bising='$jam_bising', tahun_bising='$tahun_bising', jam_getaran='$jam_getaran', tahun_getaran='$tahun_getaran', jam_zat_kimia='$jam_zat_kimia', tahun_zat_kimia='$tahun_zat_kimia', jam_panas='$jam_panas', tahun_panas='$tahun_panas', jam_asap='$jam_asap', tahun_asap='$tahun_asap', jam_gerakan_berulang='$jam_gerakan_berulang', tahun_gerakan_berulang='$tahun_gerakan_berulang', jam_monitor_komputer='$jam_monitor_komputer', tahun_monitor_komputer='$tahun_monitor_komputer', jam_mendorong_menarik='$jam_mendorong_menarik', tahun_mendorong_menarik='$tahun_mendorong_menarik', jam_angkat_beban_berat='$jam_angkat_beban_berat', tahun_angkat_beban_berat='$tahun_angkat_beban_berat' where nrp='$nrp' ");





    $sql = mysqli_query($conn, 
    "update kecelakaan_kerja set tahun_jatuh_dari_ketinggian='$tahun_jatuh_dari_ketinggian', tahun_tersayat_benda_tajam='$tahun_tersayat_benda_tajam', tahun_tersengat_listrik='$tahun_tersengat_listrik', tahun_terbakar='$tahun_terbakar', tahun_terbentur='$tahun_terbentur', tahun_tergores='$tahun_tergores', tahun_terkilir='$tahun_terkilir', tahun_tertiban='$tahun_tertiban', tahun_tertusuk='$tahun_tertusuk', tahun_terpotong='$tahun_terpotong', tahun_kemasukan_benda_asing='$tahun_kemasukan_benda_asing' where nrp='$nrp'");





    $sql = mysqli_query($conn, "update kebiasaan set minum_alkohol='$minum_alkohol', jumlah_minum_alkohol='$jumlah_minum_alkohol', merokok='$merokok', jumlah_merokok='$jumlah_merokok', olahraga='$olahraga', jumlah_olahraga='$jumlah_olahraga', minum_kopi='$minum_kopi', jumlah_minum_kopi='$jumlah_minum_kopi' where nrp='$nrp' ");





    $sql = mysqli_query($conn, "update riwayat_penyakit_keluarga set penyakit_jantung='$penyakit_jantung', penyakit_darah_tinggi='$penyakit_darah_tinggi', penyakit_kencing_manis='$penyakit_kencing_manis', penyakit_stroke='$penyakit_stroke', penyakit_paru='$penyakit_paru', penyakit_kanker_tumor='$penyakit_kanker_tumor', penyakit_gangguan_jiwa='$penyakit_gangguan_jiwa', penyakit_ginjal='$penyakit_ginjal', penyakit_saluran_cerna='$penyakit_saluran_cerna', penyakit_lain='$penyakit_lain' where nrp='$nrp' ");




    $sql = mysqli_query($conn, 
    "update riwayat_penyakit_pasien set  riwayat_hepatitis='$riwayat_hepatitis', riwayat_pengobatan_tbc='$riwayat_pengobatan_tbc', hipertensi='$hipertensi', diabetes_melitus='$diabetes_melitus', riwayat_operasi='$riwayat_operasi', riwayat_rawat_inap='$riwayat_rawat_inap', pengobatan_saat_ini='$pengobatan_saat_ini', alergi_obat_makanan='$alergi_obat_makanan', konsumsi_obat='$konsumsi_obat', lain_lain='$lain_lain' where nrp='$nrp' ");


    

    $sql = mysqli_query($conn, 
    "update users set username='$username', password='$password', nama_lengkap='$nama'  where nrp='$nrp' ");





        
    if($sql) {
        ?> 
            <script type="text/javascript">
                alert("Formulir Berhasil Diupdate");
                window.location.href="?page=formulir";
            </script>
        <?php
    }
        
}

?>









                  



	              </div>
	            </div>



                </div>
              </div>


            </div>
          </div>

          
