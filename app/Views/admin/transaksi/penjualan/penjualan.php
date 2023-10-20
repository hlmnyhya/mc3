<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Data Transaksi Penjualan</h4>
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
                        <a href="<?= base_url('admin/master/produk')?>">Penjualan</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                      <div class="card-header">
                          <div style="display: flex; justify-content: space-between; align-items: center;">
                          <h4 class="card-title">Penjualan</h4>
                          <a href="<?= base_url('admin/master/add')?>" class="btn btn-sm btn-success"><i class="icon-plus"></i> Tambah Pelanggan</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="basic-datatables" class="display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Merk</th>
                                            <th>Jenis</th>
                                            <th>Qty</th>
                                            <th>Supplier</th>
                                            <th>Gambar</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Merk</th>
                                            <th>Jenis</th>
                                            <th>Qty</th>
                                            <th>Supplier</th>
                                            <th>Gambar</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach ($produk as $item) : ?>
                                            <tr>
                                                <td><?= $item['nama'] ?></td>
                                                <td><?= $item['merk'] ?></td>
                                                <td><?= $item['jenis'] ?></td>
                                                <td><?= $item['qty'] ?></td>
                                                <td><?= $item['supplier'] ?></td>
<td><img src="<?= base_url('uploads/produk/' . $item['gambar']) ?>" alt="Gambar Produk" width="100">
</td>

                                                <td>
                                                 <a href="<?= base_url('admin/master/edit/' . $item['id']); ?>" class="btn btn-sm btn-warning"><i class="icon-note"></i> Edit</a>
                                                    <a href="<?= base_url('admin/master/detail/' . $item['id']); ?>" class="btn btn-sm btn-primary">
                                                        <i class="icon-eye"></i> Detail
                                                    </a>
                                                    <a href="<?= base_url('admin/master/delete/' . $item['id']); ?>" class="btn btn-sm btn-danger">
                                                        <i class="icon-trash"></i> Delete
                                                    </a>
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
