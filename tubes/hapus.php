<?php 
session_start();

if (!isset($_SESSION['login'])) {
    header('location: login.php');
    exit;
}

require 'functions.php';

// Hapus Data Kategori
    if(isset($_GET['idk'])) {
        $delete = mysqli_query($conn, "DELETE FROM kategori WHERE id_kategori = '".$_GET['idk']."'");
        
        echo "
            <script>
                alert('Data Kategori berhasil dihapus!');
                document.location.href = 'data-kategori.php';    
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data Kategori gagal dihapus!');
                document.location.href = 'data-kategori.php';    
            </script>
        ";
    }

// Hapus Data Layanan
    if(isset($_GET['idl'])) {
        $layanan = mysqli_query($conn, "SELECT gambar FROM layanan WHERE id_layanan = '".$_GET['idl']."' ");
        $l = mysqli_fetch_object($layanan);

        unlink('./img/' .$l->gambar);
        
        $delete = mysqli_query($conn, "DELETE FROM layanan WHERE id_layanan = '".$_GET['idl']."' ");
        
        echo "
            <script>
                alert('Data layanan berhasil dihapus!');
                document.location.href = 'data-layanan.php';    
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data layanan gagal dihapus!');
                document.location.href = 'data-layanan.php';    
            </script>
        ";
    }

?>