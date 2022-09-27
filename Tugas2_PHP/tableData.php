<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas 2 PHP</title>
    <!-- my css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <h2 class="text-center py-4">TABLE DATA PEGAWAI</h2>
    <!-- tangkep request -->
    <?php
        $nama_pegawai = $_POST['nama_pegawai'];
        $agama = $_POST['agama'];
        $jabatan = $_POST['jabatan'];
        $status = $_POST['status'];
        $jumlah_anak = $_POST['jumlahAnak'];
    ?>
    <div class="table-responsive">
  <table class="table table-striped table-hover table-bordered table-sm table-info border-light">
    <thead>
      <tr>
        <th scope="col">NO</th>
        <th scope="col">NAMA PEGAWAI</th>
        <th scope="col">AGAMA</th>
        <th scope="col">JABATAN</th>
        <th scope="col">STATUS</th>
        <th scope="col">JUMLAH ANAK</th>
        <th scope="col">GAJI POKOK</th>
        <th scope="col">TUNJANGAN JABATAN</th>
        <th scope="col">TUNJANGAN KELUARGA</th>
        <th scope="col">GAJI KOTOR</th>
        <th scope="col">ZAKAT PROFESI</th>
        <th scope="col">TAKE HOME PAY</th>
      </tr>
    </thead>
    <?php
        // buat hitung gaji pokok
        $gaji = 0; 
        switch ($jabatan) {
            case 'Manager': $gaji = 20000000; break;
            case 'Asisten': $gaji = 15000000; break;
            case 'Kabag': $gaji = 10000000; break;
            case 'Staff': $gaji = 4000000; break; 
            default: $gaji = 0; break;
        }

        // buat hitung gaji tunjangan jabatan
        $tunjab = 0.2 * $gaji;
        

        // buat hitung tunjangan keluarga
        if ($status == 'Menikah' && $jumlah_anak <= 2) {
            $tunjkel = 0.05 * $gaji;
        } elseif ($status == 'Menikah' && $jumlah_anak <= 5) {
            $tunjkel = 0.1 * $gaji;
        }elseif ($status == 'Menikah' && $jumlah_anak > 5) {
            $tunjkel = 1.5 * $gaji;
        }else {
            $tunjkel = 0;
        }
        
        // gaji kotor
        $brutto = $gaji + $tunjab + $tunjkel;

        // zakat profesi
        $agama == 'Islam' && $brutto >= 6000000 ? $zakat = $brutto * 0.025: $zakat = 0;
      
        // take home pay
        $t_hpay = $brutto - $zakat;
       
    ?>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td><?php echo $nama_pegawai ?></td>  <!-- nama pegawai -->
        <td><?php echo $agama ?></td> <!-- agama -->
        <td><?php echo $jabatan ?></td> <!-- jabatan -->
        <td><?php echo $status ?></td> <!-- status -->
        <td><?php echo $jumlah_anak ?></td> <!-- jumlah anak -->
        <td><?php echo 'Rp. ', number_format($gaji, 2, ',', '. '); ?></td> <!-- gaji pokok -->
        <td><?php echo 'Rp. ', number_format($tunjab, 2, ',', '. '); ?></td> <!-- tunjangan jabatan -->
        <td><?php echo 'Rp. ', number_format($tunjkel, 2, ',', '. '); ?></td> <!-- tunjangan keluarga -->
        <td><?php echo 'Rp. ', number_format($brutto, 2, ',', '. '); ?></td> <!-- gaji kotor -->
        <td><?php echo 'Rp. ', number_format($zakat, 2, ',', '. '); ?></td> <!-- zakat profesi -->
        <td><?php echo 'Rp. ', number_format($t_hpay, 2, ',', '. '); ?></td> <!-- take home pay -->
      </tr>
    </tbody>
  </table>
</div>
    <!-- last table -->
  </body>
</html>