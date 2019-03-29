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
            <th><label>
                    <input type="checkbox" value="">
                    
                  </label></th>
        </tr>
       
        <tr>
           <th>2</th>
            <th>MS342223</th>
            <th>Waser</th>
            <th>10</th>
            <th>$300</th>
            <th><label>
                    <input type="checkbox" value="">
                    
                  </label></th>
        </tr>

        <tr>
           <th>3</th>
            <th>AS87JBK</th>
            <th>Packing</th>
            <th>13</th>
            <th>$34</th>
            <th><label>
                    <input type="checkbox" value="">
                    
                  </label></th>
        </tr>

    </tbody>
</table>
                    </div>                  
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-2">
                        <a href="<?php echo base_url(); ?>index.php/UserControler/Checkout" class=" btn btn-primary"><i class="fa fa-shopping-cart"></i> Check Out</a><br>                       
                    </div>
</section>
<script>
    $(document).ready(function(){
        $('#BARANG').DataTable();
    });
</script>