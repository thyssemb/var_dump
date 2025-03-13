<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Var_dump Terminal</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <h2>Var_dump( )</h2>

  <?php
      function my_vardump($var) {
          $type = gettype($var);

          switch ($type) {
              case "string":
                  echo '<pre style="background: #222; color: #0f0; padding: 10px; border-radius: 5px;">';
                  echo "string(".strlen($var).") \"$var\"";
                  echo '</pre>';
                  break;
              case "integer":
                  echo '<pre style="background: #222; color: #0f0; padding: 10px; border-radius: 5px;">';
                  echo "int($var)";
                  echo '</pre>';
                  break;
              case "double":
                  echo '<pre style="background: #222; color: #0f0; padding: 10px; border-radius: 5px;">';
                  echo "float($var)";
                  echo '</pre>';
                  break;
              case "boolean":
                  echo '<pre style="background: #222; color: #0f0; padding: 10px; border-radius: 5px;">';
                  echo "bool(" . ($var ? 'true' : 'false') . ")";
                  echo '</pre>';
                  break;
              case "NULL":
                  echo '<pre style="background: #222; color: #0f0; padding: 10px; border-radius: 5px;">';
                  echo "NULL";
                  echo '</pre>';
                  break;
              default:
                  echo '<pre style="background: #222; color: #0f0; padding: 10px; border-radius: 5px;">';
                  echo "Type non géré : $type";
                  echo '</pre>';
                  break;
          }
      }

      $test1 = "blabla";
      echo "<h3>Type string :</h3>";
      my_vardump($test1);

  ?>

</body>
</html>
