<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <?php if (validation_errors()) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php } ?>
            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahprodukModal"><i class="fas fa-plus"></i> Produk Baru</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama produk</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Tahun produksi</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Pilihan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $a = 1;
                        foreach ($daftar_product as $k) { ?>
                    <tr>
                        <th scope="row"><?= $a++; ?></th>
                        <td><?= $k['Nama_product']; ?></td>
                        <td><?= $k['Harga']; ?></td>
                        <td><?= $k['stok']; ?></td>
                        <td><?= $k['tahun_produksi']; ?></td>
                        <td>
                            <picture>
                                <source srcset="" type="image/svg+xml">
                                <img src="<?= base_url('assets/img/upload/') . $k['image']; ?>" class="img-fluid img-thumbnail" alt="image" width="200px;">
                            </picture>
                        </td>
                        <td>
                            <a href="<?= base_url('Daftarproduct/UbahProduct/'). $k['id']; ?>" class="badge badge-info"><i class="fas fa-edit">Ubah</i></a>
                            <a href="<?= base_url('Daftarproduct/hapusProduct/'). $k['id']; ?>" onclick="return confirm('Kamu yakin akan menghapus <?= $judul . ' ' . $k['Nama_product']; ?> ?');" class="badge badge-danger"><i class="fas fa-trash"></i> Hapus</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

<!-- Modal Tambah buku baru-->
<div class="modal fade" id="tambahprodukModal" tabindex="-1" role="dialog" aria-labelledby="tambahprodukModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahprodukModalLabel">Tambah Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('daftarproduct/tambah_produk'); ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama Produk</label>
                        <input type="text" class="form-control" id="Nama_product" name="Nama_product">
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="text" class="form-control" id="Harga" name="Harga">
                    </div>
                    <div class="form-group">
                        <label>Stok</label>
                        <input type="text" class="form-control" id="stok" name="stok">
                    </div>
                    <div class="form-group">
                        <label>Tahun Produksi</label>
                        <input type="text" class="form-control" id="tahun_produksi" name="tahun_produksi">
                    </div>
                    <div class="form-group">
                        <label>Gambar</label>
                        <input type="file" class="form-control" id="image" name="image">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-ban"></i>Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End of Modal Tambah Mneu -->

<!-- Modal edit produk baru-->
<div class="modal fade" id="editprodukModal" tabindex="-1" role="dialog" aria-labelledby="editprodukModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editprodukModalLabel">Edit data Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php foreach($daftar_product as $q): ?>
            <form action="<?php echo base_url(). 'daftarproduct/update_produk/' ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama Produk</label>
                        <input type="hidden" class="form-control" name="id" value="<?= $q['id']; ?>">
                        <input type="text" class="form-control" id="Nama_product" name="Nama_product" value="<?= $q['Nama_product']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="text" class="form-control" id="Harga" name="Harga" value="<?= $q['Harga']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Stok</label>
                        <input type="text" class="form-control" id="stok" name="stok" value="<?= $q['stok']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Tahun Produksi</label>
                        <input type="text" class="form-control" id="tahun_produksi" name="tahun_produksi" value="<?= $q['tahun_produksi']; ?>">
                    </div>
                    <div class="form-group">
                        <label>Gambar</label>
                        <input type="file" class="form-control" id="image" name="image" value="<?= $q['image']; ?>">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-ban"></i>Close</button>
                </div>
            </form>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- End of Modal Tambah Mneu -->