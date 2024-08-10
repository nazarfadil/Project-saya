<?php
include 'cek_login.php';
include 'koneksi.php';

$sql = "SELECT * FROM pesanan";
$result = $koneksi->query($sql);
include 'header.php';
?>
<div class="container mt-5">
    <h1>Daftar Pesanan</h1>
    <table class="table table-borderd">
        <thead>
            <th>Nama</th>
            <th>Phone</th>
            <th>Jumlah Peserta</th>
            <th>Jumlah Hari</th>
            <th>Akomodasi</th>
            <th>Transportasi</th>
            <th>Service/Makanan</th>
            <th>Harga Paket</th>
            <th>Total Tagihan</th>
            <th>Aksi</th>
        </thead>
        <tbody>
                    <?php while ($row = $result->fetch_assoc()) : ?>
                    <tr>
                        <td><?= $row['nama_pemesanan'];?></td>
                        <td><?= $row['no_hp'];?></td>
                        <td><?= $row['jumlah_peserta'];?></td>
                        <td><?= $row['jumlah_hari'];?></td>
                        <td><?= $row['penginapan'];?></td>
                        <td><?= $row['transportasi'];?></td>
                        <td><?= $row['service'];?></td>
                        <td><?= number_format($row['harga_paket'], 0, ',', '.'); ?></td>
                        <td><?= number_format($row['jumlah_tagihan'], 0, ',', '.'); ?></td>
                        <td>
                            <div class="btn-group">
                            <a href="edit_pesanan.php?id=<?= $row['id']; ?>" class="btn btn-primary btn-sn">Edit</a>
                            <a href="delete_pesanan.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-sn" onclick="return confirm('Apakah Yakin Ingin Menghapus ?')">Delete</a>

                            </div>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
    </table>
</div>
<?php include 'footer.php'; ?>