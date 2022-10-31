<html>
    <head>
        <meta charset="utf-8" />
        <title> Team Building Cost </title>
    </head>
    <body>
        <?php
            echo("<h2>Teambuilding</h2>");
            
            $deelnemers = 260;
            $afwezige = 57;
            $deelnemerprijs = 25.80;
            $cancelprijs = 15.50;

            define("School", "Thomas More, campus De Nayer "); 

            $bedrag = $deelnemers * $deelnemerprijs + $afwezige * $cancelprijs;
        ?>
        <ol>                            <!--Dit kan ook ipv alles is echo -->
            <li>
            <h3>Total price:</h3>
        <?php
            echo School;
            echo("has to pay $bedrag euro to Sporta for this teambuilding activity.");
            echo("</li>");
            echo("<li>");
            echo("<h3>Number of participant:</h3>");
            echo("$deelnemers students from ");
            echo(School);
            echo("participated in this teambuilding activity, $afwezige students were absent.");
            echo("</li>");
            echo("</ol>");
        ?>
    </body>
</html>