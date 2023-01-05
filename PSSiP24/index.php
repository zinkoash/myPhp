<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form name="Pifagor" method="POST">
        <label>a: </label><input name="a" type="text">
        <label>b: </label><input name="b" type="text">
        <label>c: </label><input name="z" type="text">
        <input type="submit" name="zadanie1" value="Проверить">
</form>
    <hr>
    <?php
    $a =0;
    $b =0;
    $z =0;
    if (!(empty($_POST["a"]))&& !(empty($_POST["b"]))&& !(empty($_POST["z"]))) {
        $a = $_POST["a"];
        $b = $_POST["b"];
        $z = $_POST["z"];
        echo "$a $b $z";
        if(pow($a,2)+pow($b,2)==pow($z,2)){
            echo "<p>Troika</p>";
        }
        elseif(pow($z,2)+pow($b,2)==pow($a,2)){
            echo "<p>Troika</p>";
        }
        elseif(pow($a,2)+pow($z,2)==pow($b,2)){
            echo "<p>Troika</p>";
        }
        else{
            echo "<p>Ne troika</p>";
        }
    }
    echo "<hr>";
    ?>
    <form action="#" method="post">
        <label>a: </label><input name="aX" type="text">
        <label>b: </label><input name="bX" type="text">
        <label>c: </label><input name="zX" type="text">
        <input type="submit" name="zadanie2" value="Уравнение">
    </form>
    <?php

    $aX=0;
    $bX=0;
    $zX=0;
    if (!(empty($_POST["aX"]))&& !(empty($_POST["bX"]))&& !(empty($_POST["zX"]))) {
        $aX = $_POST["aX"];
        $bX = $_POST["bX"];
        $zX = $_POST["zX"];
        if($aX == 0){
            $aX = 1;
        }
            $D = pow($bX,2) - 4*($aX*$zX);
        if($D > 0) {
            echo "$D";
            $x1 = (($bX * -1) - sqrt($D)) / (2 * $aX);
            $x2 = (($bX * -1) + sqrt($D)) / (2 * $aX);
            echo "<p>x1=$x1 x2=$x2</p>";
        }
        elseif ($D == 0) {
            $x1 = (($bX * -1) / (2 * $aX));
            echo "<p>x1=$x1</p>";

        }
        elseif ($D < 0) {
            echo"Так как D отрицательный (D = $D) , корней не существует.";
        }
    }
    echo "<hr>";
    ?>
    <form action="" method="post">
        <label>число: </label><input name="one" type="text">
        <label>число2: </label><input name="two" type="text">
        <input type="submit" name="*" value="*">
        <input type="submit" name="/" value="/">
        <input type="submit" name="+" value="+">
        <input type="submit" name="-" value="-">
    </form>
    <?php
        $one=0;
        $two=0;
        if (!(empty($_POST["one"]))&& !(empty($_POST["two"]))) {
            $one = $_POST["one"];
            $two = $_POST["two"];
            if (isset($_POST['*'])) {
                $res = $one*$two;
            }
            elseif (isset($_POST['/'])) {
                $res = $one/$two;
            }
            elseif (isset($_POST['+'])) {
                $res = $one+$two;
            }
            else{
                $res = $one-$two;
            }
            echo $res;
        }
    ?>
</body>
</html>