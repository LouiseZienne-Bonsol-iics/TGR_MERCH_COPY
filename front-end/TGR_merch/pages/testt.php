<?php
include('databaseConnect.php');
$result = $pdo->prepare("SELECT ProductName from products");
$result->execute();
$merch = $result->fetch();
echo $merch;
$merch = $result->fetch(1);
echo $merch;
$merch = $result->fetchColumn(2);
echo $merch;
$merch = $result->fetchColumn(3);
echo $merch;
?>