<form action="formReg.php" method="get" >
    <label>
        FIO
        <input required type="text" name="person_info[fio]">
    </label>
    <label>
        Login
        <input required type="text" name="person_info[login]">
    </label>
    <label>
        Password
        <input required type="password" name="person_info[password]">
    </label>
    <label>
        age
        <input required type="number" name="person_info[age]">
    </label>
    <label>
        gender
        <input required type="text" name="person_info[pol]">
    </label>
    <label>
        email
        <input required type="email" name="person_info[email]">
    </label>
    <input type="submit">
</form>
<?php
session_start();

$_SESSION["person_info"] = $_GET['person_info'];

print_r($_SESSION["person_info"]);

file_put_contents('file.txt', print_r($_SESSION['person_info'], true));


