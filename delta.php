<?php
$css = "css.css";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $css; ?>">
    <title>Document</title>
</head>
<body>
    <h1>Delta Δ</h1>
<h3><p>b <sup>2</sup> - (4  * a * c)</p></h3>
    <hr>
    <br>
    
    <form action="delta.php" method="post">

        <input type="number" name="a" id="a" placeholder="podaj a" required>
        <input type="number" name="b" id="b" placeholder="podaj b" required>
        <input type="number" name="c" id="c" placeholder="podaj c" required>
        <input type="submit" value="send">
    </form>
    <hr>
    <?php

        $a = isset( $_POST["a"] ) && is_numeric( $_POST["a"] )? intval( $_POST["a"] ) : null;
        $b = isset( $_POST["b"] ) && is_numeric( $_POST["b"] )? intval( $_POST["b"] ) : null;
        $c = isset( $_POST["c"] ) && is_numeric( $_POST["c"] )? intval( $_POST["c"] ) : null;

        $delta = pow( $b, 2 ) - ( 4 * $a * $c );

        if( $_SERVER["REQUEST_METHOD"] == "POST" &&  $a !== null && $b !== null && $c !== null ) {
            
                
                if ( $delta > 0 ) {
                    $x1 = ( -$b + sqrt( $delta ) ) / ( 2 * $a );
                    $x2 = ( -$b - sqrt( $delta ) ) / ( 2 * $a );
                    echo "<br>Wartość Delty Δ wynosi : <b> ".$delta. "</b> i ma dwa pierwiastki <br> x1 = <b>".$x1. "</b>  i ". " x2 = <b>".$x2."</b> <hr>";

                } elseif ( $delta == 0 ) {
                    $x0 = $b / (2 * $a);
                    echo "<br>Wartość Delty Δ wynosi : <b> ".$delta. "</b> i ma jeden pierwiastek <br> x0 = <b>".$x0. "</b> <hr>";
                } else {
                    echo "<br>Delta Δ wynosi : <b> ".$delta. "</b> Brak pierwiastkow <hr>";
                }
        };

    ?>
  


</body>
</htm
