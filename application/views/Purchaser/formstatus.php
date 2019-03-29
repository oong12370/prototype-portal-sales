<section class="content">
    <div class="row">
        <div class="col-sm-12 col-xs-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="text-center">Status Order</h3>
                </div>
                <form method="post"  action="add-proses.php" class="form-horizontal">
                    <div class="box-body">
						<div class="form-group">
                            <label for="jumlah" class="col-sm-offset-1 col-sm-3 control-label">Purchase Order</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control tanggal" value="4500000566" name="tgl_masuk">
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="teknisi" class=" col-sm-3 control-label">Status</label>
                            <div class="col-sm-5">
                                <select id="nik" required="isikan dulu" class="form-control" name="nik">
                                <option value="">--Status--</option>
                                        <option value="">On proses</option>           
                                        <option value="">Send to Customer</option>
                                                                   
                                </select>
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
