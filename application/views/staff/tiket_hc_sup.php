<style type="text/css">
#example_filter
{
    display:none;
}
</style>
<section class="content">
<div class="box">
<div class="box-body table-responsive padding">
<div class="box-header with-border">
<table class="table table-bordered table-striped table-hover" id="example">
  <thead>
    <tr>
      
      <th>Cek</th>
      <th>Tanggal</th>
      <th>Logid</th>
      <th>Witel</th>
      <th>Nama Pelapor</th>
      <th>Nama Pelanggan</th>
      <th>No Fastel</th>
      <th>Alamat</th>
      <th>No Tiket</th>
      <th>Tanggal Open</th>
      <th>Status Tiket</th>
      <th>Lapul</th>
      <th>Gaul</th>
      <th>CP</th>
      <th>Email</th>
      <th>Keluhan</th>
    </tr>
    </thead>
    <tfoot>
    <tr>
      
      <th>Cek</th>
      <th>Tanggal</th>
      <th>Logid</th>
      <th>Witel</th>
      <th>Nama Pelapor</th>
      <th>Nama Pelanggan</th>
      <th>No Fastel</th>
      <th>Alamat</th>
      <th>No Tiket</th>
      <th>Tanggal Open</th>
      <th>Status Tiket</th>
      <th>Lapul</th>
      <th>Gaul</th>
      <th>CP</th>
      <th>Email</th>
      <th>Keluhan</th>
      
    </tr>
    </tfoot>
</table>
</div>
<div class="box-footer">
<button id="btnExport" class="btn btn-default pull-left">Export to excel</button></div>
</div>
</div>
</section>

<script type="text/javascript">
  $("#example_filter").css("display","none"); //hilangkan search utama
</script>


<script type="text/javascript">
  
  

  $(document).ready(function() {
    // Setup - add a text input to each footer cell
    $('#example tfoot th').each( function () {
        var title = $(this).text();
        var inp   = '<input type="text" class="form-control" placeholder="'+ title +'" />';
        $(this).html(inp);
    } );
 
    // DataTable
    var table = $('#example').DataTable({
                    "processing": true,
                    "serverSide": true,
                    "ajax": {
                        "url": "<?php echo base_url('admin/ajax_hc_sup');?>",
                        "type": "POST"
                    }
                });

    // Apply the search
    table.columns().every( function () {
        var that = this;
        $( 'input', this.footer() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
        } );

    } );
} );
</script>

<?php $nm=date("YmdHis");?>
<script type="text/javascript">
    $(document).ready(function () {
    $("#btnExport").click(function () {
    $("#example").btechco_excelexport({
        containerid: "example" 
        , datatype: $datatype.Table
        , filename: 'export_<?php echo $nm;?>'
    });
    });
    });
</script>
