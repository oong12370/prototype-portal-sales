<section class="content">
    <div class="row">
        <div class="col-sm-12 col-xs-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="text-center">Tambah Data Stok Barang</h3>
                </div>
                <form method="post"  action="add-proses.php" class="form-horizontal">
                    <div class="box-body">
						<div class="form-group">
                            <label for="jumlah" class="col-sm-offset-1 col-sm-3 control-label">Part Number</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control tanggal" name="tgl_masuk">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="nama_brg" class="col-sm-offset-1 col-sm-3 control-label">Description</label>
                            <div class="col-sm-4">
                                <input type="text" value="" class="form-control" name="kode_brg" readonly>
                            </div>
                        </div>
                         
                        <div class="form-group">
                            <label id="tes"for="nama_brg" class="col-sm-offset-1 col-sm-3 control-label">Qty</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="nama_brg">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="jumlah" class="col-sm-offset-1 col-sm-3 control-label">Satuan</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="satuan">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jumlah" class="col-sm-offset-1 col-sm-3 control-label">Price</label>
                            <div class="col-sm-4">
                                <input type="number" class="form-control" name="jumlah">
                            </div>
                        </div>
						
                        <div class="form-group">
                            <input type="submit" name="simpan" class="btn btn-primary col-sm-offset-4 " value="Simpan" > 
                            &nbsp;
                            <input type="reset" class="btn btn-danger" value="Batal">                                                                              
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
