<?php
require_once ("Address.php");
$address = new Address();
$addressList = $address->getList();
$addressCount = $address->getCountList();
print_r($addressCount);

?>

<!doctype html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>주소록</title>
    <style>
        *{margin: 0 auto; padding: 0; text-align: center}
        td, th {
            padding: 5px 10px;
        }
        a {
            text-decoration: none;
        }
    </style>
</head>
<body>
<h1>주소록 사이트</h1>
<div>
    <form action="address_insert.php" method="post">
        <label for="name">
            이름 : <input type="text" name="name" size="5">
        </label>
        <label for="age">
            나이 : <input type="text" name="age" size="2">
        </label>
        <label for="tel">
            연락처 : <input type="text" name="tel">
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
            생년월일 : <input type="date" name="birth">
        </label>
        <button type="submit">추가</button>
    </form>
</div>
<table border="1">
    <tr>
        <th>번호</th>
        <th>이름</th>
        <th>나이</th>
        <th>전화번호</th>
        <th>지역</th>
        <th>생년월일</th>
        <th>수정</th>
        <th>삭제</th>
    </tr>
    <?php
        foreach ($addressList as $value) {
    ?>
    <tr>
        <td><?php echo $value['no']?></td>
        <td><?php echo $value['name']?></td>
        <td><?php echo $value['age']?></td>
        <td><?php echo $value['tel']?></td>
        <td><?php echo $value['area']?></td>
        <td><?php echo $value['birth']?></td>
        <td><a href="address_update_form.php?no=<?php echo $value['no']?>">수정</a></td>
        <td><a href="address_delete.php?no=<?php echo $value['no']?>">삭제</a></td>
    </tr>
    <?php } ?>
</table>
</body>
</html>