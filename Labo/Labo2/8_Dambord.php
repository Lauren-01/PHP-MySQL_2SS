<html>
    <head>
        <meta charset="utf-8" />
        <title> Dambord </title>
        <link href="8.css" rel="stylesheet" />
    </head>
    <body>
        <?php
            echo("<table>");

            for($rij = 1; $rij < 10; $rij++)
            {
                echo("<tr>");

                if ($rij % 2 == 0)
                {
                    $i = 1;
                    $j = 10;
                }
                else
                {
                    $i = 0;
                    $j = 9;
                }

                for($kolom = $i; $kolom < $j; $kolom++)
                {
                    if ($kolom % 2 == 0)
                    {
                        echo("<td class='white'></td>");
                    }
                    else
                    {
                        echo("<td class='black'></td>");
                    }                    
                }

                echo("</tr>");
            }

            echo("</table>");
        ?>
    </body>
</html>