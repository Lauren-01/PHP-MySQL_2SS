<html>
    <head>
        <meta charset="utf-8" />
        <title> Klein naar groot </title>
    </head>
    <body>
        <?php
            $getal1 = 542;
            $getal2 = 145;
            $getal3 = 487;


            if ($getal1 > $getal2 && $getal1 > $getal3)
            {
                if ($getal2 < $getal3)
                {
                    $buffer = $getal2;
                    $getal2 = $getal3;
                    $getal3 = $buffer;
                }
            }
            elseif ($getal2 > $getal1 && $getal2 > $getal3) 
            {
                if ($getal1 < $getal3)
                {
                    $buffer = $getal1;
                    $getal1 = $getal2;
                    $getal2 = $getal3;
                    $getal3 = $buffer;
                }
                else 
                {
                    $buffer = $getal1;
                    $getal1 = $getal2;
                    $getal2 = $buffer;
                }
            }
            elseif ($getal3 > $getal1 && $getal3 > $getal2) 
            {
                if ($getal1 < $getal2)
                {
                    $buffer = $getal1;
                    $getal1 = $getal3;
                    $getal3 = $buffer;
                }
                else 
                {
                    $buffer = $getal1;
                    $getal1 = $getal3;
                    $getal3 = $getal2;
                    $getal2 = $buffer;
                }
            }

            echo("<p>$getal1 < $getal2 < $getal3 </p>");
        ?>
    </body>
</html>