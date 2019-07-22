<?php
$dbconn3 = pg_connect("host=localhost port=5432 dbname=nenss user=postgres password=12345678");


if($bdconn3){
    echo"bien hecho";
}else{
    echo"malll";
}
?>