<?php

require_once ("Address.php");
$address = new Address();

$no = $_GET['no'];

$result = $address->setDeleteAddress($no);

echo "<script>document.location.href='address_view.php'</script>";