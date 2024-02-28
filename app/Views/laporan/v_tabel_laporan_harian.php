<div class="col-12">
    <b>Tanggal :</b> <?= $tgl ?>
<table class="table table-bordered table-striped">
    <tr class="text-center">
        <th>NO</th>
        <th>Barcode/Kode</th>
        <th>Nama Produk</th>
        <th>Harga Beli</th>
        <th>Harga Jual</th>
        <th>QTY</th>
        <th>Total Harga</th>
        <th>Total Untung</th>
    </tr>
    <?php $no = 1;
    foreach ($dataharian as $key => $value) { 
        $grandtotal[] = $value['total_harga'];
        $granduntung[] = $value['untung'];
        ?>
    <tr>
        <td class="text-center"><?= $no++ ?></td>
        <td class="text-center"><?= $value['kode_produk'] ?></td>
        <td><?$value['nama_produk'] ?></td>
        <td class="text-right">Rp. <?= $value['modal'] ?></td>
        <td class="text-right">Rp. <?= $value['harga'] ?></td>
        <td class="text-center"> <?= $value['qty'] ?></td>
        <td class="text-right">Rp. <?= $value['total_harga'] ?></td>
        <td class="text-right">Rp. <?= $value['untung'] ?></td>
</tr>
<?php } ?>
<tr>
    <td class="text-center bg-gray" colspan="6">
        <h5>Grand Total</h5>
    </td>
    <td class="text-right">
       Rp. <?= $dataharian == null ? '' : number_format(array_sum($grandtotal), 0) ?>
    </td>
    <td class="text-right">
    Rp. <?= $dataharian == null ? '' : number_format(array_sum($granduntung), 0) ?> 
    </td>
</tr>
</table>
    </div>
    </div>