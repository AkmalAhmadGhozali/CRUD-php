<?php
include './connection.php';
$id = $_GET['id'];
$name = $_POST['name'];
$address = $_POST['addres'];
$sql = "
    update students
    set name = '" . $name . "', addres = '" . $addres ."'
    where id = '" . $id . "';
    ";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header('Location: index.php');
    } else {
        printf('Failed update students: ' . mysqli_error($conn));
        exit();
    }
?>