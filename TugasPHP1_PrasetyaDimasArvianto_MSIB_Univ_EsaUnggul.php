<?php
    // Deklarasi & Inisialisasi Variabel
    $pelanggan         = "Siti Aminah";
    $produk            = "TV";
    $jmlh_beli         = 3;
    $disc1             = 25/100;
    $disc2             = 10/100;
    

    //Logic If else
    if($jmlh_beli >= 2){
        $ket = "25%";
        } else {
            $ket = "10%";
        }

         //Logic If else
    if($jmlh_beli >= 2){
        $diskon = $disc1;
        } else {
            $diskon = $disc2;
        }

    //Logic Switch Case
    switch($produk){
        case 'TV': $hargasatuan           = 3000000; break;
        case 'Kulkas': $hargasatuan       = 4000000; break;
        case 'Mesin Cuci': $hargasatuan   = 5000000; break;
        default: $hargasatuan = 0;
    }

    $hargakotor = $hargasatuan*$jmlh_beli;
    $PPN        = 11/100*$hargakotor*$disc1;
    $diskon2    = $hargakotor*$diskon;
    $hargabayar = $hargakotor-$diskon2+$PPN;



?>

<h3 align="center">Data Pegawai</h3>
	<table border="1" align="center" cellpadding="10" width="60%">
		<thead>
			<tr bgcolor="gray">
				<th>Nama Pelanggan</th>
				<th>Produk</th>
				<th>Jumlah Barang</th>
				<th>Harga Satuan</th>
				<th>Harga Kotor</th>
				<th>Diskon</th>
				<th>PPN</th>
                <th>Total Harga</th>
			</tr>
		</thead>
		<tbody align="center">
			<tr>
				<td><?= $pelanggan; ?></td>
				<td><?= $produk; ?></td>
				<td><?= $jmlh_beli; ?> Pcs</td>
				<td>Rp. <?= $hargasatuan; ?></td>
				<td>Rp. <?= $hargakotor; ?></td>
				<td><?= $ket; ?></td>
				<td>Rp. <?= $PPN; ?></td>
                <td>Rp. <?= $hargabayar; ?></td>
			</tr>
			
		</tbody>