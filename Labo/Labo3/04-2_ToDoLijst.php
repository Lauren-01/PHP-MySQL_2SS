<html>
    <head>
        <meta charset="utf-8" />
        <title> ToDo lijst </title>
        <link href="4.css" rel="stylesheet" />
    </head>
    <body>
        <h1>ToDo lijst!</h1>

        <table>
        <?php
            $array = array(
                array("Uren trein nakijken", 1, "school"),
                array("Labo applicatie ICT voorbereiden", 34, "school"),
                array("Reserveren squash", 12, "vrije tijd"),
                array("Boodschappen doen", 25, "school"),
                array("Tanden poetsen", 1, "school")
            );

            
            for($i = 0; $i < sizeof($array); $i++)
            {
                if($array[$i][1] > 24)
                {
                    $class = "green";
                }
                else if($array[$i][1] < 2)
                {
                    $class = "red";
                }
                else
                {
                    $class = "yellow";
                }


                echo("<tr class='$class'>");
                echo("<td>{$array[$i][0]}</td>");
                echo("<td class='locatie'>{$array[$i][2]}</td>");
                echo("</tr>");
            }

        ?>
    </table>
    </body>
</html>