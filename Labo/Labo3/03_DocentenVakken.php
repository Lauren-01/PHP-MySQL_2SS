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
            $i = 0;
            
            //$docentenVakken = array("Wim Dams"=> "Labview", "Dirk Van Merode"=> "Digitale elektronica 2", "Lars Struyf" => "Software 2", "Sofie Beeren"=> "Applicaties ICT");

            //$docentenVakken = [
            //    [
            //        "name" => "Wim Dams",
            //        "vak" => "Labview"
            //    ],
            //    [
            //        "name" => "Dirk Van Merode",
            //        "vak" => "Digitale..."
            //    ],
            //];

            //foreach ($docentenVakken as $docent) {
            //    echo "Docent {$docent['name']} geeft als vak {$docent['vak']}";
            //}

            $docentenVakken = array(
                array("Wim Daems", "Labview"),
                array("Dirk Van Merode", "Digitale elektronica 2"),
                array("Lars Struyf", "Software 2"),
                array("Sofie Beerens", "Applicaties ICT")
            );
            
            while($i < sizeof($docentenVakken))
            {
                print_r($docentenVakken[$i][0]);
                echo("<br />");
                
                $i++;
            }
        ?>

        <hr/>
        <h3>Vakkenlijst</h3>
        <hr/>
        <?php
            $i = 0;
            
            while($i < sizeof($docentenVakken))
            {
                print_r($docentenVakken[$i][1]);
                echo("<br />");
                
                $i++;
            }
        ?>

        <hr/>
        <h3>Docent - vak</h3>
        <hr/>
        <?php
            $i = 0;
            
            while($i < sizeof($docentenVakken))
            {
                print_r($docentenVakken[$i][0]);
                echo(" geeft \"");
                print_r($docentenVakken[$i][1]);
                echo("\" aan 2 EICT studenten.");
                echo("<br />");
                
                $i++;
            }
        ?>

        <hr/>
        <h3>5 keer elk vak met sprongen</h3>
        <hr/>
        <?php
            $i = 0;
            
            while($i < sizeof($docentenVakken))
            {
                for($j = 0; $j < 5; $j++)
                {
                    echo str_repeat("&nbsp;", $i * 10);
                    print_r($docentenVakken[$i][1]);
                    echo("<br />");
                }
                $i++;
            }
        ?>

    </body>
</html>