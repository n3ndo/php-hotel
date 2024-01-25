<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    <?php include 'partials/hotels.php' ?>
    <table class="table table-bordered">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Descrizione</th>
            <th>Parcheggio</th>
            <th>Voto medio</th>
            <th>Distanza dal centro</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($hotels as $hotel) { ?>
        <tr>
            <td><?php echo $hotel['name']; ?></td>
            <td><?php echo $hotel['description']; ?></td>
            <td>
                <?php if ($hotel['parking']) { ?>
                <span >Sì</span>
                <?php } else { ?>
                <span >No</span>
                <?php } ?>
            </td>
            <td><?php echo $hotel['vote']; ?></td>
            <td><?php echo $hotel['distance_to_center']; ?> km</td>
        </tr>
        <?php } ?>
    </tbody>
</table>
</body>
</html>