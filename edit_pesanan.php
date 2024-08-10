<?php
session_start();
include 'koneksi.php';

$id = $_GET['id'];

// Ambil data dari database berdasarkan ID
$sql = "SELECT * FROM pesanan WHERE id='$id'";
$result = $koneksi->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "Data tidak ditemukan.";
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $namaPemesanan = $_POST['nama_pemesanan'];
    $NoHp = $_POST['no_hp'];
    $tanggalPesan = $_POST['tanggal_pesan'];
    $jumlahHari = $_POST['jumlah_hari'];
    $penginapan = isset($_POST['penginapan']) ? 'Y' : 'N';
    $transportasi = isset($_POST['transportasi']) ? 'Y' : 'N';
    $service = isset($_POST['service']) ? 'Y' : 'N';
    $jumlahPeserta = $_POST['jumlah_peserta'];

    $hargaPenginapan = ($penginapan == 'Y') ? 1000000 : 0;
    $hargaTransportasi = ($transportasi == 'Y') ? 1200000 : 0;
    $hargaService = ($service == 'Y') ? 500000 : 0;
    $hargaPaket = $hargaPenginapan + $hargaTransportasi + $hargaService;
    $jumlahTagihan = $hargaPaket * $jumlahPeserta * $jumlahHari;

    $sql = "UPDATE pesanan SET 
            nama_pemesanan='$namaPemesanan', 
            no_hp='$NoHp', 
            tanggal_pesan='$tanggalPesan', 
            jumlah_hari='$jumlahHari', 
            penginapan='$penginapan', 
            transportasi='$transportasi', 
            service='$service', 
            jumlah_peserta='$jumlahPeserta', 
            harga_paket='$hargaPaket', 
            jumlah_tagihan='$jumlahTagihan' 
            WHERE id='$id'";

    if ($koneksi->query($sql) === TRUE) {
        echo "<script>
                alert('Pesanan Berhasil Diubah');
                document.location = 'modifikasi.php';
              </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
}
?>

<?php include 'header.php'; ?>
<div class="row">
    <div class="col-md-12">
        <div class="card mb-3">
            <div class="card-header">
                <h4 class="card-title">Form Pemesanan Paket Wisata</h4>
            </div>
            <div class="card-body">
                <?php if (isset($row)) { ?>
                <form action="" method="post">
                    <div class="form-group mb-3">
                        <label for="nama_pemesanan">Nama Pemesan :</label>
                        <input type="text" name="nama_pemesanan" id="nama_pemesanan" class="form-control" value="<?= $row['nama_pemesanan']; ?>" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="no_hp">No Hp/Telp :</label>
                        <input type="text" name="no_hp" id="no_hp" class="form-control" value="<?= $row['no_hp']; ?>" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="tanggal_pesan">Tanggal Pemesanan :</label>
                        <input type="date" name="tanggal_pesan" id="tanggal_pesan" class="form-control" value="<?= $row['tanggal_pesan']; ?>" required>

                    </div>
                    <div class="form-group mb-3">
                        <label for="jumlah_hari">Waktu Pelaksanaan Perjalanan :</label>
                        <input type="number" name="jumlah_hari" id="jumlah_hari" class="form-control" value="<?= $row['jumlah_hari']; ?>" required>
                    </div>
                    <div class="form-group mb-3">
                        <label>Pelayanan Paket Perjalanan</label><br>
                        <input type="checkbox" class="form-check-input" name="penginapan" id="penginapan" <?= ($row['penginapan'] == 'Y') ? 'checked' : ''; ?>>
                        <label for="penginapan" class="form-check-label">Penginapan (Rp 1.000.000)</label>
                    </div>
                    <div class="form-group mb-3">
                        <input type="checkbox" class="form-check-input" name="transportasi" id="transportasi" <?= ($row['transportasi'] == 'Y') ? 'checked' : ''; ?>>
                        <label for="transportasi" class="form-check-label">Transportasi (Rp 1.200.000)</label>
                    </div>
                    <div class="form-group mb-3">
                        <input type="checkbox" class="form-check-input" name="service" id="service" <?= ($row['service'] == 'Y') ? 'checked' : ''; ?>>
                        <label for="service" class="form-check-label">Makanan (Rp 500.000)</label>
                    </div>
                    <div class="form-group mb-3">
                        <label for="jumlah_peserta">Jumlah Peserta :</label>
                        <input type="number" name="jumlah_peserta" id="jumlah_peserta" class="form-control" value="<?= $row['jumlah_peserta']; ?>" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="harga_paket">Total Harga Paket :</label>
                        <input type="number" name="harga_paket" id="harga_paket" class="form-control" value="<?= $row['harga_paket']; ?>" readonly>
                    </div>
                    <div class="form-group mb-3">
                        <label for="jumlah_tagihan">Total Tagihan :</label>
                        <input type="number" name="jumlah_tagihan" id="jumlah_tagihan" class="form-control" value="<?= $row['jumlah_tagihan']; ?>" readonly>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </form>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
