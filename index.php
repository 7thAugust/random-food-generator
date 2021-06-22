<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="main.css">
    <title>Random Food Generator</title>
</head>
<body>

<div class="heading">
    <h1>Ready for a fantastic dish?</h1>
    <form method="GET" action="">
        <input class="request" type="submit" name="meal" value="REQUEST MEAL">
    </form>
</div>

<?php
if (isset($_GET['meal'])) {
    include_once('curl.php');
    include_once('result.php');
}
?>


</body>
</html>