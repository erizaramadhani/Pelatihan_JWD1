<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TicketOrder</title>
</head>
<body>

<!-- kembali ke halaman home -->
  <a href="index.html">Back to Home</a>

<!-- array untuk setiap variabel -->
	<?php
	$maskapai = ["Adam Air", "Batik", "Citilink", "Garuda Indonesia"];
	$asal = [["Soekarno Hatta (CGK)",50000], ["Husein Sastranegara (BDO)", 30000],
	 ["Abdul Rachman Saleh (MLG)", 40000], ["Juanda (SUB)", 40000]];
	 $tujuan = [["Ngurah Rai (DPS)",80000], ["Hasanuddin (UPG)", 70000],
	 ["Inanwatan (INX)", 90000], ["Sultan Iskandarmuda(BTJ)", 70000]];
	?>

<!-- form untuk memesan tiket pesawat -->
<form action="order_history.php" method="POST">
   <h1>PEMESANAN TIKET PESAWAT</h1>
   

    <div class="mb-3">
      <label for="NamaMaskapai" class="form-label">Nama Maskapai</label>
        <select name="Maskapai[]">
        <option value = 300000 name='M1'>Adam Air</option>
        <option value = 500000 name='M2'>Batik</option>
        <option value = 500000 name='M3'>Citilink</option>
        <option value = 1000000 name='M4'>Garuda Indonesia</option>
        </select>
    </div>
    <div class="mb-3">
      <label for="BandaraAsal" class="form-label">Bandara Asal</label>
      <select name="BandaraAsal[]">
        <option value=50000 name='BA1'>Soekarno Hatta (CGK)</option>
        <option value=30000 name='BA2'>Husein Sastranegara (BDO)</option>
        <option value=40000 name='BA3'>Abdul Rachman Saleh (MLG)</option>
        <option value=40000 name='BA4'>Juanda (SUB)</option>
        </select>
    </div>
	<div class="mb-3">
      <label for="BandaraTujuan" class="form-label">Bandara Tujuan</label>
      <select name="BandaraTujuan[]">
        <option value=80000 name='BT1'>Ngurah Rai (DPS)</option>
        <option value=70000 name='BT2'>Hasanuddin (UPG)</option>
        <option value=90000 name='BT3'>Inanwatan (INX)</option>
        <option value=70000 name='BT4'>Sultan Iskandarmuda(BTJ)</option>
        </select>
    </div>
    <br>
    <button type="order" class="btn btn-primary">Order</button>
</form>

</body>
</html>