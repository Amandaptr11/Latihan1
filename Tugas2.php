<h2>Bilangan Ganjil</h2>

    <?php
    $mulai=1;
    $akhir=100;
    for ($j=$mulai;$j<$akhir;$j++){
        if ($j % 2 == 1){    
        echo $j." adalah angka ganjil "."<br>";
        echo"<hr>";
        }
    }
    ?>

<h2>Bilangan Genap</h2>
    <?php
    $mulai=0;
    $akhir=100;
    for ($p=$mulai;$p<=$akhir;$p++){
        if ($p % 2 == 0){
            echo $p." adalah angka genap"."<br>";
            echo "<hr>";
        }
    }
    ?>

