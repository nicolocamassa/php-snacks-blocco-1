<?php
/* CREIAMO L'ARRAY */
$teams = [
    [
        "team_1" => "Olimpia Milano",
        "team_2" => "Cantù",
        "points_1" => "45",
        "points_2" => "48"
    ],
    [
        "team_1" => "Happy Casa Brindisi",
        "team_2" => "Virtus Bologna",
        "points_1" => "55",
        "points_2" => "35"
    ],
    [
        "team_1" => "Pallacanestro Varese",
        "team_2" => "Reyer Venezia",
        "points_1" => "32",
        "points_2" => "38"
    ],
]

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SNACK 1</title>
</head>

<body>
    <!-- STAMPIAMO L'ARRAY -->
    <?php if (isset($teams)) { ?>
        <?php foreach($teams as $team){ ?>
            <div><?php echo $team['team_1']." - ".$team['team_2'] ?></div>
        <?php } ?>
    <?php } ?>
</body>

</html>