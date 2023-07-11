<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
</head>

<body>
    <h1>Nieuw lid toevoegen</h1>

    <form action="nieuw_lid_push.php" method="post">
        <p>
            <label for="naam">naam:</label>
            <input type="text" name="naam" id="naam" required="required">
        </p>
        <p>
            <label for="achternaam">achternaam:</label>
            <input type="text" name="achternaam" id="achternaam" required="required">
        </p>
        <p>
            <label for="leeftijd">leeftijd:</label>
            <input type="number" name="leeftijd" id="leeftijd" required="required">
        </p>
        <p>
            <label for="tel">tel:</label>
            <input type="number" name="tel" id="tel" required="required">
        </p>
        <p>
            <label for="email">email:</label>
            <input type="text" name="email" id="email" required="required">
        </p>
        <p>
            <label for="rugnummer">rugnummer:</label>
            <input type="number" name="rugnummer" id="rugnummer" required="required">
        </p>
        <p>
            <label for="positie">positie:</label>
            <input type="text" name="positie" id="positie" required="required">
        </p>
        <p>
            <input type="submit" name="submit" id="submit" value="opslaan">
            <button onclick="history.back();return false;">annuleren</button>
        </p>
    </form>
</body>

</html>