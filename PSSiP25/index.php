<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php
        $arr=array();
        $count = 0;
        for ($i=0; $i < 10; $i++) { 
            $arr[$i] = rand(-3,27);
            if (abs($arr[$i])<3 && $arr[$i]%9==0) {
                $count++;
            }
        }
        print_r($arr);
        echo "Количство элементов меньше 3 и кратных 9-ти $count";
        echo "<hr/>"
    ?>

    <form method="POST" >
        <label for="text1">Страна</label><input type="text" name="text1" id="1" placeholder="Введите страну">
        <label for="text2">Столица</label><input type="text" name="text2" id="2" placeholder="Введите столицу">
        <input type="submit" value="Добавить" name="add">
    </form>
    <?php
        $countries = ["Germany" => "Berlin", "France" => "Paris", "Spain" => "Madrid"];

        if (!(empty($_POST["text1"]))&&!(empty($_POST["text2"]))&&isset($_POST['add'])) {
            $countries+=[$_POST["text1"]=>$_POST["text2"]];
        }
        print_r($countries);
        echo"<br>";
        ksort($countries);
        print_r($countries);
        echo"<br>";
        asort($countries);
        print_r($countries);
    ?>
</body>
</html>