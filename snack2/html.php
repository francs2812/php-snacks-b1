<?php 
    // $_GET["name"]; 
    // $_GET["mail"]; 
    // $_GET[age]; 
    if ($_GET["name"] == "") {
        $nome = "non definito";
    }
    elseif (strlen($_GET["name"]) >= 3) {
        $nome = $_GET["name"];
    }
    else {
        $nome = "troppo corto";
    };

    if ($_GET["mail"] == "") {
        $mail = "non definito";
    }
    elseif (strpos( $_GET["mail"], "@") && strpos( $_GET["mail"], ".")) {
        $mail = $_GET["mail"];
    }
    else {
        $mail = "non è una email";
    };

    if ($_GET[age] == "") {
        $age = "non definito";
    }
    elseif ( is_numeric($_GET[age]) ) {
        $age = $_GET[age]; 
    }
    else {
        $age = "non è un numero";
    };
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
    <h1>Nome: <?php echo $nome; ?></h1>

    <h1>E-mail: <?php echo $mail; ?></h1>

    <h1>Età: <?php echo $age; ?></h1>
</body>
</html>
