<!DOCTYPE html>
<head>
<title>Tampilan 0</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"
</head>
<body>
<div class="container">
<h1 style="color:red">SISWA DAN JURUSANNYA</h1>
<!-- awalan -->
<div class="card">
  <div class="card-header bg-info text-black">
    FORM INPUT DATA
  </div>
  <div class="card-body">
    <form method="post" action="simpan.php">
     <div class="form-group">
     <label>NIS</label>
     <input type="text" name="nis" class="form-control" placeholder="MASUKAN NIS" required> 
     </div>
     <div class="form-group">
     <label>NAMA SISWA</label>
     <input type="text" name="nama_siswa" class="form-control" placeholder="MASUKAN NAMA KAMU" required> 
     </div>
     <label>GENDER</label>
     <input type="radio" id="Male" name ="Male" value="Male"> Male<input type="radio" id="Female" name="gender" value="Female">Female
     <div class="form-group">
     <label>ALAMAT</label>
     <input type="text" name="alamat" class="form-control" placeholder="MASUKAN ALAMAT" required> 
     </div>
      <div class="form-group">
     <label>NAMA JURUSAN</label>
     <input type="text" name="nama_jurusan" class="form-control" placeholder="MASUKAN NAMA JURUSAN" required> 
     </div>
     </br>
     <button type="submit" class="btn btn-primary" name="button">SIMPAN</button>
     <button type="reset" class="btn btn-secondary" name="reset">RESET</button>
     </br>
     <a href='ubah.php'>UBAH</a></br>
     </form>
  </div> 
</div>
<!-- akhir -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
