<!DOCTYPE html>
<html lang="pl-PL">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>PRO8L3M - Kontakt</title>
  <link href="https://fonts.googleapis.com/css?family=Cousine%7COpen+Sans+Condensed:300" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />
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
    <section class="contact-us">
      <h1>Kontakt</h1>
      <div class="social-media-wrapper">
        <a href="https://www.facebook.com/PRO8L3M/" target="_blank">
          <i class="fab fa-facebook social-media"></i>
        </a>
        <a href="https://www.instagram.com/pro8l3m/" target="_blank">
          <i class="fab fa-instagram social-media"></i>
        </a>
        <a href="https://www.youtube.com/user/nigdystopTV" target="_blank">
          <i class="fab fa-youtube social-media"></i>
        </a>
        <a href="mailto:pro8l3m@revolume.pl">
          <i class="fas fa-envelope social-media"></i>
        </a>
      </div>
    </section>
  </main>
  <footer>
    <p>&copy; 2019 Aleksandra Kozak</p>
  </footer>

  <script src="scripts.js"></script>
</body>

</html>