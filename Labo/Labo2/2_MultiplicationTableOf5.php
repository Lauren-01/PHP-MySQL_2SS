<html>
    <head>
        <meta charset="utf-8" />
        <title> Multiplication table of 5 </title>
        <link href="2.css" rel="stylesheet" />
    </head>
    <body>
        <?php
            echo("<h3>Multiplication table of 5 <h3>");
            echo("<table>");
            for($counter = 1; $counter <= 10; $counter++)
            {
                echo("<tr>");
                $resultaat = $counter * 5;
                echo("<td> $counter </td><td> * </td><td> 5 </td><td> = </td><td> $resultaat </td>");
                echo("</tr>");
            }
            echo("</table>");
        ?>
    </body>
</html>