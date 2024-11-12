<!-- 
    1- create one commant in frist line in code 
    2- write utf-8 in the right place with php
    3- print frist php page in title with php 
    4- print we love in frist div with php 
    5- print Elzero Channel in scound div with php  
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?= "UTF-8" ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= "frist php page" ?>
    </title>
</head>

<body>
    <div>
        <?php
        echo "we love";
        ?>
    </div>
    <div>
        <?php
        print "Elzero Channel";
        ?>
    </div>
</body>

</html>