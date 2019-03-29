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
            <th>Name</th>
            <th>Email</th>
            <th>Unit</th>
            <th>Role User</th>
            <th>Action</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
             <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Unit</th>
            <th>Role User</th>
            <th>Action</th>
        </tr>
    </tfoot>
    
    <tbody>

        <tr>
           <th>1</th>
            <th>GMFTM</th>
            <th>tm@gmf-aeroasia.co.id</th>
            <th>TM</th>
            <th>gmftm</th>
            <th><a href=""><span data-placement='top' data-toggle='tooltip' title='Update'><button  class="btn btn-info">Update</button></span></a>                     

                                            <a href=""><span data-placement='top' data-toggle='tooltip' title='Hapus'><button  class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus ?')">Hapus</button></span></a>   </th>
        </tr>
       
        <tr>
           <th>2</th>
            <th>Administrator</th>
            <th>admin@gelk.com</th>
            <th>GELK</th>
            <th>admin</th>
            <th><a href=""><span data-placement='top' data-toggle='tooltip' title='Update'><button  class="btn btn-info">Update</button></span></a>                     

                                            <a href=""><span data-placement='top' data-toggle='tooltip' title='Hapus'><button  class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus ?')">Hapus</button></span></a>   </th>
        </tr>

        <tr>
           <th>3</th>
            <th>Purchaser</th>
            <th>Purchaser@gmf-aeroasia.co.id</th>
            <th>GMF</th>
            <th>Purchaser</th>
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