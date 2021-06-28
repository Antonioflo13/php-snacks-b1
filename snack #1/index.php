<?php 
/*
Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
*/

    $finalConferenceCalendar = [
        $matches = [
            "Macht1" => [
                "Date" => "dom 20/6",
                "HomeTeam" => [
                    "Phoneix Suns",
                    "Points" => 120,
                ],
                "VisitorsTeam" => [
                    "Los Angeles Clippers",
                    "Points" => 114,
                ]
            ],
            "Macht2" => [
                "Date" => "dom 24/6",
                "HomeTeam" => [
                    "Bucks",
                    "Points" => 113,
                ],
                "VisitorsTeam" => [
                    "Haws",
                    "Points" => 116,
                ]
            ]
            
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> <?php echo $finalConferenceCalendar[0]["Macht1"]["Date"]; ?> </h2>
    <h3> 
        <?php echo $finalConferenceCalendar[0]["Macht1"]["HomeTeam"][0]; ?> - 
        <?php echo $finalConferenceCalendar[0]["Macht1"]["VisitorsTeam"][0]; ?> | 
        <?php echo $finalConferenceCalendar[0]["Macht1"]["HomeTeam"]["Points"]; ?> -
        <?php echo $finalConferenceCalendar[0]["Macht1"]["VisitorsTeam"]["Points"]; ?>
    </h3>
    
</body>
</html>
