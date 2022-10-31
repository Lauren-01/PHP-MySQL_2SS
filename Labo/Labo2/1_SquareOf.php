<html>
    <head>
        <meta charset="utf-8" />
        <title> Square of ... </title>
    </head>
    <body>
        <?php
            echo("<p>");
            for($counter = 0; $counter < 10; $counter++)
            {
                $resultaat = $counter * $counter;
                echo("The square of $counter is $resultaat <br /> \n");
            }
            echo("</p>");
        ?>
    </body>
</html>