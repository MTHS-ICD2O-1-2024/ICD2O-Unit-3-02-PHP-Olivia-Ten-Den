<!DOCTYPE html>3-02-HTML-PHP -->
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
      <div class="page-content-php">
        <div id="user-info">
          <?php
          $aBaseOfTrapezoid = $_GET["a-base-of-trapezoid"];
          $bBaseOfTrapezoid = $_GET["b-base-of-trapezoid"];
          $heightOfTrapezoid = $_GET["height-of-trapezoid"];

          // process
          $volumeOfTrapezoid = (($aBaseOfTrapezoid + $bBaseOfTrapezoid) / 2) * $heightOfTrapezoid;

          // output
          echo "If the trapezoid has one base equal to " . $aBaseOfTrapezoid . "mm, a second base equal to " . $bBaseOfTrapezoid . "mm and a height equal to " . $heightOfTrapezoid . "mm.";
          echo "<br />";
          echo "Then the volume of the trapezoid will be " . $volumeOfTrapezoid . " mm³.";
          ?>
        </div>
      </div>
    </main>
  </div>
</body>

</html>