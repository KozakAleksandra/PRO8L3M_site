<!DOCTYPE html>
<html lang="pl-PL">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>PRO8L3M - Albumy</title>
  <link href="https://fonts.googleapis.com/css?family=Cousine%7COpen+Sans+Condensed:300" rel="stylesheet" />
  <link rel="stylesheet" href="style.css" />
  <style>
    .wrapper {
      width: 100%;
      height: 380px;
      overflow: hidden;
      padding-bottom: 25px;
    }

    .photobanner {
      position: relative;
      height: 243px;
      margin-bottom: 30px;
      display: flex;
      width: 100%;
      justify-content: center;
    }

    .photobanner img {
      margin: 0px 25px;
      box-shadow: 2px 2px 8px #8a8a8a;
      max-height: 100%;
    }

    .photobanner {
      animation: bannermove 3s ease-in alternate-reverse;
    }

    .titles {
      position: relative;
      text-align: center;
    }

    .titles {
      margin: 25px;
      height: 36px;
      max-height: 100%;
      background-color: #000;
      color: white;
      box-shadow: 2px 2px 8px #8a8a8a;
    }

    .formater {
      height: 243px;
    }


    @keyframes bannermove {
      from {
        left: 0px;
      }

      to {
        left: -2700px;
      }
    }
  </style>
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
      <h1>Albumy</h1>
      <div class="about-us-text">
        <div class="wrapper">
          <div class="photobanner">
            <a href="https://www.youtube.com/playlist?list=PLCiN2s_UthxoOCDelaro1WQ1ryKkY7xhg">
              <img src="./assets/images/album1.jpg" alt="" class="formater" />
              <div class=titles> 2013 - C30-C39</div>
            </a>
            <a href="https://www.youtube.com/playlist?list=PLCiN2s_UthxrdMUMwx1BXzcB_eabB04hM">
              <img src="./assets/images/album2.jpg" alt="" class="formater" />
              <div class=titles> 2016 - PRO8L3M</div>
            </a>
            <a href="https://www.youtube.com/playlist?list=PLCiN2s_Uthxree9PPNywfveYjEVoRDm65">
              <img src="./assets/images/albumy3.jpg" alt="" class="formater" />
              <div class=titles> 2017 - Hack3d By GH05T 2.0</div>
            </a>
            <a href="https://www.youtube.com/playlist?list=PL_Ed-YblFpnZy-k3iOtksrpOLUZcXHHbW">
              <img src="./assets/images/album4.jpg" alt="" class="formater" />
              <div class=titles> 2018 - Ground Zero Mixtape</div>
            </a>
            <a href="https://www.youtube.com/playlist?list=PLCiN2s_Uthxp1jTvBUZ3PvoTMKrE3kS5D">
              <img src="./assets/images/album5.jpg" alt="" class="formater" />
              <div class=titles> 2019 - Widmo</div>
            </a>
          </div>
        </div>
      </div>
    </section>
  </main>
  <footer>
    <p>&copy; 2019 Aleksandra Kozak</p>
  </footer>

  <script src="scripts.js"></script>
</body>

</html>