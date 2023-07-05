<?php
// date
echo date("l, d-M-Y");
echo "<br>";

// time
echo time();
echo "<br>";
echo date("d M Y", time() - 60 * 60 * 24 * 120);

// mktime
// membuat detik sendiri

// mktime(0,0,0,0,0,0)
// jam, menit, detik, tanggal, bulan, tahun
echo mktime(0, 0, 0, 26, 12, 2003);
echo "<br>";
echo date("l", mktime(0, 0, 0, 26, 12, 2003));

// strtotime
echo "<br>";
echo date('l', strtotime("26 december 2003"))

?>