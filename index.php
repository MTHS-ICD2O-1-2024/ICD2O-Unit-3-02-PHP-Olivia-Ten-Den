<!DOCTYPE html>
<!-- ICS2O-Unit3-02-HTML-PHP -->
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="The Area of Trapezoid, PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Olivia TD" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link
    rel="stylesheet"
    href="https://code.getmdl.io/1.3.0/material.deep_purple-pink.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <link
    rel="apple-touch-icon"
    sizes="180x180"
    href="./apple-touch-icon.png" />
  <link
    rel="icon"
    type="image/png"
    sizes="32x32"
    href="./favicon-32x32.png" />
  <link
    rel="icon"
    type="image/png"
    sizes="16x16"
    href="./favicon-16x16.png" />
  <link rel="manifest" href="./site.webmanifest" />
  <title>The Area of Trapezoid, PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">The Area of Trapezoid, PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/trapezoid.svg" alt="Image of trapezoid with labeled sides" width="250" />
      </div>
      <br />
      <div class="page-content">
        Formula: A = [(a + b) / 2] x h
        <br />
        <br />
        <br />
        Please enter integers for dimensions (mm).
      </div>
      <div class="page-content-php">
        <form action="answer.php" method="GET">
          a Base:
          <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type=" text" pattern="-?[0-9]*(\.[0-9]+)?" name="a-base-of-trapezoid">
            <label class="mdl-textfield__label" for="a-base-of-trapezoid">Enter a Base of trapezoid here (mm)</label>
            <span class="mdl-textfield__error">Input is not a number!</span>
          </div>
          mm
          <br />
          b Base:
          <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type=" text" pattern="-?[0-9]*(\.[0-9]+)?" name="b-base-of-trapezoid">
            <label class="mdl-textfield__label" for="b-base-of-trapezoid">Enter b base of trapezoid here (mm)</label>
            <span class="mdl-textfield__error">Input is not a number!</span>
          </div>
          mm
          <br />
          Height:
          <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type=" text" pattern="-?[0-9]*(\.[0-9]+)?" name="height-of-trapezoid">
            <label class="mdl-textfield__label" for="height-of-trapezoid">Enter height of trapezoid here (mm)</label>
            <span class="mdl-textfield__error">Input is not a number!</span>
          </div>
          mm
          <br />
          <!-- Accent-colored raised button with ripple -->
          <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
            type="submit">
            Calculate
          </button>
        </form>
      </div>
    </main>
  </div>
</body>

</html>