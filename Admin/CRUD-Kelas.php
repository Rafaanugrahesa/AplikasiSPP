<?php
include"../Template-SPP/Header.php";
include"../Template-SPP/Navbar.php";
include"../Template-SPP/Sidebar.php";


 if(isset($_GET['pesan'])){
        $pesan = $_GET['pesan'];
        if($pesan == "input"){
            echo "Data berhasil di input.";
        }else if($pesan == "update"){
            echo "data berhasil di update.";
        }else if($pesan == "hapus"){
            echo "data berhasil di hapus.";
        }
     }
    ?>

    
  <!-- Main Content -->
  <div class="main-content">
  <section class="section">
  <div class="row">
           <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Data Kelas</h4>
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
                    <h4>Data transaksi pembayaran</h4>
                    <a class='btn btn-primary' href="../kelas/tambah.php">Tambah</a>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                      <tr>
                        <th>id_kelas</th>
                        <th>nama_kelas</th>
                        <th>kompetensi_keahlian</th>
                        <th>Action</th>
                    </tr>
                    <?php
                        include "../koneksi.php";
                        $sql = mysqli_query($koneksi,"SELECT*FROM kelas");
                        while($data=mysqli_fetch_array($sql)){
            ?>
            <tr>
                <td><?php echo $data['id_kelas'];?></td>
                <td><?php echo $data['nama_kelas'];?></td>
                <td><?php echo $data['kompetensi_keahlian'];?></td>
                <td>
                    <a class="btn btn-primary" href="edit.php?id=<?php echo $data['id_kelas'];?>">Edit</a>
                    <a class="btn btn-danger" href="hapus.php?id=<?php echo $data['id_kelas'];?>">Hapus</a>
                </td>
            </tr>
            <?php } ?>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      
<?php
    include "../Template-SPP/Footer.php";
    ?>