<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Edit Produk</h4>
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
                        <a href="#">Master Data</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('admin/master/produk/produk')?>">Produk</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('admin/master/produk/edit/'.$produk['id'])?>">Edit Produk</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div style="display: flex; justify-content: space-between; align-items: center;">
                                <h4 class="card-title">Edit Produk</h4>
                                <a href="<?= base_url('admin/master/produk/produk')?>" class="btn btn-sm btn-primary"><i class="icon-plus"></i> Kembali</a>
                            </div>
                        </div>

                        <?= form_open_multipart(base_url('admin/master/produk/update/'.$produk['id'])); ?>
                        <div class="form-group">
                            <label for="nama">Nama Produk</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama Produk" required value="<?= $produk['nama'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="nama">Merk/Brand Produk</label>
                            <input type="text" name="merk" class="form-control" placeholder="Merk/Brand Produk" required value="<?= $produk['merk'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="jenis">Jenis Produk</label>
                            <select name="jenis" class="form-control" required>
                                <option value="Produk Baru" <?= ($produk['jenis'] == 'Produk Baru') ? 'selected' : '' ?>>Produk Baru</option>
                                <option value="Produk Bekas" <?= ($produk['jenis'] == 'Produk Bekas') ? 'selected' : '' ?>>Produk Bekas</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="qty">Qty</label>
                            <input type="number" name="qty" class="form-control" placeholder="Jumlah Produk" required value="<?= $produk['qty'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="supplier">Supplier</label>
                            <input type="text" name="supplier" class="form-control" placeholder="Supplier Produk" required value="<?= $produk['supplier'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Gambar Produk</label>
                            <input type="file" name="gambar" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                        <?= form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
