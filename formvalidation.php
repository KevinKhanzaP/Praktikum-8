<!DOCTYPE HTML>
<html>
<head>
<!-- Memasukkan style CSS external kedalam HTML -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">
<!-- Memberi style pada pemberitahuan kesalahan  -->
<style>
  .warning {color: #FF0000;}
</style>
</head>
<body>

  <?php
  // deklarasi variabel
  $error_nama = "";
  $error_email = "";
  $error_web = "";
  $error_pesan = "";
  $error_telp = "";

  // deklarasi variabel
  $nama = "";
  $email = "";
  $web = "";
  $pesan = "";
  $telp = "";

  // deklarasi seleksi kondisi pada inputan data dengan metode POST
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["nama"])) // seleksi kondisi jika form kosong
    {
      $error_nama = "Nama tidak boleh kosong"; //text yang akan muncul
    }
    else
    {
      $nama = cek_input($_POST["nama"]); //pengecekan var nama
      if (!preg_match("/^[a-zA-Z ]*$/",$nama)) // seleksi kondisi pada var nama
      {
        $nameErr = "Inputan Hanya boleh huruf dan spasi"; //text yang akan muncul
      }
    }

    if (empty($_POST["email"])) // seleksi kondisi jika form kosong
    {
      $error_email = "Email tidak boleh kosong"; //text yang akan muncul
    }
    else
    {
      $email = cek_input($_POST["email"]); //pengecekan var email
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) // seleksi kondisi pada var email
      {
        $error_email = "Format email Invalid"; //text yang akan muncul
      }
    }

    if (empty($_POST["pesan"])) // seleksi kondisi jika form kosong
    {
      $error_pesan = "Pesan tidak boleh kosong"; //text yang akan muncul
    }
    else
    {
      $pesan = cek_input($_POST["pesan"]); //pengecekan var pesan
    }


    if (empty($_POST["web"])) // seleksi kondisi jika form kosong
    {
      $error_web = "Website tidak boleh kosong"; //text yang akan muncul
    }
    else
    {
      $web = cek_input($_POST["web"]); //pengecekan var web
       // seleksi kondisi pada var telp
      if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]
        /i",$web))
      {
        $error_web = "URL tidak valid"; //text yang akan muncul
      }
    }

    if (empty($_POST["telp"])) // seleksi kondisi jika form kosong
    {
      $error_telp = "Telp tidak boleh kosong"; //text yang akan muncul
    }
    else
    {
      $telp = cek_input($_POST["telp"]);  //pengecekan var telp

      if(!is_numeric($telp)) // seleksi kondisi pada var telp
      {
        $error_telp = 'Nomor HP hanya boleh angka'; //text yang akan muncul
      }
    }

  }

  // deklarasi fungsi function pada var data
  function cek_input($data) {
    // deklarasi pada var data
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;  //fungsi kembali ke var data
  }
  ?>

  <!-- deklarasi class pada div -->
  <div class="row">
  <div class="col-md-6">
  <div class="card">
    <div class="card-header">
      Contoh Validasi Form dengan PHP <!-- text yang akan muncul -->
    </div>
    <div class="card-body">
  <!-- pembuatan form dengan method POST -->
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div class="form-group row">
      <!-- deklarasi label -->
      <label for="nama" class="col-sm-2 col-form-label">Nama</label>
      <div class="col-sm-10">
        <!-- membuat kolom inputan data -->
        <input type="text" name="nama" class="form-control <?php echo ($error_nama !="" ?
          "is-invalid" : ""); ?>" id="nama" placeholder="Nama" value="<?php echo $nama; ?>">
          <span class="warning"><?php echo $error_nama; ?></span>
      </div>
    </div>

    <div class="form-group row">
      <!-- deklarasi label -->
      <label for="email" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <!-- membuat kolom inputan data -->
        <input type="text" name="email" class="form-control <?php echo($error_email !="" ?
          "is-invalid" : ""); ?>" id="email" placeholder="email" value="<?php echo $email; ?>">
          <span class="warning"><?php echo $error_email; ?></span>
      </div>
    </div>

    <div class="form-group row">
      <!-- deklarasi label -->
      <label for="web" class="col-sm-2 col-form-label">Website</label>
      <div class="col-sm-10">
        <!-- membuat kolom inputan data -->
        <input type="text" name="web" class="form-control  <?php echo($error_web !="" ?
         "is-invalid" : ""); ?>" id="web" placeholder="web" value="<?php echo $web; ?>">
         <span class="warning"><?php echo $error_web; ?></span>
      </div>
    </div>

    <div class="form-group row">
      <!-- deklarasi label -->
      <label for="telp" class="col-sm-2 col-form-label">Telp</label>
      <div class="col-sm-10">
        <!-- membuat kolom inputan data -->
        <input type="text" name="telp" class="form-control <?php echo($error_telp !="" ?
         "is-invalid" : ""); ?>" id="telp" placeholder="telp" value="<?php echo $telp; ?>">
         <span class="warning"><?php echo $error_telp; ?></span>
      </div>
    </div>

    <div class="form-group row ">
      <!-- deklarasi label -->
      <label for="pesan" class="col-sm-2 col-form-label">Pesan</label>
      <div class="col-sm-10">
        <!-- membuat kolom inputan data berupa textarea -->
        <textarea name="pesan" class="form-control <?php echo($error_pesan !="" ?
          "is-invalid" : ""); ?>"><?php echo $pesan; ?></textarea><span class="warning">
          <?php echo $error_pesan; ?>
         </span>
      </div>
    </div>


    <div class="form-group row">
      <div class="col-sm-10">
        <!-- membuat button untuk submit -->
        <button type="submit" class="btn btn-primary">Sign in</button>
      </div>
    </div>
  </form>

    </div>
  </div>
  </div>
  </div>

  <?php
  // menuliskan text yang akan muncul pada tampilan web
  echo "<h2>Your Input:</h2>";
  echo "Nama = ".$nama; //menuliskan data var nama
  echo "<br>";
  echo "Email = ".$email; //menuliskan data var email
  echo "<br>";
  echo "Website = ".$web; //menuliskan data var web
  echo "<br>";
  echo "Telp = ".$telp; //menuliskan data var telp
  echo "<br>";
  echo "Pesan = ".$pesan; //menuliskan data var pesan
  ?>

</body>
</html>
