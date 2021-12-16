<?php
 include './koneksi.php';
 $id = $_GET['id_jurusan'];
 $sql = "DELETE FROM jurusan WHERE id_jurusan='$id'";
 
 if($conn->query($sql)===TRUE){
	  echo "DATA BERHASIL DI HAPUS <br/>";
	  echo "<a href='side.php'>BALIK</a><br/>";
 }else{
	  echo "Error:".$sql."<br/>".$conn->error;
 }
 $conn->close();
?>