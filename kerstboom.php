<?php
/**
 * Created by PhpStorm.
 * User: Melih
 * Date: 1-4-2019
 * Time: 11:08
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        body {
            text-align: center;
        }
    </style>
</head>
<body>
<?php
for ($i = 0; $i<90; $i++){
    for ($j = 0; $j < $i; $j++){
        echo "*";
    }
    echo "*<br>";
}

?>
</body>
</html>