<div class="container-fluid">
    <h3><i class="fas fa-edit"></i> Edit Data Produk</h3>
    <hr>
    <?php foreach($daftar_product as $q): ?>
        <form method="post" action="<?php echo base_url(). 'daftarproduct/update_produk'; ?>" enctype="multipart/form-data">
            <div class="form-group col-4">
                <label>Nama Produk</label>
                <input type="hidden" class="form-control" name="id" value="<?php echo $q->id ?>">
                <input type="text" class="form-control" name="Nama_product" value="<?php echo $q->Nama_product ?>"> 
            </div>
            <div class="form-group col-4">
                <label>Harga</label>
                <input type="text" class="form-control" name="Harga" value="<?php echo $q->Harga ?>">
            </div>
            <div class="form-group col-4">
                <label>Stok</label>
                <input type="text" class="form-control" name="stok" value="<?php echo $q->stok ?>">
            </div>
            <div class="form-group col-4">
                <label>Tahun Produksi</label>
                <input type="text" class="form-control" name="tahun_produksi" value="<?php echo $q->tahun_produksi ?>">
            </div>
            <div class="form-group col-4">
                <label>Gambar</label>
                <input type="file" class="form-control" name="image" value="<?php echo $q->image ?>">
            </div>
            <div class="form-group col-4">
                <button type="submit" class="btn btn-primary btn-sm-3">Simpan</button>
            </div>
        </form>
    <?php endforeach; ?>
</div>