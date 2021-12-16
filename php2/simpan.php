<?php
 include './koneksi.php';
 $nis = $_POST['nis'];
 $nama_siswa = $_POST['nama_siswa'];
 $alamat = $_POST['alamat'];
 $gender = $_POST['Male'];
 $jurusan = $_POST['nama_jurusan'];
 $sql = "INSERT INTO buku (nis,nama_siswa,jenis_kelamin,alamat) VALUES ('$nis','$nama_siswa','$gender','$alamat')";
 $sqll = "INSERT INTO jurusan (nama_siswa,nama_jurusan) VALUES ('$nama_siswa','$jurusan')";
 if($conn->query($sql)== TRUE){
	  echo "BERHASIL DISIMPANN";
	  echo "<a href='side.php'>Balik</a> <br/>" ;
 }else{
	  echo "ERROR:".$sql."<br/>".$conn->error;
 }
  if($conn->query($sqll)== TRUE){
	  echo "BERHASIL DISIMPANN";
	  echo "<a href='side.php'>Balik</a> <br/>" ;
 }else{
	  echo "ERROR:".$sql."<br/>".$conn->error;
 }
 $conn->close()
?>