<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="text1" id="1" placeholder="введите искомый символ">
        <input type="submit" name="ok" value="Найти">
    </form>
    <?php
    $str = '';
    $f = fopen("f.txt",'r');
    while(!feof($f))
    {
            $str = htmlentities(fgets($f));
            echo $str;
        }
        fclose($f);
        $Na= substr_count($str, 'a');
        $Nb= substr_count($str, 'b');
        $Nc= substr_count($str, 'c');
        $Nd= substr_count($str, 'd');
        $Ne= substr_count($str, 'e');
        $Nf= substr_count($str, 'f');
        echo "<p>a-->$Na <br>b-->$Nb <br>c-->$Nc <br>d-->$Nd <br>e-->$Ne <br>f-->$Nf <br></p><hr>";

        if (!(empty($_POST["text1"]) && isset($_POST["ok"]))) {
            $isk = $_POST["text1"];
            $cnt = substr_count($str, $isk);
            echo "Количество вхождений строки $isk в файлик = $cnt <hr>";
        }
        else{
            echo "Введи символ";
        }
    ?>
    <form action="" method="post">
        <input type="text" name="text2" id="2">
        <label for="up">UpperCase</label>
        <input type="radio" name="edit" value="up">

        <label for="low">LowerCase</label>
        <input type="radio" name="edit" value="low">

        <label for="UL">HardMode</label>
        <input type="radio" name="edit" value="UL">
        <input type="submit" value="Преобразовать">
    </form>
    <?php
        if (!(empty($_POST["text2"]) && isset($_POST["edit"]))) {
            $text2 = $_POST["text2"];
            $operation = $_POST["edit"];
            if ($operation == 'low') {
                echo strtolower($text2);
            }
            if ($operation == 'up') {
                echo strtoupper($text2);
            }
            if ($operation == 'UL') {
                $mod_str = preg_split('//', $text2, -1, PREG_SPLIT_NO_EMPTY);
                for ($i = 0; $i<strlen($text2); $i++) 
                    {
                        if ($i % 2 == 0)
                            {
                            $mod_str[$i] = strtoupper($mod_str[$i]);
                            }
                        else $mod_str[$i] = strtolower($mod_str[$i]);
                    }
                $mod_str = implode($mod_str);
            }
            echo $mod_str;
        }
        echo'<table border=1><tbody><tr>';
    for($k=0;$k<8;$k++)
        {
        echo '<td>ASCII Code</td><td>Char</td>';
        }
    echo '</tr>';
    for($j=0;$j<16;$j++)
        {
        echo '<tr>';
        for($i=0;$i<8;$i++)
            {
            echo '<td>'.(($i*16)+$j).'</td><td> '.chr(($i*16)+$j).'</td>';
            }
        echo '</tr>';
        }
    echo '</tbody></table>';
    echo "<hr>";
    $abc = array();
    foreach (range(chr(0xC0), chr(0xDF)) as $b)
        $abc[] = iconv('CP1251', 'UTF-8', $b);
    
    $alpabetWrite = fopen('alpha.txt', 'w');
    foreach ($abc as $b) 
        fwrite($alpabetWrite, $b." ");
    
    fclose($alpabetWrite);

    $alpabetRead = fopen('alpha.txt', 'r');
    while(!feof($alpabetRead))
    {
            $str = htmlentities(fgets($alpabetRead));
            echo $str;
    }
    fclose($alpabetRead);
    echo "<hr>";

    $file1Read = fopen('f1.txt', 'r');
    $file2Read = fopen('f2.txt', 'r');
    $file1text = "";
    $file2text = "";
    $tmp='';
    while(!feof($file1Read))
    {
            $file1text = htmlentities(fgets($file1Read));
    }
    while(!feof($file2Read))
    {
        $file2text = htmlentities(fgets($file2Read));
    }
    fclose($file1Read);
    fclose($file2Read);
    $file1Write = fopen('f1.txt', 'w');
    $file2Write = fopen('f2.txt', 'w');
    fwrite($file2Write, $file1text);
    fwrite($file1Write, $file2text);
    fclose($file1Write);
    fclose($file2Write);
    echo "<hr>";
    echo date('l jS \of F Y h:i:s A');
    ?>
    <form method="post">
        <input type="date" name="date" id="date">
        <input type="submit" name="day" value="День недели">
    </form>
    <?php
        if (!empty($_POST["date"])&&isset($_POST["day"])) {
            $date=preg_split('/-/',$_POST["date"]);
        }
        $day = date("w", mktime(0,0,0,$date[1],$date[2],$date[0]));
        switch ($day) {
            case 0:
                echo "Воскресенье";
                break;
            case 1:
                echo "Понедельник";
                break;
            case 2:
                echo "Вторник";
                break;
            case 3:
                echo "Среда";
                break;
            case 4:
                echo "Четверг";
                break;
            case 5:
                echo "Пятница";
                break;
            case 6:
                echo "Суббота";
                break;
        }
    ?>
</body>
</html>