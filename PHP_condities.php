<?php
/**
 * Created by PhpStorm.
 * User: Melih
 * Date: 1-4-2019
 * Time: 11:12
 */
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
    </head>
    <style>
        body{
            text-align: center;
        }

        .rood{
            border: red solid 5px;
        }
    </style>
    <body>

<?php
for ($i = 0; $i<=9; $i++){
    if ($i == 3) {
        $class = "class='rood'";
    } else {
        $class = "";
    }
    echo "<img ".$class." src = 'img/aap".$i.".jpg'>";
}
?>