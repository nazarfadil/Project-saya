<?php include 'header.php'; ?>
<div class="row">
    <div class="col-md-12">
        <div class="card mb-3">
            <div class="card-header">
                <h4 class="card-title">Form Pemesanan Paket Wisata</h4>
            </div>
            <div class="card-body">
                <form action="proses_pemesanan.php" method="post">
                    <div class="form-group mb-3">
                        <label for="nama_pemesanan">Nama Pemesan :</label>
                        <input type="text" name="nama_pemesanan" id="nama_pemesanan" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="no_hp">No Hp/Telp :</label>
                        <input type="text" name="no_hp" id="no_hp" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="tanggal_pesan">Tanggal Pemesanan :</label>
                        <input type="date" name="tanggal_pesan" id="tanggal_pesan" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="jumlah_hari">Waktu Pelaksanaan Perjalanan :</label>
                        <input type="number" name="jumlah_hari" id="jumlah_hari" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label>Pelayanan Paket Perjalanan</label><br>
                        <input type="checkbox" class="form-check-input" name="penginapan" id="penginapan"> 
                        <label for="penginapan" class="form-check-label">Penginapan (Rp 1.000.000)</label>
                    </div>
                    <div class="form-group mb-3">
                        <input type="checkbox" class="form-check-input" name="transportasi" id="transportasi"> 
                        <label for="transportasi" class="form-check-label">Transportasi (Rp 1.200.000)</label>
                    </div>
                    <div class="form-group mb-3">
                        <input type="checkbox" class="form-check-input" name="service" id="service"> 
                        <label for="service" class="form-check-label">Makanan (Rp 500.000)</label>
                    </div>
                    <div class="form-group mb-3">
                        <label for="jumlah_peserta">Jumlah Peserta :</label>
                        <input type="number" name="jumlah_peserta" id="jumlah_peserta" class="form-control" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="harga_paket">Total Harga Paket :</label>
                        <input type="number" name="harga_paket" id="harga_paket" class="form-control" readonly>
                    </div>
                    <div class="form-group mb-3">
                        <label for="jumlah_tagihan">Total Tagihan :</label>
                        <input type="number" name="jumlah_tagihan" id="jumlah_tagihan" class="form-control" readonly>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-primary" id="hitungBtn">Hitung</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function() {
        $('#hitungBtn').click(function() {
            var penginapan = $('#penginapan').prop('checked') ? 1000000 : 0;
            var transportasi = $('#transportasi').prop('checked') ? 1200000 : 0;
            var service = $('#service').prop('checked') ? 500000 : 0;
            var jumlahHari = $('#jumlah_hari').val() || 0;
            var jumlahPeserta = $('#jumlah_peserta').val() || 0;

            // Menghitung harga paket dan jumlah tagihan
            var hargaPaket = penginapan + transportasi + service;
            var jumlahTagihan = hargaPaket * jumlahHari * jumlahPeserta;

            // Memasukkan hasil perhitungan ke dalam field form
            $('#harga_paket').val(hargaPaket);
            $('#jumlah_tagihan').val(jumlahTagihan);
        });
    });
</script>
<?php include 'footer.php'; ?>
