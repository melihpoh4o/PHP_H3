<?php
/**
 * Created by PhpStorm.
 * User: Melih
 * Date: 1-4-2019
 * Time: 11:36
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
    $leeftijd = 2;
    $bedrag = 10 ;

    if ($leeftijd > 65){
        $bedrag = $bedrag * 0.5;
    }

    if ($leeftijd <= 12){
        $bedrag = $bedrag * 0.5;
}

    if ($leeftijd < 3){
    $bedrag = 0;
    }

    echo $bedrag;
?>
</body>
</html>