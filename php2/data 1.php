<?php
 include './koneksi.php';
 $id_siswa = $_GET["id_siswa"];

 $sql = "SELECT * FROM buku WHERE id_siswa=".$id_siswa;
 $result = $conn->query($sql);

 $result = $result->fetch_assoc();
?>
<div class="container">
<h1 style="color:red">FORM UBAH DATA</h1>
<div class="card">
  <div class="card-header bg-success text-white">
    FORM INPUT DATA
  </div>
  <div class="card-body">
    <form action="update.php" method="post">
 <input type="hidden" name="id_siswa" value="<?php echo $result['id_siswa']?>">
 <table>
  <div class="form-group">
  <tr>
   <td>NIS</td>
   <td>:</td>
   <td><input type="text" name="nis" value="<?php echo $result['nis']?>"></td>
  </tr>
  </div>
  <div class="form-group">
  <tr>
   <td>Nama siswa</td>
   <td>:</td>
   <td><input type="text" name="nama_siswa" value="<?php echo $result['nama_siswa']?>"></td>
  </tr>
  </div>
  <div class="form-group">
  <tr>
   <td>alamat</td>
   <td>:</td>
   <td><textarea name="alamat"<?php echo $result['alamat'];?>></textarea></td>
  </tr>
  </div>
 </table>
 <input type="submit" name="simpann" value="SIMPAN">
</form>
  </div> 
</div>
