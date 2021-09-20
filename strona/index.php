<!DOCTYPE html>
<html lang="pl-PL">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>PRO8L3M</title>
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
      <h1>O Nas</h1>
      <canvas id="c"></canvas>

      <!-- <div class="about-us-image">
          <img src="./assets/images/about-us.jpg" alt="logo" />
        </div> -->
      <div class="about-us-text">
        <p>
          Polska grupa muzyczna wykonująca hip-hop. Zespół powstał w 2013 roku
          w Warszawie z inicjatywy producenta muzycznego i DJ-a, Piotra
          "Steeza" Szulca i rapera Oskara Tuszyńskiego
        </p>
        <p>
          Zespół zadebiutował w 2013 roku minialbumem C30-C39, którego
          tytuł oznacza posunięcie szachowe zwane gambitem królewskim.
          Wydawnictwo ukazało się w nakładzie limitowanym do tysiąca
          egzemplarzy. Album promowany był teledyskiem do utworu "Tori Black",
          którego autorem zdjęć jest Jan Holoubek.Zespół interesuje się
          także motoryzacją, a dokładniej samochodami. Ich ulubionymi markami
          są: Audi, Mercedes-Benz oraz BMW. Szerszej publiczności dali się
          poznać dzięki wydanemu w 2014 roku mixtape'owi Art Brut.
          Wydawnictwo ma charakter materiału koncepcyjnego, jego warstwa
          muzyczna oparta jest na samplach z polskiej muzyki rozrywkowej lat
          70. i 80. Płyta doceniona została przez krytyków, jak i również w
          środowiskach poza hip-hopowych. Tytułem nawiązuje do
          artystycznego ruchu art brut, w języku francuskim oznaczającym
          sztukę "surową, nieokrzesaną". Mixtape promował teledysk do utworu
          "Jakby świat kończył się" w którym wystąpili polska aktorka
          Aleksandra Hamkało i raper Sokół. W 2014 roku otrzymali
          nagrodę "Nocne Marki" magazynu Aktivist w kategorii "Artysta
          Roku". Także w 2014 roku odbyła się premiera filmu fabularnego
          "Pocztówki z Republiki Absurdu" w reżyserii Jana Holoubka, na
          potrzeby którego zespół napisał utwór pt. "Krzyk", inspirowany
          samospaleniem żołnierza Armii Krajowej i filozofa, Ryszarda Siwca w
          1968 roku. Na początku 2016 roku zespół opublikował koncertowy
          teledysk do utworu "Stówa". 1 czerwca, tego samego roku nakładem
          RHW Records ukazał się debiutancki album zespołu zatytułowany
          PRO8L3M. Płytę poprzedził singel "2040", którego prapremiera
          odbyła się na antenie Programu III Polskiego Radia. Do piosenki
          powstał teledysk nawiązujący do cyberpunkowych produkcji anime.
          Wcześniej, w maju, trzecie wydawnictwo zespołu trafiło do
          przedsprzedaży w edycji limitowanej do 4 tys. egzemplarzy.
          Również w maju odbyła się premiera drugiego singla z płyty,
          "Molly". Piosenkę promował wideoklip w którym główną rolę zagrał
          amerykański aktor Philip Lenkowsky. 1 czerwca 2017 roku na
          platformie YouTube udostępniony został utwór "2#17" zapowiadający
          kolejne wydawnictwo grupy – minialbum Hack3d By GH05T 2.0.
        </p>
      </div>
    </section>
  </main>
  <footer>
    <p>&copy; 2019 Aleksandra Kozak</p>
  </footer>

  <script src="scripts.js"></script>
</body>

</html>