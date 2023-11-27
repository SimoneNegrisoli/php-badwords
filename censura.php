<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>

<body>
    <?php
    $paragraph = $_GET["paragrafo"];
    $badWord = $_GET["censura"];

    echo $paragraph . $badWord;
    echo strlen($badWord);
    echo str_replace($badWord, '***', $paragraph)

        ?>
</body>

</html>