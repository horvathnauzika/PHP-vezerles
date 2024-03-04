<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP vezérlési szerkezetek</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>PHP vezérlési szerkezetek</h1>
    <?php
        echo "<h2>Véletlen számok</h2>";
        echo(rand() . "<br>");
        echo "A véletlen szám maximuma: <br>".getrandmax(). "<br>";
        echo(rand(10,13) . "<br>");

        echo "<h2>Hatókör</h2>";
        $x= 7;
        $y = 6;
        function myTest0() {
            //nem működik:
            //$y = $x + $y;
            // működik:
            $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
            echo $GLOBALS['z'];
          }
        myTest0();
        echo "<h2>Asszociatív tömb</h2>";
        $nevKor = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
        print_r($nevKor);
        $nevKor["Peter"] = 36;
        echo "Péter életkora: ".$nevKor['Peter'];
        
        echo "<h2>Operátorok</h2>";
        $adat1 = floor(8/3);
        echo $adat1."<br>";
        echo "A $adat1 adattípusa: ".gettype($adat1);

        echo "<h2>Elágazások - switch </h2>";
        $jegy = 5;
        switch ($jegy){
            case 1:
                echo "elégtelen";
                break;
            case 2:
                echo "elégséges";
                break;
            case 3:
                echo "közepes";
                break;
            case 4:
                echo "jó";
                break;
            default:
                echo "jeles";
                break;
        }
        echo "<h2>Ciklusok - asszociatív tömb bejárása </h2>";
        foreach ($nevKor as $kulcs => $ertek) {
            echo $kulcs. ": ".$ertek." <br>";
        }
        
        // Hozz létre egy 5 elemű tömböt véletlen számokkal (20 és 30 közötti zárt intervallumban), majd írasd ki az összegüket!
        // üres tömb
        $veletlenek = array();
        $osszeg = 0;
        // tömb feltöltése ciklussal
        for($index = 0; $index < 5; $index++){
            $veletlenek[$index] = rand(20, 30);
            $osszeg += $veletlenek[$index];
        }
        print_r($veletlenek);
        echo "A számok összege: $osszeg<br>";

        // sakktábla
        echo "<h2>Sakktábla</h2>";
        
    ?>
</body>
</html>