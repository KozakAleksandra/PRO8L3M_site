<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>PRO8L3M</title>
    <link href="https://fonts.googleapis.com/css?family=Cousine%7COpen+Sans+Condensed:300" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
    <style>
        .discord {
            background-color: #000000;
            color: white;
            padding: 10px;
            align-content: center;
            border: 0;
            font-size: 14px;
            box-shadow: 2px 2px 8px #8a8a8a;
        }

        .button-container {
            text-align: center
        }

        .text-formatter {
            color: black;
            padding: 10px;
            margin: 20px;
            text-align: center;
            border: 0;
            font-size: 14px;
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
                <a href="fanbase.php">Fanbase</a>

                <?php
                session_start();

                if (isset($_SESSION['zalogowany'])) {

                    ?>
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
            <h1>Fanbase</h1>
            <iframe src="https://open.spotify.com/embed/album/2Dnli6R27dyVX1GBLMudpN" style="border: 0; width: 100%; height: 380px;" allowfullscreen=""></iframe>
            <br />
            <div class="text-formatter">
               Odkryj rap strefe z nami!
            </div>
            <br />
            <div class="button-container">
                <a class="discord" href="https://discordapp.com/invite/hiphop" target="_blank">Dołącz do grupy na discordzie.</a>
            </div>

        </section>
    </main>
    <footer>
        <p>&copy; 2019 Aleksandra Kozak</p>
    </footer>

    <script src="scripts.js"></script>
</body>

</html>