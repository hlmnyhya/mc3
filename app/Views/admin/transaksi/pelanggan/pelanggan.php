<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Data Transaksi Pelanggan</h4>
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="<?= base_url('admin/dashboard')?>">
                            <i class="flaticon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Transaksi</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('admin/master/produk')?>">Pelanggan</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                      <div class="card-header">
                          <div style="display: flex; justify-content: space-between; align-items: center;">
                          <h4 class="card-title">Pelanggan</h4>
                         <div class="ml-md-auto py-2 py-md-0">
								<!-- <a href="#" class="btn btn-white btn-border btn-round mr-2">Kelola Penjualan</a> -->
								<a href="#" class="btn btn-secondary btn-round" data-toggle="modal" data-target="#tambahPelangganModal">Tambah Pelanggan</a>
							</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="basic-datatables" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Tanggal</th>
                                            <th>Jam</th>
                                            <th>Telp</th>
                                            <th>Alamat</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Tanggal</th>
                                            <th>Jam</th>
                                            <th>Telp</th>
                                            <th>Alamat</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach ($pelanggan as $item) : ?>
                                            <tr>
                                                <td><?= $item['nama'] ?></td>
                                                <td><?= $item['tanggal'] ?></td>
                                                <td><?= $item['jam'] ?></td>
                                                <td><?= $item['telp'] ?></td>
                                                <td><?= $item['alamat'] ?></td>
                                                <td><?= $item['status'] ?></td>
                                                <td>
                                     <div class="dropdown">
        <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
            DITERIMA
        </button>
        <div class="dropdown-menu">
<a type="button" class="dropdown-item btn btn-primary text-white" href="<?= base_url('admin/transaksi/pelanggan/update_diproses/'. $item['id']);?>">DIPROSES</a>
<?php var_dump($item['id']); ?>
<a type="button" class="dropdown-item btn btn-danger text-white" href="<?= base_url('admin/transaksi/pelanggan/update_dikembalikan/'. $item['id']);?>">DIKEMBALIKAN</a>
<a type="button" class="dropdown-item btn btn-info text-white" href="<?= base_url('admin/transaksi/pelanggan/update_belum_selesai/'. $item['id']);?>">BELUM SELESAI</a>
<a type="button" class="dropdown-item btn btn-success text-white" href="<?= base_url('admin/transaksi/pelanggan/update_selesai/'. $item['id']);?>">SELESAI</a>

        </div>
    </div>
                                                </td>

                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="tambahPelangganModal" tabindex="-1" role="dialog" aria-labelledby="tambahPelangganModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahPelangganModalLabel">Tambah Pelanggan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Isi form tambah pelanggan di sini -->
              <form id="tambahPelangganForm" action="<?= base_url('admin/transaksi/pelanggan/store')?>" method="POST">
	<div class="form-group">
	    <label for="tanggal">Tanggal</label>
	    <input type="text" class="form-control" id="tanggal" name="tanggal" required>
	</div>
	<div class="form-group">
	    <label for="jam">Jam</label>
	    <input type="text" class="form-control" id="jam" name="jam" required>
	</div>
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" required>
    </div>
	<div class="form-group">
	    <label for="notelp">No. Telp</label>
	    <input type="text" class="form-control" id="telp" name="telp" required>
	</div>
    <div class="form-group">
    <label for="status">Status</label>
    <select class="form-control" id="status" name="status">
        <option value="DITERIMA">DITERIMA</option>
        <option value="DIPROSES">DIPROSES</option>
        <option value="DIKEMBALIKAN">DIKEMBALIKAN</option>
        <option value="BELUM SELESAI">BELUM SELESAI</option>
        <option value="SELESAI">SELESAI</option>
    </select>
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
    </div>
</div>
<div class="modal-footer">
	<button type="button" class="btn btn-warning" data-dismiss="modal">Tutup</button>
	<button type="submit" class="btn btn-success">Simpan</button>
</div>
</form>
        </div>
    </div>
</div>

	<!-- Prefix NO TELP -->
	<script>
	    // Mendapatkan elemen input berdasarkan ID
	    var inputTelp = document.getElementById("telp");
		
	    // Menambahkan event listener untuk mengubah nilai input saat pengguna mengetik
	    inputTelp.addEventListener("input", function() {
	        // Mengambil nilai input tanpa spasi dan karakter non-digit
	        var telpValue = inputTelp.value.replace(/\D/g, "");
		
	        // Menambahkan prefix "08" ke nomor telepon
	        if (telpValue.length >= 2) {
	            telpValue = "08" + telpValue.substring(2);
	        }
		
	        // Mengatur nilai input dengan nomor telepon yang sudah ditambahkan prefix
	        inputTelp.value = telpValue;
	    });
	</script>

	<!-- Tanggal -->
	<script>
	    // Mendapatkan elemen input berdasarkan ID
	    var inputJam = document.getElementById("jam");

	    // Mendapatkan jam sekarang dalam format 24 jam
	    var today = new Date();
	    var hours = String(today.getHours()).padStart(2, '0'); // Menggunakan padStart untuk memastikan 2 digit angka
	    var minutes = String(today.getMinutes()).padStart(2, '0');

	    // Menggabungkan jam dan menit dalam format "hh:mm"
	    var formattedTime = hours + ':' + minutes;

	    // Mengatur nilai input dengan jam sekarang
	    inputJam.value = formattedTime;
	</script>

	<!-- Jam -->
	<script>
	    // Mendapatkan elemen input berdasarkan ID
	    var inputTanggal = document.getElementById("tanggal");

	    // Nama bulan
	    var namaBulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", 	"November", "Desember"];

	    // Mendapatkan tanggal sekarang
	    var today = new Date();
	    var dd = today.getDate();
	    var mm = namaBulan[today.getMonth()];
	    var yyyy = today.getFullYear();

	    // Menggabungkan tanggal, bulan, dan tahun dalam format "7 Juli 2023"
	    today = dd + ' ' + mm + ' ' + yyyy;

	    // Mengatur nilai input dengan tanggal sekarang
	    inputTanggal.value = today;
	</script>	
