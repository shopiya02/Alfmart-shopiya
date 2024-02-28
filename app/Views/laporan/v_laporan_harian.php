<div class="col-md-12">
 <div class="card card-primary">
 <div class="card-header">
 <h3 class="card-title"><?= $subjudul ?></h3>
 <!-- /.card-tools -->
 </div>
 <!-- /.card-header -->
  <div class="card-body">
   <div class="row">
   <div class="col-sm-6">
   <div class="form-group row">
  <label class="col-sm-2 col-form-label">Tanggal :</label>
  <div class="col-sm-10 input-group">
  <input type="date" name="tgl" id="tgl" class="form-control">
  <span class="input-group-append">
       <button onclick="ViewTabelLaporan()" class="btn btn-primary btn-flat">
       <i class="fas fa-file-alt"></i> View Laporan
</button>
        <button onclick="PrintLaporan()" class="btn btn-success btn-flat">
       <i class="fas fa-print"></i> Print Laporan
</button>
</span>
    </div>
</div>
</div>
<div class="col-sm-12">
    <hr>
    <div class="Tabel">

</div>
  </div>
</div>
</div>
 <!-- /.card-body -->
 </div>
   <!-- /.card -->
  </div>

  <script>
    function ViewTabelLaporan() {
        let tgl = $('#tgl').val();
        if (tgl == "") {
            Swal.fire('Tanggal Belum dipilih');

        }else{
    $.ajax({
        type: "POST",
        url: "<?= base_url('Laporan/ViewLaporanHarian') ?>",
        data: {
            tgl: tgl,

        },
        dataType: "JSON",
        success: function(response) {
            if (response.data) {
                $('.Tabel').html(response.data)
                
            }
        }

    });   
    
}
    }

    function PrintLaporan() {
        let tgl = $('#tgl').val();
if (tgl == "") {
    Swal.fire('Tanggal Belum dipilih');
    
}else{
    NewWin=window.open('<?= base_url('Laporan/PrintLaporanHarian') ?>/' + tgl);
}
}
  </script>