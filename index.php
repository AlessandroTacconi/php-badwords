<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP Badwords</title>
</head>
<body>
    <!-- form per inserire il testo e la parola da censurare -->
    <form action="badwords.php" method="post">
        <label for="paragrafo">Inserisci il paragrafo:</label>
        <textarea name="paragrafo" id="paragrafo" cols="30" rows="10">Si sta come d’autunno sugli alberi le foglie
        </textarea>
        <label for="parola">Inserisci la parola da censurare:</label>
        <input type="text" name="parola" id="parola">
        <button>invia</button>
    </form>
</body>
</html>
