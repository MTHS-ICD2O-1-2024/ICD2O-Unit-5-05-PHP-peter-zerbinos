<!DOCTYPE html>
<!-- ICS2O-Unit5-05-PHP -->
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="What Kind of Triangle, in PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Peter Zerbinos" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.orange-pink.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png" />
  <link rel="manifest" href="./site.webmanifest" />
  <title>What Kind of Triangle, in PHP</title>
</head>


<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">What Kind of Triangle, in PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/triangle.png" alt="Types of Triangle" />
      </div>
      <div class="page-content">Please enter in the length of the 3 sides of your triangle.</div>
      <br />
      <form action="answer.php" method="GET">
        <div class="mdl-textfield mdl-js-textfield">
          <!-- input pattern attribute -->
          <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="length-a" />
          <!-- mdl-textfield__label -->
          <label class="mdl-textfield__label" for="demo-input">Length A...</label>
          <!-- class "mdl-textfield__error" -->
          <span class="mdl-textfield__error">Input is not a number</span>
        </div>
        <br />
        <div class="mdl-textfield mdl-js-textfield">
          <!-- input pattern attribute -->
          <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="length-b" />
          <!-- mdl-textfield__label -->
          <label class="mdl-textfield__label" for="demo-input">Length B...</label>
          <!-- class "mdl-textfield__error" -->
          <span class="mdl-textfield__error">Input is not a number</span>
        </div>
        <br />
        <div class="mdl-textfield mdl-js-textfield">
          <!-- input pattern attribute -->
          <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="length-c" />
          <!-- mdl-textfield__label -->
          <label class="mdl-textfield__label" for="demo-input">Length C...</label>
          <!-- class "mdl-textfield__error" -->
          <span class="mdl-textfield__error">Input is not a number</span>
        </div>
        <br />
        <!-- Accent-colored raised button with ripple -->
        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
          type="submit">
          DETERMINE TYPE
        </button>
      </form>
      <br />
    </main>
  </div>
</body>

</html>