<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'jwd2024');
$databuku = mysqli_query($koneksi, "SELECT * FROM databuku");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
  <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 mx-5 border-bottom">
    <div class="col-md-3 mb-2 mb-md-0">
      <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
        <i class="bi bi-journals ml-20" style="font-size: 2rem;"></i>
      </a>
    </div>

    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
      <li><a href="#" class="nav-link px-2 link-secondary">Beranda</a></li>
      <li><a href="#" class="nav-link px-2">Buku</a></li>
      <li><a href="#" class="nav-link px-2">Peminjaman</a></li>
      <li><a href="#" class="nav-link px-2">FAQs</a></li>
      <li><a href="#" class="nav-link px-2">About</a></li>
    </ul>

    <div class="col-md-3 text-end">
      <button type="button" class="btn btn-outline-primary me-2">Login</button>
      <button type="button" class="btn btn-primary">Sign-up</button>
    </div>
  </header>

  <div class="container mx-10">
    <div class="row">
      <div class="col-sm-11">
        <h2>Data Buku</h2>
      </div>
      <div class="col-sm-1">
        <a href="tambah_data.html"><button type="button" class="btn btn-primary">Tambah Buku</button></a>
      </div>
    </div>


    <table class="table table-striped table-hover">
      <thead>
        <th>No.</th>
        <th>Kode</th>
        <th>Judul</th>
        <th>Cover</th>
        <th>Pengarang</th>
        <th>Penerbit</th>
        <th>Jenis</th>
        <th>Kategori</th>
        <th>Ketersediaan</th>
        <th>Harga</th>
        <th>Jumlah</th>
        <th>Aksi</th>
      </thead>
      <tbody>
        <?php
        $i = 1;
        $i++;
        foreach($databuku as $buku) {
        ?>
        <tr>
          <td scope="row"><?=$buku['id']?></td>
          <td><?=$buku['kode']?></td>
          <td><?=$buku['judul']?></td>
          <td>
            <img src="assets/images/<?=$buku['cover']?>" alt="" width="50px">
          </td>
          <td><?=$buku['pengarang']?></td>
          <td><?=$buku['penerbit']?></td>
          <td><?=$buku['jenis']?></td>
          <td>
            <?php
            $kategori="";
            if($buku['kategori_rpl']==1) {
              $kategori=$kategori.'RPL, ';
            }
            if($buku['kategori_elektr']==1) {
              $kategori=$kategori.'Elektronika';
            }
            echo $kategori;
            ?>
          </td>
          <td>
          <?php
            $ketersediaan="";
            if($buku['ketersediaan']==1) {
              echo'Tersedia';
            } else {
              echo'Tidak tersedia';
            };
            ?>
        </td>
          <td><?=$buku['harga']?></td>
          <td><?=$buku['jumlah']?></td>
          <td>
            <button type="button" class="btn btn-danger">Hapus</button>
            <button type="button" class="btn btn-warning">Edit</button>
          </td>
        </tr>
        <?php
        $i++;        
        };
        ?>
        <!-- <tr>
          <td>2</td>
          <td>23</td>
          <td>Lord of The Rings</td>
          <td></td>
          <td>J.R Tolkien</td>
          <td>Gramedia</td>
          <td>Fiksi</td>
          <td>Hiburan</td>
          <td>Tersedia</td>
          <td>80000</td>
          <td>5000</td>
          <td>
            <button type="button" class="btn btn-danger">Hapus</button>
            <button type="button" class="btn btn-warning">Edit</button>
          </td>
        </tr> -->
        <!-- <tr>
          <td>3</td>
          <td>27</td>
          <td>Marmut Merah Jambu</td>
          <td></td>
          <td>Raditya Dika</td>
          <td>Sidu</td>
          <td>Fiksi</td>
          <td>Hiburan</td>
          <td>Tidak Tersedia</td>
          <td>80000</td>
          <td>5000</td>
          <td>
            <button type="button" class="btn btn-danger">Hapus</button>
            <button type="button" class="btn btn-warning">Edit</button>
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>1</td>
          <td>Koala Kumal</td>
          <td></td>
          <td>Raditya Dika</td>
          <td>Gramedia</td>
          <td>Fiksi</td>
          <td>Hiburan</td>
          <td>Tersedia</td>
          <td>80000</td>
          <td>5000</td>
          <td>
            <button type="button" class="btn btn-danger">Hapus</button>
            <button type="button" class="btn btn-warning">Edit</button>
          </td>
        </tr>
        <tr>
          <td>5</td>
          <td>12</td>
          <td>IT For Dummies</td>
          <td></td>
          <td>J.K Rowling</td>
          <td>Gramedia</td>
          <td>Fiksi</td>
          <td>Hiburan</td>
          <td>Tersedia</td>
          <td>80000</td>
          <td>5000</td>
          <td>
            <button type="button" class="btn btn-danger">Hapus</button>
            <button type="button" class="btn btn-warning">Edit</button>
          </td>
        </tr>
        <tr>
          <td>6</td>
          <td>12</td>
          <td>Elektronika in a Nutshell</td>
          <td></td>
          <td>J.K Rowling</td>
          <td>Gramedia</td>
          <td>Fiksi</td>
          <td>Hiburan</td>
          <td>Tersedia</td>
          <td>80000</td>
          <td>5000</td>
          <td>
            <button type="button" class="btn btn-danger">Hapus</button>
            <button type="button" class="btn btn-warning">Edit</button>
          </td>
        </tr> -->
      </tbody>
    </table>
  </div>

  <div class="container">
    <footer class="py-3 my-4">
      <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
      </ul>
      <p class="text-center text-body-secondary">© 2024 Company, Inc</p>
    </footer>
  </div>
</body>

</html>