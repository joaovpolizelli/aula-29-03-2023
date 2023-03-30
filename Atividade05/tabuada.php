<?php

$valor = $_POST['tabuada'];

for($y =0; $y <= 10; $y++)

{
    echo "$valor * $y = ".($valor * $y);
    echo "<br>";
}

?>