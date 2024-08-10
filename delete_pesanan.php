<?php 
require 'cek_login.php';
include 'koneksi.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM pesanan WHERE id = $id";
    if($koneksi->query($sql) === TRUE) {
        echo "
            <script>
                alert('Pesanan Berhasil Dihapus');
                document.location = 'modifikasi.php';
            </script>";
    } else {
        // Perbaikan di sini, menghapus titik koma yang tidak perlu
        echo "Error : " . $sql . "<br>" . $koneksi->error;
    }
    
}
else {
    echo "ID Tidak Ditemukan";
        
}
?>
