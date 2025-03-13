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
          <div id="terminal__output"></div>
          <div id="terminal__prompt">
            <span id="terminal__prompt--user">var_dump</span>
            <span id="terminal__prompt--location">~</span>
            <span id="terminal__git--name">git:</span>
            <span id="terminal__git--branch">main</span>
            <span> $ </span>
            <div id="terminal__input" contenteditable="true"></div>
          </div>
        </section>
      </div>
    </main>

    <script src="assets/script.js"></script>
</body>
</html>
