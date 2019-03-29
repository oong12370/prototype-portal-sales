<section class="content">
<!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-sm-12">
             <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="text-center">Stok Material </h3>
                </div>                
                <div class="box-body">
                <div class="row">
                    
                    <br><br>
                </div>                        
                    <div class="table-responsive">
                     <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p><?php echo $this->session->flashdata('msg') ?></p>
                  <?php echo form_open_multipart('UserControler/Searchpart2'); ?>
              
                    <div class="form-group">
                      <label for="foto">File</label>
                      <input type="file" name="gambar">
                    </div>
                    <button type="submit"  name="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                 <?php echo form_close() ?>
                </div>
              </div>
            </div>
           
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Remark</h4>
                  <p class="card-description">
                   Upload file format Ms.Excel
                  </p>
                  
                </div>
              </div>
            </div>
                    </div>                  
                </div>
            </div>
        </div>
    </div>
    
</section>
<script>
    $(document).ready(function(){
        $('#BARANG').DataTable();
    });
</script>