<?php 

    $buah = ['mangga','jeruk',500,'apel',300,2.5];

    var_dump($buah);

    echo "<br>";

    echo $buah[0];

    foreach ($buah as $key => $value) {
        echo$key."=>".$value;
        echo "<br>";
    }

// array assosiatif
    
    $harga = ['mangga'=>300,'apel'=>200,'jeruk'=>100];

    var_dump($harga);

    echo "<br>";

    foreach ($harga as $key => $value) {
        echo$key."=>".$value;
        echo "<br>";
    }

    echo$harga['mangga'];
    echo "<br>";
    $isi = array_keys($harga);
    var_dump($isi);
    echo "<br>";
    echo $isi[0];
?>