    <?php
        $paragrafo = $_POST["paragrafo"];
        $parolaDaCensurare = $_POST["parola"];
        $paragrafoCensurato = str_replace($parolaDaCensurare, '***', $paragrafo);
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body>
    <p><?php echo $paragrafo ?></p>
    <p><?php echo strlen($paragrafo); ?></p>
    <p><?php echo $paragrafoCensurato ?></p>
    <p><?php echo strlen($paragrafoCensurato); ?></p>

</body>
</html>


