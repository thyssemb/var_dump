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

    <main id="container">
      <div id="terminal">
        <section id="terminal__bar">
          <div id="bar__buttons">
            <button class="bar__button red"></button>
            <button class="bar__button yellow"></button>
            <button class="bar__button green"></button>
          </div>
          <p id="bar__user">var_dump - user@macbookpro - zsh - 77x28</p>
        </section>

        <section id="terminal__body">
          <div id="terminal__output">
            <?php
                function my_vardump($var) {
                    $type = gettype($var);

                    switch ($type) {
                        case "string":
                            echo "string(" . strlen($var) . ") \"$var\"";
                            break;
                        case "integer":
                            echo "int($var)";
                            break;
                        case "double":
                            echo "float($var)";
                            break;
                        case "boolean":
                            echo "bool(" . ($var ? 'true' : 'false') . ")";
                            break;
                       case "array":
                            echo "array(" . count($var) . ") {<br>";
                             foreach ($var as $key => $value) {
                             echo "  [$key] => ";
                             my_vardump($value);
                              echo "<br>";
                               }
                        default:
                            echo "Type non géré : $type";
                            break;
                    }
                }

                $test1 = "Chaine de caractères";
                $test2 = 3;
                $test3 = 10.5;
                $test4 = [
                    "fruits" => ["pomme", "banane", "framboise"],
                    "légumes" => ["carotte", "poivron", "brocoli"],
                    "boissons" => ["eau", "jus d'orange", "café"]
                ];

            ?>
          </div>
          <div id="terminal__prompt">
            <span id="terminal__prompt--user">var_dump</span>
            <span id="terminal__prompt--location">~</span>
            <span id="terminal__git--name">git:</span>
            <span id="terminal__git--branch">main</span>
            <span> $ </span>
            <span id="terminal__output_result"><?php echo my_vardump($test4) ?></span>
            <div id="terminal__input" contenteditable="true"></div>
          </div>
        </section>
      </div>
    </main>
</body>
</html>
