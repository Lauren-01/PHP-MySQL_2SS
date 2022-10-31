<html>
    <head>
        <meta charset="utf-8" />
        <title> Even nummers tussen 2 limieten </title>
    </head>
    <body>
        <?php
            $ondergrens = 487;
            $bovengrens = 1784;

            $nummersperlijn = 20;
            $getallen = 0;

            echo("<p>");

            for ($i = $ondergrens; $i <= $bovengrens; $i++)
            {
                if ($i % 2 == 0)
                {
                    if ($getallen < $nummersperlijn)
                    {
                        echo("$i ");

                        $getallen++;
                    }
                    else
                    {
                        echo("<br />$i ");
                        $getallen = 1;
                    }
                    
                }
            }

            echo("</p>");
        ?>
    </body>
</html>