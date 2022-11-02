<html>
    <head>
        <meta charset="utf-8" />
        <title> Tafel van 9 met Arrays </title>
    </head>
    <body>
        <h1>Tafel van 9 met arrays</h1>
        <br/>
        <hr/>
        <?php
            $tafel = array();
            
            for($i = 1; $i <= 10; $i++)
            {
                $tafel[$i] = $i * 9; 
                echo("$tafel[$i] <br/>"); 
            }

            echo("<br/><br/>");

            $reversed = array_reverse($tafel);

            foreach($reversed as $num)
            {
                echo("$num <br/>"); 
            }
        ?>
    </body>
</html>