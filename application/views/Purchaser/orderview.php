<section class="content">
<!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-sm-12">
             <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="text-center">Data Order Material </h3>
                </div>                
                <div class="box-body">
                <div class="row">
                    
                    <br><br>
                </div>                        
                    <div class="table-responsive">
<table id="BARANG" class="table table-striped table-bordered" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>PO</th>
            <th>Tanggal</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>No</th>
            <th>PO</th>
            <th>Tanggal</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </tfoot>
    
    <tbody>

        <tr>
           <th>1</th>
            <th>4500000566</th>
            <th>LUGHGHH</th>
            <th>12.03.2019</th>
            <th>On proses</th>
            <th><a href="<?php echo base_url(); ?>index.php/UserControler/Statusorder2"><span data-placement='top' data-toggle='tooltip' title='Detail Permintaan'><button    class="btn btn-info">Update status</button></span></a>   </th>
        </tr>
       
        <tr>
           <th>2</th>
            <th>46067463</th>
            <th>HGFHJK</th>
            <th>12.03.2019</th>
            <th>Send to Customer</th>
            <th><a href="<?php echo base_url(); ?>index.php/UserControler/Statusorder2"><span data-placement='top' data-toggle='tooltip' title='Detail Permintaan'><button    class="btn btn-info">Update status</button></span></a>   </th>
        </tr>

    </tbody>
</table>
                    </div>                  
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-2">
                        <a href="<?php echo base_url(); ?>index.php/UserControler/Statusorder2" class=" btn btn-primary"><i class="fa fa-shopping-cart"></i> Buy</a><br>                       
                    </div>
</section>
<script>
    $(document).ready(function(){
        $('#BARANG').DataTable();
    });
</script>