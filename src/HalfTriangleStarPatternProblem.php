<?php
/* Taking input 5 */
$n = 5;

for($initial = 0; $initial < $n;$initial++){
    for($initial2 = 0; $initial2 < $n; $initial2++){
        if($initial2 <= $initial ){
            echo "* ";
        }
        else{
            echo "  ";
        }
    }
    echo "<br>";
}
?>