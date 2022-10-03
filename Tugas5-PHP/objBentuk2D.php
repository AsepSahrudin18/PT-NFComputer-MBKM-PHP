<!-- object -->
<?php 
    require_once 'Lingkaran.php';
    require_once 'PersegiPanjang.php';
    require_once 'Segitiga.php';

    // bangun datar
    $data1 = new Lingkaran();
    $data2 = new PersegiPanjang();
    $data3 = new SegitigaSamaSisi();

    $data = [$data1, $data2, $data3];

    // table keterangan array scalar
    $table_title = ['NO', 'NAMA BIDANG', 'KETERANGAN', 'LUAS BIDANG', 'KELILING BIDANG'];
    ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <h2 class="text-center pt-3">Rumus Bangun Datar</h2>
<div class="table-responsive p-3">
<table class="table table-hover table-sm text-center">
<thead>
<tr class="text-light" bgcolor="#47B5FF">
    <?php
    foreach($table_title as $tt){ ?>
        <th class="text-center" scope="col"><?= $tt ?></th>   
  <?php } ?>
</tr>
</thead>
<tbody>
<?php 
$no = 1;
$warna;
foreach ($data as $dt) { 
    ?>
<tr bgcolor="#DFF6FF">
<td class="text-center"><?= $no++?></td>
<td scope="row"><?= $dt->namaBidang()?></td>
<td><?= $dt->keterangan()?></td>
<th scope="row"><?= $dt->luasBidang()?>
<th><?= $dt->kelilingBidang() ?></th>
</tr>
<?php }?>
</tbody>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>