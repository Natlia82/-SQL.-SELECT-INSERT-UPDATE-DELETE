<!DOCTYPE html>
<html lang="ru">
<head>
  <title>Реляционные базы данных и SQL</title>
  <meta charset="utf-8">
  <link type="text/css" href="css/style.css" rel="stylesheet">
</head>
<body>
<?php
$pdo = new PDO("mysql:host=localhost;dbname=global;charset=utf8","nvagapova","neto1916");
?>
<table border="1" width="100%" cellpadding="5">
   <tr>
    <th>name</th>
    <th>author</th>
    <th>year</th>
    <th>isbn</th>
    <th>genre</th>
   </tr>

   <?php

$sql = "SELECT * FROM books";
foreach ($pdo->query($sql) as $row){
 ?>
  <tr>
    <td><?php echo $row[1] ?></td>
    <td><?php echo $row[2] ?></td>
    <td><?php echo $row[3] ?></td>
    <td><?php echo $row[4] ?></td>
    <td><?php echo $row[5] ?></td>
  </tr>
<?php } ?>

 </table>

</body>
</html>
