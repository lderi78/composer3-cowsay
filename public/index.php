<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once  __DIR__ . '/../src/Cow.php';

use CowSay\Cow;

$bessie = new Cow('Hello, Farm!');
$output = $bessie->say();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La vache qui parle</title>
</head>
<body>
 <pre>   <?= $output ?> </pre>
</body>
</html>