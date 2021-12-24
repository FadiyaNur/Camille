<div class="container-fluid">
    <h3>Tambah Produk</h3>
    <hr>
    <br>
    <form method="post" action="<?= base_url('admin/proses_tambah_produk'); ?>">
        <div class="form-group row">
            <label for="Nama_product" class="col-sm-2 col-form-label">Nama Produk</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="Nama_product" name="Nama_product">
            </div>
        </div>
        <div class="form-group row">
            <label for="Harga" class="col-sm-2 col-form-label">Harga</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="Harga" name="Harga">
            </div>
        </div>
        <div class="form-group row">
            <label for="stok" class="col-sm-2 col-form-label">Stok</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="stok" name="stok">
            </div>
        </div>
        <div class="form-group row">
            <label for="tahun_produksi" class="col-sm-2 col-form-label">Tahun</label>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="tahun_produksi" name="tahun_produksi">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2">Gambar</div>
            <div class="col-sm-10">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="image" name="image">
                            <label class="custom-file-label"for="image">Pilih file</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputKategori" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-5">
                <button type="submit" class="btn btn-info">Tambah</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </div>
        </div>
    </form>
</div>