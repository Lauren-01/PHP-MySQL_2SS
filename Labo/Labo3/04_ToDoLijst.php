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
            $array = [
                [
                    "beschrijving" => "Uren trein nakijken",
                    "deadline" => "1",
                    "categorie" => "school"
                ],
                [
                    "beschrijving" => "Labo applicatie ICT voorbereiden",
                    "deadline" => "34",
                    "categorie" => "school"
                ],
                [
                    "beschrijving" => "Reserveren squash",
                    "deadline" => "12",
                    "categorie" => "vrije tijd"
                ],
                [
                    "beschrijving" => "Boodschappen doen",
                    "deadline" => "25",
                    "categorie" => "school"
                ],
                [
                    "beschrijving" => "Tanden poetsen",
                    "deadline" => "1",
                    "categorie" => "school"
                ]
            ];


            foreach($array as $todo)
            {
                if($todo['deadline'] > 24)
                {
                    $class = "green";
                }
                else if($todo['deadline'] < 2)
                {
                    $class = "red";
                }
                else
                {
                    $class = "yellow";
                }


                echo("<tr class='$class'>");
                echo("<td>{$todo['beschrijving']}</td>");
                echo("<td class='locatie'>{$todo['categorie']}</td>");
                echo("</tr>");
            }
        ?>
    </table>
    </body>
</html>