<?php 
require '../functions.php';

$keyword = $_GET["keyword"];

  $query = "SELECT * FROM layanan LEFT JOIN kategori USING (id_kategori) WHERE  
                nama_kategori LIKE '%$keyword%' OR 
                nama LIKE '%$keyword%' OR     
                deskripsi LIKE '%$keyword%' 
            ";
  $layanan = query($query);
?>

    
          <table class="table" style="width: 100%;">
            <thead>
              <tr>
                <th width="60px" scope="col">No</th>
                <th scope="col">Kategori</th>
                <th scope="col">Nama Layanan</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Gambar</th>
                <th width="150px">Aksi</th>
              </tr>
            </thead>
              <tbody>
              <?php $no = 1; ?>
              <?php foreach($layanan as $row) { ?>
              
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row["nama_kategori"] ?></td>
                    <td><?= $row["nama"] ?></td>
                    <td><?= $row["deskripsi"] ?></td>
                    <td> <a href="img/<?= $row["gambar"] ?>" target="_blank"> <img src="img/<?= $row["gambar"] ?>" width="50px"></a></td>
                    <td>
                      <a href="ubah-layanan.php?id=<?= $row["id_layanan"] ?>" class="btn btn-danger">Edit</a>
                      <a href="hapus.php?idl=<?= $row["id_layanan"] ?>" class="btn btn-primary" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Delete</a>
                    </td>
                    </tr>
                    <?php } ?>
              </tbody>
            </table>
      
        