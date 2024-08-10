<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $namaPemesanan = $_POST['nama_pemesanan'];
    $NoHp = $_POST['no_hp'];
    $tanggalPesan = $_POST['tanggal_pesan'];
    $jumlahHari = $_POST['jumlah_hari'];
    $penginapan = isset($_POST['penginapan']) ? 'Y' : 'N';
    $transportasi = isset($_POST['transportasi']) ? 'Y' : 'N';
    $service = isset($_POST['service']) ? 'Y' : 'N';
    $jumlahPeserta = $_POST['jumlah_peserta'];

    // Menghitung harga paket berdasarkan pilihan
    $hargaPenginapan = ($penginapan == 'Y') ? 1000000 : 0;
    $hargaTransportasi = ($transportasi == 'Y') ? 1200000 : 0;
    $hargaService = ($service == 'Y') ? 500000 : 0;
    $hargaPaket = $hargaPenginapan + $hargaTransportasi + $hargaService;

    // Menghitung jumlah tagihan
    $jumlahTagihan = $hargaPaket * $jumlahPeserta * $jumlahHari;

    // Menyimpan data ke database
    $sql = "INSERT INTO pesanan (nama_pemesanan, no_hp, tanggal_pesan, jumlah_hari, penginapan, transportasi, service, jumlah_peserta, harga_paket, jumlah_tagihan) 
            VALUES ('$namaPemesanan', '$NoHp', '$tanggalPesan', '$jumlahHari', '$penginapan', '$transportasi', '$service', '$jumlahPeserta', '$hargaPaket', '$jumlahTagihan')";

    if ($koneksi->query($sql) === TRUE) {
        echo "
            <script>
                alert('Pesanan Berhasil Disimpan');
                document.location = 'index.php';
            </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
}
?>
