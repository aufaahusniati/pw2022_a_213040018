<?php 

// Koneksi ke DB
$conn = mysqli_connect("localhost", "root", "", "pw2022_213040018") or die ("Koneksi Gagal!");
  
// Query
function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
    }
    return $rows;
}

function registrasi($data) {
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // Cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user 
                                    WHERE username = '$username'");
    
    if(mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('Username yang dipilih sudah terdaftar!');
                </script>";
        return false;
    }

    // cek konfirmasi password
    if($password != $password2) {
        echo "<script>
                alert('Konfirmasi password tidak sesuai');
            </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT); 

    // Tambahkan userbaru ke database
    mysqli_query($conn, "INSERT INTO user VALUES
                ('', '$username', '$password')");
    return mysqli_affected_rows($conn,);
}










// Cari kategori
// function cari($keyword) {
//     $query = "SELECT * FROM kategori
//                 WHERE nama_kategori LIKE '%keyword%'     
//             ";
//     return query($query);
// }

// Cari layanan
// function cari_layanan($keyword) {
//     $query = "SELECT * FROM layanan
//                 WHERE  
//                 nama LIKE '%keyword%' OR     
//                 deskripsi LIKE '%keyword%' 
//             ";
//     return query($query);
// }


// Tambah Data Kategori
// function tambah($data) {
//     global $conn;

//     $namak = htmlspecialchars($data["nama_kategori"]);

//     $query = "INSERT INTO 
//                 kategori VALUES
//                 (null, '$namak')
//             ";

//     mysqli_query($conn, $query);
    
//     return mysqli_affected_rows($conn);
// }

// // Tambah Data Layanan
// function tambah_layanan($data) {
//     global $conn;

//     $kategori = htmlspecialchars($data["kategori"]);
//     $nama = htmlspecialchars($data["nama"]);
//     $deskripsi = htmlspecialchars($data["deskripsi"]);
//     $gambar = htmlspecialchars($data["gambar"]);

//     // Upload gambar
//     $gambar = upload();
//     if (!$gambar) {
//         return false;
//     }

//     $query = "INSERT INTO layanan
//     VALUES
//     (null, '$kategori', '$nama', '$deskripsi', '$gambar')";
//     mysqli_query($conn, $query);
    
//     return mysqli_affected_rows($conn);
// }

// // Upload gambar
// function upload() {
//     $namaFile = $_FILES['gambar']['nama'];
//     $ukuranFile = $_FILES['gamabar']['size'];
//     $error = $_FILES['gambar']['error'];
//     $tmpName = $_FILES['gambar']['tmp_name'];

//     // Cek apakah tidak ada gambar yang diupload
//     if ($error === 4) {
//         echo "<script>
//                 alert('Pilih gambar terlebih dahulu')
//                 </script>
//             ";
//         return false;
//     }

//     // Cek apakah yang diupload adalah gambar
//     $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
//     $ekstensiGambar = explode('.', $namaFile);
//     $ekstensiGambar = strtolower(end($ekstensiGambar));

//     if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
//         echo "<script>
//                 alert('Anda bukan mengupload gambar!')
//                 </script>
//             ";
//         return false;
//     }

//     // Cek jika ukurannya terlalu besar
//     if ($ukuranFile > 1000000) {
//         echo "<script>
//                 alert('Ukuran gambar terlalu besar')
//                 </script>
//             ";
//         return false;
//     }

//     // Lolos pengecekan, gambar siap diupload
//     // Generate nama gambar baru
//     $namaFileBaru = uniqid();
//     $namaFileBaru .= ".";
//     $namaFileBaru .= $ekstensiGambar;

//     move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

//     return $namaFileBaru;
// }

// Hapus data kategori
// function hapus($id) {
//     global $conn;
//     mysqli_query($conn, "DELETE FROM kategori WHERE id_kategori = $id") or die(mysqli_error($conn));

//     return mysqli_affected_rows($conn);
// }

// Hapus data Layanan
// function hapus_layanan($id) {
//     global $conn;
//     mysqli_query($conn, "DELETE FROM layanan WHERE id_layanan = $id") or die(mysqli_error($conn));

//     return mysqli_affected_rows($conn);
// }

?>

