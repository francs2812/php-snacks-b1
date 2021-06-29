<?php 
    $array = [0,];

    // for ($i=0; count($array) < 15 ; $i++) { 
    //     $numeri = rand(5, 15);
    //     if ($numeri != $array ) {
    //          array_push($array, $numeri);

    //     };
    // };
    // print_r($array);
    //echo $array;
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
            for ($i=0; count($array) < 15 ; $i++) { 
                $numeri = rand(1, 100);
                if (in_array($numeri, $array) == false) {
                    array_push($array, $numeri);
                    echo "<li>". $numeri ."</li>";
        
                };
            };
        ?>
    
    </h1>
</body>
</html>
