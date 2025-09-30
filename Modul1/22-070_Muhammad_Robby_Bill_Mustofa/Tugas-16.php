<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    function familyName($fname, $year){
        echo "$fname Refsnes. Born in $year <br>";
    }
    familyName("Jani", "1999");
    familyName("Hege", "1998");
    familyName("Stale", "1997");
    familyName("Kai", "1996");
    familyName("Borge", "1995");
    ?>
</body>
</html>