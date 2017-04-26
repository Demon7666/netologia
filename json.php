<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php

$text = '[{
	"firstName": "Дмитриий",
  "lastName": "Викторович",
  "address": "г.Москва, ул. лучших программистов, д 1,2",
  "phoneNumber": "576-4334-1234"}]';
$json = json_decode($text);
?>

<table border="1">
    <tr>
        <th>Имя</th>
        <th>Отчество</th>
        <th>Адрес</th>
        <th>Телефон</th>
    </tr>

	<?php foreach ($json as $obj): ?>
        <tr>
            <td><?= $obj->firstName ?></td>
            <td><?= $obj->lastName ?></td>
            <td><?= $obj->address ?></td>
            <td><?= $obj->phoneNumber ?></td>
        </tr>
	<?php endforeach; ?>
</table>
</body>
</html>
