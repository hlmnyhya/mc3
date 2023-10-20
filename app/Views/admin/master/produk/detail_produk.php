<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Detail Produk</h4>
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
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                      <div class="card-header">
                          <div style="display: flex; justify-content: space-between; align-items: center;">
                          <h4 class="card-title">Produk</h4>
                          <a href="<?= base_url('admin/master/produk/add')?>" class="btn btn-sm btn-success"><i class="icon-plus"></i> Tambah Produk</a>
                        </div>
                    </div>

<div class="col-md-6">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title"><?= $produk['nama'] ?></h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-7 col-md-4">
                    										<div class="">
                        <img src="<?= base_url('uploads/produk/' . $produk['gambar']) ?>" alt="Gambar Produk" width="100px" height="200px" class="avatar-img rounded">
                        										</div>
                </div>
                <div class="col-7 col-md-8">
                    <div class="tab-content" id="v-pills-with-icon-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home-icons" role="tabpanel" aria-labelledby="v-pills-home-tab-icons">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>Nama</th>
                                        <td><?= $produk['nama'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Merk</th>
                                        <td><?= $produk['merk'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Qty</th>
                                        <td><?= $produk['qty'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Supplier</th>
                                        <td><?= $produk['supplier'] ?></td>
                                    </tr>
                                    <!-- Tambahkan baris-baris lain sesuai kebutuhan -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>