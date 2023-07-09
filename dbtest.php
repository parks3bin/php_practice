<?php
$user = "root";
$password = "1234";
$option = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);


//// 커넥션 객체 생성
//$db = new PDO("mysql:host=localhost;dbname=study", $user, $password, $option);
//// 커넥션 문자열 인코딩 생성
//$db->exec("set names UTF8");

try {
    $db = new PDO("mysql:host=localhost;dbname=study", $user, $password, $option);
    echo "데이터베이스 연결 성공";
} catch (Exception $e) {
    echo "데이터베이스 연결 실패 <br>";
    echo $e;
}






//// 스테이트먼트 생성 (쿼리 운송하는 객체)
//$stmt = $db->prepare("select * from address where name = ?");
//$stmt -> execute(array('홍길동'));
//// 실행결과 가져와서 저장
//$result = $stmt -> fetchAll();
//
//print_r($result);