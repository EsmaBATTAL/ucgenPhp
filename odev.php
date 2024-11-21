<?php
function ucgen($sayi){
    $i=0;
    while($i<=$sayi){
        for($j=0; $j<=$i; $j++)
        {
            echo "0";
        }
        echo '<br>';
        $i++;
    }
}
ucgen( 15);
?>
