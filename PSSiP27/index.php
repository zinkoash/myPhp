<form action="/" method="post">
    Переплетите пальцы рук и вы заметите, что сверху всегда оказывается один и тот же палец, если левый - вы человек эмоциональный, правый - у вас преобладает аналитический склад ума.<br> 
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
$_SESSION["answers"] = "";

echo $_SESSION["answers"];

if($_POST['value'] == "П"){
    $_SESSION["answers"] = $_SESSION["answers"] . "П";
    echo $_SESSION["answers"] . "<br>";
} else if($_POST['value'] == "Л")  {
    $_SESSION["answers"] = $_SESSION["answers"] . "Л";
    echo $_SESSION["answers"] . "<br>";
}
echo "<a href=page2.php>>>>>>>следующий вопрос>>>>>>>></a>";
