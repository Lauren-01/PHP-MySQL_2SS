<html>
    <head>
        <meta charset="utf-8" />
        <title> Profits calculation </title>
        <link href="3.css" rel="stylesheet" />
    </head>
    <body>
        <?php
            echo("<h3>Profits Calculation </h3>");
            echo("<hr/>");
            $capitaal = 1000;
            $tijdsduur = 10;
            $interest = 5;
            echo("<p>starting capital= $capitaal, duration= $tijdsduur and interest= $interest </p>");
            echo("<h3>Capital and interest per year </h3>");
            echo("<table><tr><th>year</th><th>interest</th><th>capital</th></tr>");
            for($counter = 1; $counter <= 10; $counter++)
            {
                echo("<tr>");
                $interest = $capitaal / 100 * 5;
                $capitaal += $interest;
                $interest = round($interest,2);
                $capitaal = round($capitaal,2);
                echo("<td> $counter </td><td> $interest </td><td> $capitaal </td>");
                echo("</tr>");
            }
            echo("</table>");
        ?>
    </body>
</html>