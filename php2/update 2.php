<?php
  include './koneksi.php';
  $id_jurusan =$_POST['id_jurusan'];
  $nama_siswa =$_POST['nama_siswa'];
  $nama_jurusan =$_POST['nama_jurusan'];
  $sql = "UPDATE jurusan SET nama_siswa='$nama_siswa', nama_jurusan='$nama_jurusan' WHERE id_jurusan='$id_jurusan'";
  if($conn->query($sql)===TRUE){
		echo "UBAH DATA BERHASIL <br/>";
		echo "<a href='side.php'>BALIK</a> <br/>";
  }else{
		echo "Error:".$sql."<br/>".$conn->error;
  }
  $conn->close()
?>