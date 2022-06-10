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

?>

