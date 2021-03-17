<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nilai Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<style>
 body {
   background-color: #e6ccff;
 }
 
</style>
</head>
<body>
<div class="container">
 <div class="card">
  <div class="card-header  text-black"> Form Nilai Mahasiswa</div>
   <div class="card-body">
    <form  action="proses.php" method="get">

<!-- nama mahasiswa-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nama">Nama Mahasiswa</label>  
  <div class="col-md-4">
  <input id="nama" name="nama" type="text" placeholder="Nama Lengkap" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Matkul -->
<div class="form-group">
  <label class="col-md-4 control-label" for="matkul">Mata Kuliah</label>
  <div class="col-md-4">
    <select id="matkul" name="matkul" class="form-control">
    <option value=""></option>
      <option value="Web Lanjutan">Web Lanjutan</option>
      <option value="Bahasa Inggris">Bahasa Inggris</option>
      <option value="Pendidikan Kewarganegaraan">Pendidikan Kewarganegaraan</option>
      <option value="Statistik dan Probhilitas">Statistik dan Probhilitas</option>
      <option value="Basis Data">Basis Data</option>
      <option value="Keterampilan Kepemimpinan">Keterampilan Kepemimpinan</option>
      <option value="Jaringan Komputer">Jaringan Komputer</option>
      <option value="UI/UX">UI/UX</option>
    </select>
  </div>
</div>

<!-- UTS -->
<div class="form-group">
  <label class="col-md-4 control-label" for="nilai_uts">Nilai UTS</label>  
  <div class="col-md-2">
  <input id="nilai_uts" name="nilai_uts" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- UAS-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nilai_uas">Nilai UAS</label>  
  <div class="col-md-2">
  <input id="nilai_uas" name="nilai_uas" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- tugas-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nilai_tugas">Nilai Tugas </label>  
  <div class="col-md-2">
  <input id="nilai_tugas" name="nilai_tugas" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="proses"></label>
  <div class="col-md-4">
    <button id="proses" name="proses" class="btn btn-primary">Simpan</button>
  </div>
</div>
</form>
</div>
</div>
</div>
</div>


</body>
</html>