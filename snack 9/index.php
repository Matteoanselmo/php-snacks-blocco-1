<?php
    $string = "c,i,n,q,u,e";
    $array = explode(',' ,$string);
    $result = [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 9</title>
</head>
<body>
    <?php
        var_dump($array);
        foreach($array as $key){
            $result[$key] = $key;
        }
        var_dump($result);
    ?>
</body>
</html>