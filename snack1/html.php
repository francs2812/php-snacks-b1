<?php 
    $partiteBasket = [
        [
            "teamHome" => "virtus",
            "teamGuest" => "Olimpia",
            "teamHomePoints" => 25 ,
            "teamGuestPoints" => 55,
        ],

        [
            "teamHome" => "Lakers",
            "teamGuest" => "Chicago Bulls",
            "teamHomePoints" => 60 ,
            "teamGuestPoints" => 45,
        ],

        [
            "teamHome" => "Boston",
            "teamGuest" => "New York Knicks",
            "teamHomePoints" => 40 ,
            "teamGuestPoints" => 30,
        ],
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
    <h1>
    <?php 
        for ($i=0; $i < count($partiteBasket) ; $i++) { 
            echo $partiteBasket[$i]["teamHome"] . " - " . $partiteBasket[$i]["teamGuest"] . " | " . $partiteBasket[$i]["teamHomePoints"] . " " . $partiteBasket[$i]["teamGuestPoints"] . "<hr>"; 
        }; 
    ?>
    
    </h1>
</body>
</html>
