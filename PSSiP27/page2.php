<form action="page2.php" method="post">
    Попробуйте "прицелиться", выбрав себе мишень и глядя на нее через своеобразную мушку - карандаш или ручку. Правый ведущий глаз говорит о твердом, настойчивом, более агрессивном характере, левый - о мягком и уступчивом.<br>
    <label>
        Правый
        <input type="radio" name="value" value="П">
    </label>
    <label>
        Левый
        <input type="radio" name="value" value="Л">
    </label>
    <input type="submit">
</form>
<?php
session_start();

if($_POST['value'] == "П"){
    $_SESSION["answers"] = $_SESSION["answers"] . "П";
    echo $_SESSION["answers"] . "<br>";
} else if($_POST['value'] == "Л")  {
    $_SESSION["answers"] = $_SESSION["answers"] . "Л";
    echo $_SESSION["answers"] . "<br>";
}
echo "<a href=page3.php>>>>>>>следующий вопрос>>>>>>>></a>";
