<form action="page3.php" method="post">
    Если при переплетении рук на груди наверху оказывается левая рука, то вы способны к кокетству, правая - склонны к простоте и простодушию.<br>
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
echo "<a href=page4.php>>>>>>>следующий вопрос>>>>>>>></a>";

