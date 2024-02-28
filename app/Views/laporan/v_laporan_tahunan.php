<div class="col-md-12">
    <div class="card">
        <div class="card-header bg-flat-color-6 text-white">
            <strong class="card-title"><?= $subjudul ?><small></strong>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label><b>Tahun</b></label>
                        <div class="col-10 input-group">
                            <select name="tahun" id="tahun" class="form-control">
                                <option value="">-- Tahun --</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                                <option value="2026">2026</option>
                                <option value="2027">2027</option>
                                <option value="2028">2028</option>
                                <option value="2029">2029</option>
                                <option value="2030">2030</option>
                            </select>
                            <span class="input-group-append">
                                <button onclick="ViewTabelLaporan()" class="btn btn-warning">
                                    <i class="fa fa-file-text"></i> View Report
                                </button>
                                <button onclick="PrintLaporan()" class="btn btn-success btn-flat">
                                    <i class="fa fa-print"></i> Print Report
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <hr>
                    <div class="Table">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    function ViewTabelLaporan() {
        let tahun = $('#tahun').val();
        if (tahun == "") {
            Swal.fire({
                title: "Tahun Belum Dipilih !",
                backdrop: `
                    rgba(0,0,123,0.2)
                    url("<?= base_url('AdminLTE') ?>/dist/img/sdg.gif")
                    left top
                    no-repeat
                `
            });
        } else {
            $.ajax({
                type: "POST",
                url: "<?= base_url('Laporan/ViewLaporanTahunan') ?>",
                data: {
                    tahun: tahun,
                },
                dataType: "JSON",
                success: function(response) {
                    if (response.data) {
                        $('.Table').html(response.data)
                    }
                }
            });
        }
    }

    function PrintLaporan() {
        let tahun = $('#tahun').val();
        if (tahun == "") {
            Swal.fire({
                title: "Tahun Belum Dipilih !",
                backdrop: `
                    rgba(0,0,123,0.2)
                    url("<?= base_url('AdminLTE') ?>/dist/img/sdg.gif")
                    left top
                    no-repeat
                `
            });
        } else {
            NewWin = window.open('<?= base_url('Laporan/PrintLaporanTahunan') ?>/' + tahun, 'NewWin', 'toolbar=no, width=1150, height=600, scrollbars=yes');
        }
    }
</script>