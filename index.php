<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$uri = 'id12344444';
$name = 'Lorem';
$age = 25;

$singleQuoted = '<a href="http:/phpOne/'.$uri.'">'.$name.','.$age.'</a>';
$dobleQuote = "{$name}, {$age}";

echo $singleQuoted;
echo $dobleQuote;
?>
</body>
</html>
