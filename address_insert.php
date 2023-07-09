<?php
require_once ("Address.php");
$address = new Address();

$name = $_POST['name'];
$age = $_POST['age'];
$area = $_POST['area'];
$birth = $_POST['birth'];
$tel = $_POST['tel'];

$result = $address->setAddress($name, $age, $tel, $area, $birth);

if ($result) {
    echo "<script>alert('성공했습니다.')</script>";
    echo "<script>document.location.href='address_view.php'</script>";
} else {
    echo "<script>alert('실패했습니다.')</script>";
    echo "<script>document.location.href='address_view.php'</script>";
}