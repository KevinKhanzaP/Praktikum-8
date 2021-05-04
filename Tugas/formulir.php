<!DOCTYPE html>
<!-- konfigurasi bahasa -->
<html lang="en">
<head>
    <title>Pendaftaran Peserta Didik Baru</title> <!-- judul -->
    <meta charset="utf-8">
    <!-- konfigurasi responsifitas halaman -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- menyertakan file lain untuk style halaman -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>

    <!-- deklarasi div class untuk pemberian style -->
    <div class="container p-3 my-3 border">
    <h1 class="text-center">Formulir Peserta Didik</h1> <!-- menuliskan text -->

    <?php
      //Include file koneksi, untuk koneksikan ke database
      include "koneksi.php";

      //Fungsi untuk mencegah inputan karakter yang tidak sesuai
      function input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
      }
      //Cek apakah ada kiriman form dari method post
      if ($_SERVER["REQUEST_METHOD"] == "POST") {

          // deklarasi variabel dengan hasil yang didapat nanti dari form
          $nama=input($_POST["nama"]);
          $jpen=input($_POST["jpen"]);
          $tglmsk=input($_POST["tglmsk"]);
          $nis=input($_POST["nis"]);
          $npu=input($_POST["npu"]);
          $paud=input($_POST["paud"]);
          $tk=input($_POST["tk"]);
          $skhun=input($_POST["skhun"]);
          $ijazah=input($_POST["ijazah"]);
          $hobi=input($_POST["hobi"]);
          $cita=input($_POST["cita"]);
          $jk=input($_POST["jk"]);
          $nisn=input($_POST["nisn"]);
          $nik=input($_POST["nik"]);
          $tgllhr=input($_POST["tgllhr"]);
          $tmptlhr=input($_POST["tmptlhr"]);
          $agama=input($_POST["agama"]);
          $khusus=input($_POST["khusus"]);
          $almtjln=input($_POST["almtjln"]);
          $rt=input($_POST["rt"]);
          $rw=input($_POST["rw"]);
          $dsn=input($_POST["dsn"]);
          $keldes=input($_POST["keldes"]);
          $kec=input($_POST["kec"]);
          $kodepos=input($_POST["kodepos"]);
          $tmpttgl=input($_POST["tmpttgl"]);
          $moda=input($_POST["moda"]);
          $nmrhp=input($_POST["nmrhp"]);
          $nmrtlp=input($_POST["nmrtlp"]);
          $email=input($_POST["email"]);
          $kps=input($_POST["kps"]);
          $nokps=input($_POST["nokps"]);
          $kwn=input($_POST["kwn"]);
          $namangr=input($_POST["namangr"]);

          //Query input menginput data kedalam tabel pendaftaraan
          $sql="INSERT INTO formpd (nama,jpen,tglmsk,nis,npu,paud,tk,skhun,ijazah,
              hobi,cita,jk,nisn,nik,tgllhr,tmptlhr,agama,khusus,almtjln,rt,rw,dsn,keldes,kec,
              kodepos,tmpttgl,moda,nmrhp,nmrtlp,email,kps,nokps,kwn,namangr) VALUES
          ('$nama','$jpen','$tglmsk','$nis','$npu','$paud','$tk','$skhun','$ijazah','$hobi',
            '$cita','$jk','$nisn','$nik','$tgllhr','$tmptlhr','$agama','$khusus','$almtjln',
            '$rt','$rw','$dsn','$keldes','$kec','$kodepos','$tmpttgl','$moda','$nmrhp',
            '$nmrtlp','$email','$kps','$nokps','$kwn','$namangr')";

          //Mengeksekusi query diatas
          $hasil=mysqli_query($conn,$sql);

          //cek kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
          if ($hasil) { //menuliskan text
              echo "<div class='alert alert-success'> Selamat $nama anda telah berhasil mendaftar.</div>";
          }
          else { //menuliskan text
              echo "<div class='alert alert-danger'> Pendaftaraan Gagal.</div>";
          }
      }
    ?>
        <!-- membuat form dengan metode simpan POST -->
        <form id="form" method="post">
          <!-- deklarasi div class untuk pemberian style -->
          <div class="alert alert-primary">
              <strong>Registrasi Peserta Didik</strong> <!-- menuliskan text -->
          </div>

          <div class="row"> <!-- deklarasi div class untuk pemberian style dan pembagian barisan -->

              <!-- deklarasi div class untuk pemberian style -->
              <div class="col-sm-3">
                <div class="form-group">
                  <label>Jenis Pendaftaran:</label> <!-- menuliskan text -->
                  <!-- membuat form option -->
                  <select class="form-control" name="jpen">
                      <option>Pilih</option>
                      <!-- membuat pilihan -->
                      <option value="baru">Siswa Baru</option>
                      <option value="pindah">Pindahan</option>
                  </select>
                </div>
              </div>

              <!-- deklarasi div class untuk pemberian style -->
              <div class="col-sm-3">
                  <div class="form-group">
                      <!-- membuat form inputan  -->
                      <label>Tanggal Masuk Sekolah:</label>
                      <input type="date" name="tglmsk" class="form-control">
                  </div>
              </div>

              <!-- deklarasi div class untuk pemberian style -->
              <div class="col-sm-3">
                  <div class="form-group">
                      <!-- membuat form radio button  -->
                      <label>Apakah Pernah PAUD:</label>
                      <br><input type="radio" name="paud" value="ya">Ya
                      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="radio" name="paud" value="tidak">Tidak
                  </div>
              </div>

              <!-- deklarasi div class untuk pemberian style -->
              <div class="col-sm-3">
                  <div class="form-group">
                      <!-- membuat form radio button  -->
                      <label>Apakah Pernah TK:</label>
                      <br><input type="radio" name="tk" value="ya">Ya
                      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="radio" name="tk" value="tidak">Tidak
                  </div>
              </div>

          </div>
          <div class="row">

              <!-- deklarasi div class untuk pemberian style -->
              <div class="col-sm-6">
                <div class="form-group">
                    <!-- membuat form inputan  -->
                    <label>Nomor Identitas Siswa (NIS):</label>
                    <input type="text" name="nis" class="form-control" placeholder="Masukan Nomor NIS">
                </div>
              </div>

              <!-- deklarasi div class untuk pemberian style -->
              <div class="col-sm-6">
                <div class="form-group">
                    <!-- membuat form inputan  -->
                    <label>Nomor Peserta Ujian:</label>
                    <input type="text" name="npu" class="form-control" placeholder="Masukan Nomor Peserta Ujian">
                </div>
              </div>

          </div>
          <div class="row">

              <!-- deklarasi div class untuk pemberian style -->
              <div class="col-sm-6">
                <div class="form-group">
                    <!-- membuat form inputan  -->
                    <label>No. Seri SKHUN Sebelumnya:</label>
                    <input type="text" name="skhun" class="form-control" placeholder="Masukan Nomor Seri SKHUN Sebelumnya">
                </div>
              </div>

              <!-- deklarasi div class untuk pemberian style -->
              <div class="col-sm-6">
                <div class="form-group">
                    <!-- membuat form inputan  -->
                    <label>No. Seri Ijazah Sebelumnya:</label>
                    <input type="text" name="ijazah" class="form-control" placeholder="Masukan Nomor Seri Ijazah Sebelumnya">
                </div>
              </div>

          </div>
          <div class="row">

              <!-- deklarasi div class untuk pemberian style -->
              <div class="col-sm-3">
                <div class="form-group">
                    <!-- membuat form option  -->
                    <label>Hobi:</label>
                    <select class="form-control" name="hobi">
                        <option>Pilih</option>
                        <!-- membuat pilihan  -->
                        <option value="or">Olah Raga</option>
                        <option value="seni">Kesenian</option>
                        <option value="baca">Membaca</option>
                        <option value="tulis">Menulis</option>
                        <option value="travel">Traveling</option>
                        <option value="lain">Lainnya</option>
                    </select>
                </div>
              </div>

              <!-- deklarasi div class untuk pemberian style -->
              <div class="col-sm-3">
                <div class="form-group">
                    <!-- membuat form option  -->
                    <label>Cita-cita:</label>
                    <select class="form-control" name="cita">
                        <option>Pilih</option>
                        <!-- membuat pilihan  -->
                        <option value="pns">PNS</option>
                        <option value="tnipolri">TNI/POLRI</option>
                        <option value="gurudosen">Guru/Dosen</option>
                        <option value="dokter">Dokter</option>
                        <option value="politik">Politikus</option>
                        <option value="wira">Wiraswasta</option>
                        <option value="seni">Seni/Lukis/Artis/Sejenisnya</option>
                        <option value="lain">Lainnya</option>
                      </select>
                </div>
              </div>

          </div>

          <!-- deklarasi div class untuk pemberian style -->
          <div class="alert alert-primary">
              <strong>Data Diri</strong>
          </div>

          <div class="row">

              <!-- deklarasi div class untuk pemberian style -->
              <div class="col-sm-6">
                <div class="form-group">
                    <!-- membuat form inputan  -->
                    <label>Nama Lengkap:</label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Lengkap">
                </div>
              </div>

              <!-- deklarasi div class untuk pemberian style -->
              <div class="col-sm-3">
                <div class="form-group">
                    <!-- membuat form option  -->
                    <label>Jenis Kelamin:</label>
                    <select class="form-control" name="jk">
                          <option>Pilih</option>
                          <!-- membuat pilihan  -->
                          <option value="laki-laki">Laki-laki</option>
                          <option value="perempuan">Perempuan</option>
                      </select>
                  </div>
              </div>

              <!-- deklarasi div class untuk pemberian style -->
              <div class="col-sm-3">
                <div class="form-group">
                    <!-- membuat form option  -->
                    <label>Agama:</label>
                    <select class="form-control" name="agama">
                        <option>Pilih</option>
                        <!-- membuat pilihan  -->
                        <option value="islam">Islam</option>
                        <option value="kristen">Kristen/Protestan</option>
                        <option value="katolik">Katolik</option>
                        <option value="hindu">Hindu</option>
                        <option value="budha">Budha</option>
                        <option value="konghucu">Kong Hu Chu</option>
                        <option value="lain">Lainnya</option>
                    </select>
                </div>
              </div>

          </div>
          <div class="row">

              <!-- deklarasi div class untuk pemberian style -->
              <div class="col-sm-6">
                <div class="form-group">
                    <!-- membuat form inputan  -->
                    <label>NISN:</label>
                    <input type="text" name="nisn" class="form-control" placeholder="Masukan NISN">
                </div>
              </div>

              <!-- deklarasi div class untuk pemberian style -->
              <div class="col-sm-6">
                <div class="form-group">
                    <!-- membuat form inputan  -->
                    <label>NIK:</label>
                    <input type="text" name="nik" class="form-control" placeholder="Masukan NIK">
                </div>
              </div>

          </div>
          <div class="row">

            <!-- deklarasi div class untuk pemberian style -->
            <div class="col-sm-6">
              <div class="form-group">
                  <!-- membuat form inputan  -->
                  <label>Tempat Lahir:</label>
                  <input type="text" name="tmptlhr" class="form-control" placeholder="Masukan Tempat Lahir">
              </div>
            </div>

              <!-- deklarasi div class untuk pemberian style -->
              <div class="col-sm-3">
                <div class="form-group">
                    <!-- membuat form inputan  -->
                    <label>Tanggal Lahir:</label>
                    <input type="date" name="tgllhr" class="form-control">
                </div>
              </div>

              <!-- deklarasi div class untuk pemberian style -->
              <div class="col-sm-3">
                <div class="form-group">
                    <!-- membuat form option  -->
                    <label>Berkebutuhan Khusus:</label>
                    <select class="form-control" name="khusus">
                        <option>Pilih</option>
                        <!-- membuat pilihan  -->
                        <option value="tidakada">Tidak Ada</option>
                        <option value="netra">Netra</option>
                        <option value="rungu">Rungu</option>
                        <option value="grahring">Grahita Ringan</option>
                        <option value="grahsed">Grahita Sedang</option>
                        <option value="dakring">Daksa Ringan</option>
                        <option value="daksed">Daksa Sedang</option>
                        <option value="laras">Laras</option>
                        <option value="wicara">Wicara</option>
                        <option value="tungan">Tuna Ganda</option>
                        <option value="hiper">Hiper Aktif</option>
                        <option value="cerdis">Cerdas Istimewa</option>
                        <option value="bakis">Bakat Istimewa</option>
                        <option value="sulitbljr">Kesulitan Belajar</option>
                        <option value="narkoba">Narkoba</option>
                        <option value="indigo">Indigo</option>
                        <option value="downsyn">Down Sindrome</option>
                        <option value="autis">Autis</option>
                    </select>
                  </div>
                </div>

            </div>
            <div class="row">

              <!-- deklarasi div class untuk pemberian style -->
              <div class="col-sm-6">
                <div class="form-group">
                    <!-- membuat form inputan  -->
                    <label>Alamat Jalan:</label>
                    <input type="text" name="almtjln" class="form-control" placeholder="Masukan Alamat Jalan">
                </div>
              </div>

                <!-- deklarasi div class untuk pemberian style -->
                <div class="col-sm-3">
                    <div class="form-group">
                        <!-- membuat form inputan  -->
                        <label>Nama Dusun:</label>
                        <input type="text" name="dsn" class="form-control" placeholder="Masukan Nama Dusun">
                    </div>
                </div>

                <!-- deklarasi div class untuk pemberian style -->
                <div class="col-sm-3">
                    <div class="form-group">
                        <!-- membuat form inputan  -->
                        <label>Nama Kelurahan/Desa:</label>
                        <input type="text" name="keldes" class="form-control" placeholder="Masukan Nama Kelurahan/Desa">
                    </div>
                </div>

            </div>
            <div class="row">

                <!-- deklarasi div class untuk pemberian style -->
                <div class="col-sm-3">
                  <div class="form-group">
                      <!-- membuat form inputan  -->
                      <label>RT:</label>
                      <input type="text" name="rt" class="form-control" placeholder="Masukan RT">
                  </div>
                </div>

                <!-- deklarasi div class untuk pemberian style -->
                <div class="col-sm-3">
                  <div class="form-group">
                      <!-- membuat form inputan  -->
                      <label>RW:</label>
                      <input type="text" name="rw" class="form-control" placeholder="Masukan RW">
                  </div>
                </div>

                <!-- deklarasi div class untuk pemberian style -->
                <div class="col-sm-6">
                    <div class="form-group">
                        <!-- membuat form inputan  -->
                        <label>Nama Kecamatan:</label>
                        <input type="text" name="kec" class="form-control" placeholder="Masukan Nama Kecamatan">
                    </div>
                </div>

            </div>
            <div class="row">

                <!-- deklarasi div class untuk pemberian style -->
                <div class="col-sm-3">
                  <div class="form-group">
                      <!-- membuat form inputan  -->
                      <label>Kode Pos:</label>
                      <input type="text" name="kodepos" class="form-control" placeholder="Masukan Kode Pos">
                  </div>
                </div>

                <!-- deklarasi div class untuk pemberian style -->
                <div class="col-sm-3">
                  <div class="form-group">
                      <!-- membuat form option  -->
                      <label>Tempat Tinggal:</label>
                      <select class="form-control" name="tmpttgl">
                          <option>Pilih</option>
                          <!-- membuat pilihan -->
                          <option value="ortu">Bersama Orang Tua</option>
                          <option value="wali">Wali</option>
                          <option value="kos">Kos</option>
                          <option value="asrama">Asrama</option>
                          <option value="panti">Panti Asuhan</option>
                          <option value="lain">Lainnya</option>
                      </select>
                  </div>
                </div>

                <!-- deklarasi div class untuk pemberian style -->
                <div class="col-sm-3">
                  <div class="form-group">
                      <!-- membuat form option  -->
                      <label>Moda Transportasi:</label>
                      <select class="form-control" name="moda">
                          <option>Pilih</option>
                          <!-- membuat pilihan -->
                          <option value="jalan">Jalan Kaki</option>
                          <option value="pribadi">Kendaraan Pribadi</option>
                          <option value="umum">Kendaraan Umum/Angkot</option>
                          <option value="jemputan">Jemputan Sekolah</option>
                          <option value="kereta">Kereta Api</option>
                          <option value="ojek">Ojek</option>
                          <option value="andong">Andong/Dokar/Delman/Becak</option>
                          <option value="perahu">Perahu Penyebrangan/Rakit</option>
                          <option value="lain">Lainnya</option>
                      </select>
                  </div>
                </div>

                <!-- deklarasi div class untuk pemberian style -->
                <div class="col-sm-3">
                  <div class="form-group">
                      <!-- membuat form inputan  -->
                      <label>No. HP:</label>
                      <input type="text" name="nmrhp" class="form-control" placeholder="Masukan No. HP">
                  </div>
                </div>

            </div>
            <div class="row">

                <!-- deklarasi div class untuk pemberian style -->
                <div class="col-sm-3">
                  <div class="form-group">
                      <!-- membuat form inputan  -->
                      <label>No. Telepon:</label>
                      <input type="text" name="nmrtlp" class="form-control" placeholder="Masukan No. Telepon">
                  </div>
                </div>

                <!-- deklarasi div class untuk pemberian style -->
                <div class="col-sm-3">
                  <div class="form-group">
                      <!-- membuat form inputan  -->
                      <label>Email Pribadi:</label>
                      <input type="email" name="email" class="form-control" placeholder="Masukan Email">
                  </div>
                </div>

                <!-- deklarasi div class untuk pemberian style -->
                <div class="col-sm-3">
                  <div class="form-group">
                      <!-- membuat form berupa radio button  -->
                      <label>Penerima KPS/PKH/KIP:</label>
                      <br><input type="radio" name="kps" value="ya">Ya
                      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="radio" name="kps" value="tidak">Tidak
                  </div>
                </div>

                <!-- deklarasi div class untuk pemberian style -->
                <div class="col-sm-3">
                  <div class="form-group">
                      <!-- membuat form inputan  -->
                      <label>No. KPS/PKH/KIP:</label>
                      <input type="text" name="nokps" class="form-control" placeholder="Masukan No. KPS/PKH/KIP">
                  </div>
                </div>

            </div>
            <div class="row">

                <!-- deklarasi div class untuk pemberian style -->
                <div class="col-sm-3">
                  <div class="form-group">
                      <!-- membuat form berupa radio button  -->
                      <label>Kewarganegaraan:</label>
                      <br><input type="radio" name="kwn" value="wni"> Indonesia (WNI)
                      &nbsp<input type="radio" name="kwn" value="wna"> Asing (WNA)
                  </div>
                </div>

                <!-- deklarasi div class untuk pemberian style -->
                <div class="col-sm-3">
                  <div class="form-group">
                      <!-- membuat form inputan  -->
                      <label>Nama Negara:</label>
                      <input type="text" name="namangr" class="form-control" placeholder="Masukan Nama Negara">
                  </div>
                </div>

            </div>
            <div class="row">

                <!-- deklarasi div class untuk pemberian style -->
                <div class="col-sm-4">
                    <!-- membuat button untuk submit dan reset form -->
                    <button type="submit" name="Submit" id="Submit" class="btn btn-primary">Daftar</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </div>

            </div>

        </form>
    </div>
</body>
</html>
