<html>
    <head>
        <meta charset="utf-8" />
        <title> Programmagids </title>
        <link href="4.css" rel="stylesheet" />
    </head>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <label for="geboortedatum">geboortedatum: </label>
            <input type="date" id="geboortedatum" name="geboortedatum">
            <input type="submit" name="submit" value="submit">
        </form>
        <?php
            //ISSET
            if(!isset($_POST["geboortedatum"]))
                echo(" ");
            else {
                $date = $_POST["geboortedatum"];
                echo("</br>");

                $datenew = DateTime::createFromFormat("Y-m-d", $date);
                $datenow = date("Y-m-d");
                $datenow = DateTime::createFromFormat("Y-m-d", $datenow);

                if($datenew > $datenow){
                    echo("U kan niet geboren worden in de toekomst");
                }
                else{
                    $age = date_diff($datenew,$datenow);
                    echo $age->format('%y years');                    
                }
            }
        ?>
    </body>
</html>