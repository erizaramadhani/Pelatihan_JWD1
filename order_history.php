<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Order</title>
</head>
<body>
  <!-- kembali ke halaman tiket order -->
	<a href="ticket_order.php">Back to Order</a>

	<h1 align="center">PEMESANAN TIKET</h1>

	<?php
/* input array maskapai, bandara asal,
dan bandara tujuan ke dalam masing-masing variabelnya */
$maskapai = $_POST["Maskapai"];
$BA = $_POST["BandaraAsal"];
$BT = $_POST["BandaraTujuan"];

// pengkondisian dengan fungsi isset
if (isset($maskapai) && isset($BA) && isset($BT)) {

    // Menghitung total
    $hargatiket = array_sum($maskapai) + array_sum($BA) + array_sum ($BT);	
} else {
    $harga = 0;
}
?>

<!-- tabel pemesanan tiket !-->
<table class="table" border="1" align="center">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Maskapai</th>
      <th scope="col">Pajak Asal Penerbangan</th>
      <th scope="col">Pajak Tujuan Penerbangan</th>
      <th scope="col">Total Harga Tiket</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="col">1</td>
      <td><?= implode('<br> ', $maskapai); ?></td>
      <td><?= implode('<br> ', $BA); ?></td>
         <td><?= implode('<br> ', $BT); ?></td>
    	<td><?=  $hargatiket = array_sum($maskapai) + array_sum($BA) + array_sum ($BT); ?></td>
    </tr>
<!-- akhir tabel pemesanan tiket !-->

  </tbody>
</table> 

</body>
</html>