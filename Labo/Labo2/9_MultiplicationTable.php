<html>
    <head>
        <meta charset="utf-8" />
        <title> Dambord </title>
        <link href="9.css" rel="stylesheet" />
    </head>
    <body>
        <?php
            echo("<table>");

            $i = 1;
            $aantalrijen = 7;

            for($rij = $i; $rij <= $aantalrijen; $rij++)
            {
                echo("<tr>");

                $i = $rij;
                $j = $aantalrijen;
                $j *= $rij;

                for($kolom = $i; $kolom <= $j; $kolom = $kolom + $i)
                {
                    echo("<td> $kolom </td>");
                }

                echo("</tr>");
            }

            echo("</table>");
        ?>
    </body>
</html>