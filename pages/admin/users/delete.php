<?php 

	@$id_users = $_GET['id_users'];
	if(isset($_GET['id_users'])) {
		$sql = mysqli_query($conn, "DELETE FROM users WHERE id_users= ".$id_users);
		?> 
			<script type="text/javascript">
				alert ("Hapus Data Perusahaan Berhasil");
				window.location.href="?page=users";
			</script>
		<?php
	}

?>