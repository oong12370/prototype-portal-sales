

<section class="content">
    <div class="row">
        <div class="col-sm-6 col-xs-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="text-center">Form Open Purchase Order</h3>
                </div>
                <form method="post" id="tes"  action="add-proses.php" class="form-horizontal">
             
                    <div class="box-body">
                        <div class="form-group ">
                            <label for="nama_brg" class="a col-sm-3 control-label">Part Number</label>
                            <div class="col-sm-3">
                                <input type="hidden" readonly value="" class="form-control" name="id_user">
                                <input type="text"  value="" class="form-control" name="unit">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="nama_brg" class="a col-sm-3 control-label">Description</label>
                            <div class="col-sm-3">
                                <input type="hidden" readonly value="" class="form-control" name="id_user">
                                <input type="text"  value="" class="form-control" name="unit">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="stok" class="col-sm-3 control-label">Qty</label>
                            <div class="col-sm-2">
                                <input id="stok"  value="" type="text" class="form-control" name="stok">
                            </div>                                                        
                        </div>
                         <div class="form-group">
                            <label for="stok" class=" col-sm-3 control-label">Price</label>
                            <div class="col-sm-2">
                                <input id="jumlah" type="number" onkeyup="sendAjax()" class="form-control" name="jumlah" required>                                
                            </div>
                            <span class="col-sm-7"> </span>
                        </div>
						 
                        <div class="form-group">
                            <input type="submit" id="simpan" name="simpan" class="btn btn-primary col-sm-offset-3 " value="Simpan" > 
                            &nbsp;
                            <input type="reset" class="btn btn-danger" value="Batal">                                                                              
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-sm-6 col-xs-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="text-center">Data Permintaan Hari Ini</h3>
                </div>
                <div class="form-group ">
                            <label for="nama_brg" class="a col-sm-3 control-label">Purchase Order</label>
                            <div class="col-sm-3">
                                <input type="hidden" readonly value="" class="form-control" name="id_user">
                                <input type="text"  value="" class="form-control" name="unit">
                            </div>
                        </div>
                    <table class="table table-responsive">
                        <tr>
                            <th>No</th>
                            <th>Part Number</th>
                            <th>Description</th>
                            <th>Qty</th>
                            <th>Price</th>
                            <th>Aksi</th>
                        </tr>
                        <tr>
                        
                            <td>1</td>
                            <td>GHJGKKHKJHJ</td>
                            <td>Packing</td>
                            <td>10</td>
                            <td>$. 300</td>
                            
                            <td><a href="" class="btn btn-danger">Hapus</a></td>
                        </tr>
                        <tr>
                        
                            <td>2</td>
                            <td>14BHGHJK</td>
                            <td>Oring</td>
                            <td>1</td>
                            <td>$. 90</td>
                            
                            <td><a href="" class="btn btn-danger">Hapus</a></td>
                        </tr>
                   
                    </table>    
                <div class="box-body">
                    <a class="btn btn-success" href="pesan.php" >Proses</a>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function(){
        $("#jenis_brg").change(function(){
            var jenis = $(this).val();
            var dataString = 'jenis='+jenis;
            $.ajax({
                type:"POST",
                url:"getdata.php",
                data:dataString,
                success:function(html){
                    $("#nama_brg").html(html);                    
                }
            });
        });

        $("#nama_brg").change(function(){
            var kode = $(this).val();
            var dataString = 'kode='+kode;
            $.ajax({
                type:"POST",
                url:"getkode.php",
                data:dataString,
                success:function(html){
                    $("#stok").val(html);        
                }
            });
        });
				       
    });


	
	 function cek_stok(){
                var jumlah = $("#jumlah").val();                
                var kode_brg = $("#nama_brg").val();   
                $.ajax({
                    url: 'cekstok.php',
                    data:"jumlah="+jumlah+"&kode_brg="+kode_brg,
                    dataType:'json',
                }).success(function (data) {                                      
                                      
                   
                        if(data.hasil == 1){                            
                            $("#tes").submit(function(e){
                                e.preventDefault();
                                alert(data.pesan);
                            });
                        }
                        
                   

                });
            }

   function sendAjax() {
    setTimeout(
        function() {
            var jumlah = $("#jumlah").val();                
                var kode_brg = $("#nama_brg").val();   
                $.ajax({
                    url: 'cekstok.php',
                    data:"jumlah="+jumlah+"&kode_brg="+kode_brg,
                    dataType:'json',
                }).success(function (data) {                                      
                                      
                   
                        if(data.hasil == 1){                            
                            
                                alert(data.pesan);
                                $("#jumlah").val("");
                            
                        }
                        
                   

                });
        }, 1000);
}
</script>