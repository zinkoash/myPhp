<!DOCTYPE html>
<html lang='ru'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <title>Добро пожаловать!</title>
    
</head>

<body>
    <form name="Pifagor" method="POST">
        <label>a: </label><input name="a" type="text">
        <label>b: </label><input name="b" type="text">
        <label>c: </label><input name="c" type="text">
        <input type="submit" name="zadanie1" value="Проверить">
    </form>
    <hr>
    <?php
    $arr = [$a, $b, $c];
    if (!($_POST["a"])&& !($_POST["b"]) && !($_POST["c"])) {
        $a = $_POST["a"];
        $b = $_POST["b"];
        $с = $_POST["c"];
    }
    echo "<p> ,erdf  $a </p>";
    ?>
</body>

</html>