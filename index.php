<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $notes_de_paul = [
        "maths" => [15, 17, 12],
        "français" => [14, 11],
        "sport" => [16, 18, 10],
        "anglais" => [13, 19]
    ];

    function affiche(array $array)
    {
        $string = "Les notes de Paul sont :<br>";
        foreach ($array as $key => $value) {
            foreach ($value as $note) {
                if ($note == $value[count($value) - 1]) {
                    $string .= " et " . "<b>" . $note . "</b>";
                } else if ($note == $value[0]) {
                    $string .= "<b>" . $note . "</b>";
                } else {
                    $string .= " , " . "<b>" . $note . "</b>";
                }
            }
            $string .= " en " . $key . ".<br>";
        }
        return $string;
    }
    echo affiche($notes);
    echo "<br>";
    function moyenne(array $array)
    {
        $moyenne = array();
        foreach ($array as $key => $value) {
            $calcul_moyenne = 0;
            foreach ($value as $note) {
                $calcul_moyenne += $note;
            }
            $calcul_moyenne /= count($value);
            $moyenne[$key] = round($calcul_moyenne, 2);
        }
        return $moyenne;
    }
    var_export(moyenne($notes));
    echo "<br>";
    function moyenne_totale(array $array)
    {
        $moyenne = moyenne($array);
        $moyenne_totale = 0;
        foreach ($moyenne as $key => $value) {
            $moyenne_totale += $value;
        }
        return $moyenne_totale /= count($moyenne);
    }
    echo "<br>";
    echo moyenne_totale($notes);
    ?>
</body>

</html>