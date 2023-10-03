<div class="container-fluid">
    <div class="row justify-content-center pt-5">
        <div class="col-lg-6">
            <div id="flashdata">
                <?= $this->session->flashdata('message'); ?>
            </div>
            <div class="card">
                <div class="card-body">
                    <label class="col-md-12">Tambah Produk</label>
                    <?= form_open_multipart('postimg'); ?>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" name="id_produk" id="id_produk" class="form-control" value="PROD_<?= random_string('numeric', 3); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Link shoope<small class="text-danger">*Wajib diisi</small></label>
                        <div class="col-md-12">
                            <input type="text" name="link" id="link" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12">Foto produk</div>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-9">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="gambar" name="gambar">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12 pt-3">
                            <button type="submit" class="btn btn-success text-white">Simpan data</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    window.setTimeout(function() {
        $("#flashdata").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();
        });
    }, 2000);
</script>