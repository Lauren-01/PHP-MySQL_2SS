<html>
    <head>
        <meta charset="utf-8" />
        <title> Profits calculation </title>
    </head>
    <body>
        <?php
            $maand = date('F', time());
            #echo($maand);      Voor te testen :)

            if ($maand == "September" || $maand == "July" || $maand == "August")
            {
                echo("<p>It's summer vacations! Make the most of it!</p>");
            }
            else
            {
                echo("<p>Sorry, no leave yet, so work!</p>");
            }
        ?>
    </body>
</html>