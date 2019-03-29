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
                     <div class="col-md-2">
                        <a href="<?php echo base_url(); ?>index.php/UserControler/Addpart2" class=" btn btn-primary"><i class="fa fa-add"></i> Add Part</a><br>                       
                    </div>
                    <br><br>
                </div>                        
                    <div class="table-responsive">
<table id="BARANG" class="table table-striped table-bordered" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>Part Number</th>
            <th>Description</th>
            <th>Qty</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>No</th>
            <th>Part Number</th>
            <th>Description</th>
            <th>Qty</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
    </tfoot>
    
    <tbody>

        <tr>
           <th>1</th>
            <th>AS342223</th>
            <th>Packing</th>
            <th>100</th>
            <th>$3400</th>
            <th><a href=""><span data-placement='top' data-toggle='tooltip' title='Update'><button  class="btn btn-info">Update</button></span></a>                     

                                            <a href=""><span data-placement='top' data-toggle='tooltip' title='Hapus'><button  class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus ?')">Hapus</button></span></a>   </th>
        </tr>
       
        <tr>
           <th>2</th>
            <th>MS342223</th>
            <th>Waser</th>
            <th>10</th>
            <th>$300</th>
            <th><a href=""><span data-placement='top' data-toggle='tooltip' title='Update'><button  class="btn btn-info">Update</button></span></a>                     

                                            <a href=""><span data-placement='top' data-toggle='tooltip' title='Hapus'><button  class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus ?')">Hapus</button></span></a>   </th>
        </tr>

        <tr>
           <th>3</th>
            <th>AS87JBK</th>
            <th>Packing</th>
            <th>13</th>
            <th>$34</th>
            <th><a href=""><span data-placement='top' data-toggle='tooltip' title='Update'><button  class="btn btn-info">Update</button></span></a>                     

                                            <a href=""><span data-placement='top' data-toggle='tooltip' title='Hapus'><button  class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus ?')">Hapus</button></span></a>   </th>
        </tr>

    </tbody>
</table>
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