<!doctype html>
<html>
    <head>
        <title> Numbers checker. </title>
        <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet"> 
    </head>
    <body bgcolor="#d4d4d4" style="font-family: 'Cairo', SANS-SERIF;">
        <div align="center" style="position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);">
            <p>
                <?php
                    $number = $_POST['number'];
                    if(is_null($number)) {
                        echo "<h1>Error : Please return to <a href=\"\\\">here</a> and write a number.</h1>";
                        return;
                    }
                    switch ($number % 2) {
                        case 0 : echo "<h1>This number is even.</h1>";
                        break;
                        case 1 : echo "<h1>This number is odd.</h1>";
                        break;
                        case -1 : echo "<h1>This number is odd.</h1>";
                        break;
                        default : echo "<h1>Error : Please return to <a href=\"\\\">here</a> and write a number.</h1>";
                        break;
                    }
                ?>
            </p>    
        </div> 
    </body>
</html>
