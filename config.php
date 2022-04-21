<?php
    date_default_timezone_set('Asia/Jakarta');
    extract($_REQUEST);
    $file=fopen("data.txt","a");

    // Heading

    fwrite($file, "                 Data Pemantauan Covid19 Wilayah " . $wilayah ."\n");
    fwrite($file, "                                 ". date('d-m-Y H:i:s') ."\n");
    fwrite($file, "                       ". $operator ." / " . $nim);
    fwrite($file, "\n" ."\n" ."\n" );

    // Isi Informasi

    fwrite($file, "___________________________________________________"."\n");
    fwrite($file, "|    Positif     |   Dirawat     |   Sembuh      |   Meninggal   |"."\n");
    fwrite($file, "___________________________________________________"."\n");
    fwrite($file, "|    ". $jpositif . "    |   ". $jdirawat . "    |   ". $jsembuh . "     |       " . $jmeninggal . "    |"."\n");
    fwrite($file, "___________________________________________________"."\n");

    header("location: index.php");
 ?>