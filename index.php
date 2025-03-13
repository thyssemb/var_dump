<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Var_dump Terminal</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <h2>Var_dump()</h2>

    <?php
        function my_vardump($var) {
            $type = gettype($var);

            switch ($type) {
                case "string":
                    echo '<pre style="color: white;">';
                    echo "string(" . strlen($var) . ") \"$var\"";
                    echo '</pre>';
                    break;

                case "integer":
                    echo '<pre style="color: white;">';
                    echo "int($var)";
                    echo '</pre>';
                    break;

                case "double":
                    echo '<pre style="color: white;">';
                    echo "float($var)";
                    echo '</pre>';
                    break;

                case "boolean":
                    echo '<pre style="color: white;">';
                    echo "bool(" . ($var ? 'true' : 'false') . ")";
                    echo '</pre>';
                    break;

                   case "array":
                     echo "array(" . count($var) . ") {<br>";
                     foreach ($var as $key => $value) {
                     echo "  [$key] => ";
                      my_vardump($value);
                      echo "<br>";
                      }
                case "NULL":
                    echo '<pre style="color: white;">';
                    echo "NULL";
                    echo '</pre>';
                    break;

                default:
                    echo '<pre style="color: white;">';
                    echo "Type non géré : $type";
                    echo '</pre>';
                    break;
            }
        }

        $test1 = [
            "fruits" => ["pomme", "banane", "framboise"],
            "légumes" => ["carotte", "poivron", "brocoli"],
            "boissons" => ["eau", "jus d'orange", "café"]
        ];
        my_vardump($test1);

    ?>

</body>
</html>
