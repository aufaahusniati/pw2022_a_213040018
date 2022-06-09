<style>
    .input-group i {
        font-size: 22px;
    }

</style>

<?php 
if (isset($_POST["kategori_naik"])) {
    $layanan = query("SELECT * FROM layanan LEFT JOIN kategori USING (id_kategori) ORDER BY nama_kategori ASC;");
 }
if (isset($_POST["layanan_naik"])) {
    $layanan = query("SELECT * FROM layanan LEFT JOIN kategori USING (id_kategori) ORDER BY nama ASC;");
}
if (isset($_POST["kategori_turun"])) {
    $layanan = query("SELECT * FROM layanan LEFT JOIN kategori USING (id_kategori) ORDER BY nama_kategori DESC;");
}
if (isset($_POST["layanan_turun"])) {
    $layanan = query("SELECT * FROM layanan LEFT JOIN kategori USING (id_kategori) ORDER BY nama DESC;");
}

?>


<form action="" method="POST">
    <div class="container-urutan">
        <div class="col d-inline-flex">
         <div class="input-group me-3 mt-3">
             <button class="btn btn dropdown-toggle" style="background-color:#c2b280;" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-sort-up-alt"></i>&nbsp;</button>
                <ul class="dropdown-menu" style="background-color: #c2b280 ;">
                    <li><button class="dropdown-item" name="kategori_naik" type="submit">Kategori</button></li>
                    <li><button class="dropdown-item" name="layanan_naik" type="submit">Nama Layanan</button></li>
                </ul>
         </div>
         <div class="input-group mt-3">
             <button class="btn btn-outline dropdown-toggle" style="background-color:#c2b280 ;" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-sort-down"></i>&nbsp;</button>
                <ul class="dropdown-menu" style="background-color: #c2b280 ;">
                    <li><button class="dropdown-item" name="kategori_turun" type="submit">Kategori</button></li>
                    <li><button class="dropdown-item" name="layanan_turun" type="submit">Nama layanan</button></li>
                </ul>
         </div>
      </div>
 </div>
 </form>