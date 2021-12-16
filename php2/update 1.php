<?php
  include './koneksi.php';
  $id_siswa =$_POST['id_siswa'];
  $nis =$_POST['nis'];
  $nama_siswa =$_POST['nama_siswa'];
  $alamat =$_POST['alamat'];
  $sql = "UPDATE buku SET nis='$nis',nama_siswa='$nama_siswa',alamat='$alamat' WHERE id_siswa='$id_siswa'";
  if($conn->query($sql)===TRUE){
		echo "UBAH DATA BERHASIL <br/>";
		echo "<a href='side.php'>BALIK</a> <br/>";
  }else{
		echo "Error:".$sql."<br/>".$conn->error;
  }
  $conn->close()
?>