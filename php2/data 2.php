<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<?php
 include './koneksi.php';
 $id_jurusan = $_GET["id_jurusan"];

 $sql = "SELECT * FROM jurusan WHERE id_jurusan=".$id_jurusan;
 $result = $conn->query($sql);

 $result = $result->fetch_assoc();
?>
<div class="container">
<h1 style="color:green">UPDATE JURUSAN</h1>
<div class="card">
  <div class="card-header bg-success text-white">
    FORM UPDATE DATA
  </div>
  <div class="card-body">
    <form action="update2.php" method="post">
 <input type="hidden" name="id_jurusan" value="<?php echo $result['id_jurusan']?>">
 <table>
  <div class="form-group">
  <tr>
   <td>NAMA SISWA</td>
   <td>:</td>
   <td><input type="text" name="nama_siswa" value="<?php echo $result['nama_siswa']?>"></td>
  </tr>
  </div>
  <div class="form-group">
  <tr>
   <td>NAMA JURUSAN</td>
   <td>:</td>
   <td><input type="text" name="nama_jurusan" value="<?php echo $result['nama_jurusan']?>"></td>
  </tr>
  </div>
 </table>
 </br>
 <input type="submit" name="simpann" value="SIMPAN">
</form>
  </div> 
</div>