<?php
if(isset($_POST['button'])){
    $lado=$_POST['lado'];

    if(empty($_POST['lado'])  ){





    }else{
        $total=($lado*$lado);
        echo "<br>";
        echo "<h3> la medida del lado es=  $lado cm<br></h3>";
        echo "<h2>el total del area es =  $total cm2<br></h2>"
    }
}
?>