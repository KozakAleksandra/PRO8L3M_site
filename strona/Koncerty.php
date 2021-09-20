<!DOCTYPE html>
<html lang="pl-PL">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>PRO8L3M - Koncerty</title>
  <link href="https://fonts.googleapis.com/css?family=Cousine%7COpen+Sans+Condensed:300" rel="stylesheet" />
  <link rel="stylesheet" href="style.css" />

</head>

<body>
  <header>
    <nav class="nav">
      <div class="nav-header">
        <div class="nav-title">
          <a href="index.php">
            <img src="./assets/images/logo.png" alt="logo" class="logo" />
          </a>
        </div>
      </div>
      <div class="nav-btn">
        <label for="nav-check">
          <span></span>
          <span></span>
          <span></span>
        </label>
      </div>
      <input type="checkbox" id="nav-check" />
      <div class="nav-links">
        <a href="Koncerty.php">Koncerty</a>
        <a href="Albumy.php">Albumy</a>
        <a href="Kontakt.php">Kontakt</a>

        <?php
        session_start();

        if (isset($_SESSION['zalogowany'])) {

          ?>
          <a href="fanbase.php">Fanbase</a>
          <a href="wyloguj.php">Wyloguj się</a>
        <?php
      } else {
        ?>
          <a href="new.php">Zaloguj</a>
        <?php
      }
      ?>
      </div>
    </nav>
  </header>
  <main>
    <section class="about-us">
      <h1>Koncerty</h1>
      <div class="about-us-image">
        <img src="./assets/images/concert.jpg" alt="concert" />
      </div>
      <div class="gallery-container">
        <div class="row">
          <div class="column">
            <img src="./assets/images/koncerty1.jpg" alt="photo1" style="width:100%" onclick="myFunction(this);" />
          </div>
          <div class="column">
            <img src="./assets/images/koncerty2.jpg" alt="photo2" style="width:100%" onclick="myFunction(this);" />
          </div>
          <div class="column">
            <img src="./assets/images/koncerty3.jpg" alt="photo3" style="width:100%" onclick="myFunction(this);" />
          </div>
          <div class="column">
            <img src="./assets/images/koncerty5.jpg" alt="photo4" style="width:100%" onclick="myFunction(this);" />
          </div>

        </div>
      </div>

      <div class="container">
        <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
        <img id="expandedImg" src="./assets/images/koncerty1.jpg" alt="photo1" style="width:100%" />
        <div id="imgtext"></div>
      </div>

      <div class="video-wrap">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/zKOzQdmXotI" allowfullscreen></iframe>
      </div>

      <div class="about-us-text">
        <!-- <p>
            Polska grupa muzyczna wykonująca hip-hop. Zespół powstał w 2013 roku
            w Warszawie z inicjatywy producenta muzycznego i DJ-a, Piotra
            "Steeza" Szulca i rapera Oskara Tuszyńskiego
          </p>  -->
        <p>
          KONCERTY 2019:

        </p>

      </div>
      <div class="about-us-image">
        <img src="./assets/images/lol.JPG" alt="concert" />
      </div>
    </section>
  </main>
  <footer>
    <p>&copy; 2019 Aleksandra Kozak</p>
  </footer>

  <script src="scripts.js"></script>
</body>

</html>