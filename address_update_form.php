<?php
require_once ("Address.php");
$address = new Address();
$member = $address -> getAddress($_GET['no']);

?>

<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="address_update.php" method="post">
    <input type="hidden" name="no" value="<?php echo $member['no']?>">
    <label for="name">
        이름 : <input type="text" name="name" size="5" value="<?php echo $member['name']?>">
    </label>
    <label for="age">
        나이 : <input type="text" name="age" size="2" value="<?php echo $member['age']?>">
    </label>
    <label for="tel">
        연락처 : <input type="text" name="tel" value="<?php echo $member['tel']?>">
    </label>
    <br>
    <label for="area">
        지역 : <select name="area">
            <option value="광주">광주</option>
            <option value="서울">서울</option>
            <option value="부산">부산</option>
            <option value="대전">대전</option>
        </select>
    </label>
    <label for="birth">
        생년월일 : <input type="date" name="birth" value="<?php echo $member['birth']?>">
    </label>
    <button type="submit">수정</button>
</form>
</body>
</html>