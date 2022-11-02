<html>
    <head>
        <meta charset="utf-8" />
        <title> Programmagids </title>
    </head>
    <body>
        <h1>Programmagids</h1>
        <hr/>
        <h3>Docentenkorps</h3>
        <hr/>
        <?php
            $docentenVakken = [
                [
                    "name" => "Wim Dams",
                    "vak" => "Labview"
                ],
                [
                    "name" => "Dirk Van Merode",
                    "vak" => "Digitale elektronica 2"
                ],
                [
                    "name" => "Lars Struyf",
                    "vak" => "Software 2"
                ],
                [
                    "name" => "Sofie Beerens",
                    "vak" => "Applicaties ICT"
                ]
            ];

            foreach ($docentenVakken as $docent) {
                echo "{$docent['name']} <br/>";
            }
        ?>

        <hr/>
        <h3>Vakkenlijst</h3>
        <hr/>
        <?php
            foreach ($docentenVakken as $docent) {
                echo "{$docent['vak']} <br/>";
            }
        ?>

        <hr/>
        <h3>Docent - vak</h3>
        <hr/>
        <?php
            foreach ($docentenVakken as $docent) {
                echo "{$docent['name']} geeft \"{$docent['vak']}\" aan 2 EICT studenten <br/>";
            }
        ?>

        <hr/>
        <h3>5 keer elk vak met sprongen</h3>
        <hr/>
        <?php
            /*
            foreach ($docentenVakken as $docent) {
                for($j = 0; $j < 5; $j++)
                {
                    echo "{$docent['vak']} <br/>";
                }
            }
            */

            for($i = 0; $i < sizeof($docentenVakken); $i++)
            {
                for($j = 0; $j < 5; $j++)
                {
                    echo str_repeat("&nbsp;", $i * 10);
                    echo "{$docentenVakken[$i]['vak']} <br/>";
                }       
            }
        ?>

    </body>
</html>