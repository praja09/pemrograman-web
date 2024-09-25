<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <h2>Array Terindeks Dengan Loop</h2>
        <?php
            $Listdosen=["Elok Nur Hamdana", "Unggul Pamenang", "Bagas Nugraha"];
            foreach ($Listdosen as $dosen) {
                echo $dosen . "<br>";
            // echo $Listdosen[2] . "<br>";
            // echo $Listdosen[0] . "<br>";
            // echo $Listdosen[1] . "<br>";
            }
        ?>
    </body>
</html>