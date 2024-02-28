<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kasir Alfamart Shopiya | <?=$judul ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/dist/css/adminlte.min.css">
</head>
<body>
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-12 text-center">
        
          <address>
          <i class="fas fa-shopping-cart fa-3x text-pink"></i><b><font size=9> Alfamart Shopiya</font></b><br>
          <strong>Jl.Karang Anyar No.02</strong><br>
          <strong>Puncak</strong><br>
</address>

      </div>
      <div class="col-12 text-center">
        <hr>
        <b><h4><?= $judul ?></h4></b>
      </div>
    </div>

    <!-- Table row -->
    <div class="row">
        <?php if ($page) {
           echo view($page);
        } ?>
    </div>
    <!-- /.row -->

   
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
<!-- Page specific script -->
<script>
  window.addEventListener("load", window.print());
</script>
</body>
</html>
