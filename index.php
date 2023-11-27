<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
<form action="form_control.php" method="post">
        <label for="paragrafo">Inserire testo qui:</label><br>
        <textarea id="paragrafo" name="paragrafo" rows="4" cols="50"></textarea><br><br>
        
        <label for="parola_censurare">Inserire parola qui:</label><br>
        <input type="text" id="parola_censurare" name="parola_censurare"><br><br>

        <input type="submit" value="Invia">
    </form>
</body>
</html>