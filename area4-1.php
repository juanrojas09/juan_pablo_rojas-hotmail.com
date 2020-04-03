<?php
if(isset($_POST['button'])){
    $base=$_POST['base'];
    $altura=$_POST['altura'];

    if(empty($_POST['base']) || empty($_POST['altura'])  ){





    }else{
        $total=($base*$altura);
        echo "<br>";
        echo "<h3> la medida del lado es= $base  cm<br></h3>";
        echo "<h3> la medida de la altura= $altura  cm<br></h3>";
        echo "<h2>el total del area es = $total cm2<br></h2>"
    }
}
?>