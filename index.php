<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertisseur de vitesse</title>
</head>
<body>
    <h1>Mon convertisseur</h1>

    <?php require_once 'Speedometer.php' ?>
    <p>En mph 10 km/h donne <?=Speedometer::convertKmToMiles(10)?> mph.</p>
</body>
</html>