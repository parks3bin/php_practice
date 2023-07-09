<?php
require_once ("DB.php");

$db = new DB();

//echo "select문 테스트입니다.<br>";
//$list = $db->selectTest();
//print_r($list);
//
//
//echo "<br> insert문 테스트입니다. <br>";
//$result = $db->insertTest();
//
//if($result) {
//    echo "insert 성공";
//} else {
//    echo "insert 실패";
//}

echo "<br> update문 테스트입니다. <br>";
$upd = $db -> updateTest();

if($upd) {
    echo "update 성공";
} else {
    echo "update 실패";
}

echo "<br> delete문 테스트입니다. <br>";
$del = $db -> deleteTest();

if($del) {
    echo "delete 성공";
} else {
    echo "delete 실패";
}