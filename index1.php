<?php

    function isBitten() {
        $r = rand(0,1); 
        if ($r === 0) {
            return True; //True
        } else {
            return False; //false
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
    <?php 
    $result = isBitten();
    
    if($result === False) {
        echo "Lion bit your finger";
    } else {
        echo "Lion did not bite your finger";
    }
    
    ?>


    </div>
</body>
</html>

