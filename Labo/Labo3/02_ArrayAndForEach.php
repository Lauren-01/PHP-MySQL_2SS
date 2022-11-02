<html>
    <head>
        <meta charset="utf-8" />
        <title> Tafel van 9 met Arrays </title>
    </head>
    <body>
        <h1>Tafel van 9 met arrays</h1>
        <hr/>
        <?php
            $tafel = array();
            
            for($i = 1; $i <= 10; $i++)
            {
                $tafel[$i] = $i * 9; 
            }

            foreach($tafel as $num)
            {
                echo("$num "); 
            }

            echo("<br />");

            $reversed = array_reverse($tafel);

            foreach($reversed as $num)
            {
                echo("$num "); 
            }

            echo("<br />");

            print_r($reversed); // of met foreach voor mooie opmaak dingen
        ?>
    </body>
</html>