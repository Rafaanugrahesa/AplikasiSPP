<?php
include"../Template-SPP/Header.php";
include"../Template-SPP/Navbar.php";
include"../Template-SPP/Sidebar.php";

?>

<div class="main-content">
        <section class="section">
          <div class="row">
           <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Tambah Data</h4>
                    <div class="card-header-action">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header">
<html lang="en">
<head>
</head>
<body>
    <form action="input-aksi.php" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td><input type="text" name="kelas"></td>
            </tr>
            <tr>
                <td>Pilih kelas</td>
                <td><input type="text" name="pekerjaan"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" values="Simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>
                </div>
</section>
</div>


<?php
    include "../Template-SPP/Footer.php";
    ?>