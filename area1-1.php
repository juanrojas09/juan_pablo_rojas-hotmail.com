<?php
if(isset($_POST["button"])){
    $radio=$_POST["radio"];

    if(empty($_POST['radio'])  ){





    }else{
        $total=($radio*($radio)*(3.14));
        echo "<br>";
        echo "<h3> el radio es= $radio cm<br></h3>";
        echo "<h2>el total del area es = $total cm2<br></h2>"
    }
}

?>

