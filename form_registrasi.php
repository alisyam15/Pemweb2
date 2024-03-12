<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<?php
$ar_skil = ["HTML"=>"HTML", "CSS"=>"CSS", "JavaScript"=>"JavaScript", "RWD Bootstrap"=>"RWD Bootstrap","PHP"=>"PHP", "Python"=>"Python"];
?>
<h2>Form Registrasi IT Club Data Science</h2>
<form method="POST" action="#">
  <div class="form-group row">
    <label for="nim" class="col-4 col-form-label">NIM</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adn"></i>
          </div>
        </div> 
        <input id="nim" name="nim" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-book"></i>
          </div>
        </div> 
        <input id="nama" name="nama" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="lk"> 
        <label for="jk_0" class="custom-control-label">Laki-laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="pr"> 
        <label for="jk_1" class="custom-control-label">Perempuan</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="prodi" class="col-4 col-form-label">Program Studi</label> 
    <div class="col-8">
      <select id="prodi" name="prodi" class="custom-select">
        <option value="si">Sistem Informasi</option>
        <option value="ti">Teknik Informatika</option>
        <option value="bd">Bisnis Digital</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
        <label class="col-4">Skill Web & Programming</label> 
        <div class="col-8">
          <div class="custom-control custom-checkbox custom-control-inline">
            <input name="skil[]" id="skil_0" type="checkbox" class="custom-control-input" value="skil">
            <?php
            foreach ($ar_skil as $k => $v){
              echo '<input type="checkbox" name="skil[]" value="'.$k.'">'.$k;
            }
            ?>
          </div>
        </div>
      </div>
  <div class="form-group row">
    <label for="domisili" class="col-4 col-form-label">Tempat Domisili</label> 
    <div class="col-8">
      <select id="domisili" name="domisili" class="custom-select">
        <option value="jakarta">Jakarta</option>
        <option value="depok">Depok</option>
        <option value="bogor">Bogor</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-chrome"></i>
          </div>
        </div> 
        <input id="email" name="email" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai" class="col-4 col-form-label">Nilai</label> 
    <div class="col-8">
      <input id="nilai" name="nilai" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
<?php
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$prodi = $_POST['prodi'];
$skil = $_POST['skil'];
$domisili = $_POST['domisili'];
$email = $_POST['email'];
$nilai = $_POST['nilai'];

// 
if ($nilai ==0){
    $predikat = "Tidak Memadai";
}
elseif ($nilai <=40){
    $predikat = "Kurang";
}
elseif ($nilai <=60){
    $predikat = "Cukup";
}
elseif ($nilai <=100){
    $predikat = "Baik";
}
elseif ($nilai <=150){
    $predikat = "Sangat Baik";
}

// 
echo "<h3>Informasi yang Anda Kirim:</h3>";
echo "NIM: $nim <br>";
echo "Nama Lengkap: $nama <br>";
echo "Jenis Kelamin: $jk <br>";
echo "Program Studi: $prodi <br>";
echo "Skill Web & Programing :";
foreach ($skil as $value) {
    echo "$value ,";
}
echo "<br>";
echo "Domisili: $domisili <br>";
echo "Email: $email <br>";
echo "Nilai: $nilai <br>";
echo "Predikat: $predikat";



?>