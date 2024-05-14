<!DOCTYPE html>
<html lang="ru">
  <head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Counter</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>
<?php

$count_my_page = "counter.txt";

$hits = file($count_my_page);

echo "<h3>Количество посещений: " . $hits[0] . "</h3>;

?>

</body>
</html>
