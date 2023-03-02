<?php
//mengakses data json dari file .json
$inp = file_get_contents('data.json');

//konversi json ke array
$arr = json_decode($inp, true);

//menampilkan data json 
echo "<table border=1";
foreach ($arr as $data) {
	echo "<tr><td>" .$data[0]."</td>";
	echo "<td>" .$data[1]."</td>";
	echo "<td>" .$data[2]."</td>";
	echo "<td>" .$data[3]."</td>";
	echo "<td>" .$data[4]."</td>";
	echo "<td>" .$data[5]."</td></tr>";
}

?>