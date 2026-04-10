<?php
include("dbcalls/menukaart/read.php");
?>
<!doctype html>
<html lang="nl">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Pizzeria Vesuvio | Nijmegen</title>
  <link rel="stylesheet" href="./assets/css/style.css" />
</head>

<body>
  <a class="skip-link" href="#content">Direct naar inhoud</a>

  <header class="site-header">
    <div class="container navbar">
      <a class="brand" href="index.php" aria-label="Pizzeria Vesuvio home">
        <img src="assets/img/logo.png" alt="Logo Pizzeria Vesuvio" width="42" height="42" />
        <span>Pizzeria Vesuvio</span>
      </a>
      <nav aria-label="Hoofdnavigatie">
        <ul>
          <li><a href="#aanraders">Aanraders</a></li>
          <li><a href="#menu">Menukaart</a></li>
          <li><a href="#zoeken">Zoeken</a></li>
          <li><a href="#info">Info</a></li>
          <li><a href="admin_login.php">Login</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main id="content" class="container">

    <!-- HERO -->
    <section class="hero" aria-label="Intro">
      <div>
        <div class="pill-row">
          <div class="pill">🍕 Nijmegen</div>
          <div class="pill">🔥 Ovenvers</div>
          <div class="pill">🌿 Vega opties</div>
        </div>

        <h1>Pizza die je avond redt</h1>
        <p>Knapperige bodem, rijke saus, toppings die niet verlegen zijn. Bestel je favoriet of duik meteen de menukaart
          in.</p>

        <div class="cta-row">
          <a class="btn btn-primary" href="#aanraders">Bekijk aanraders</a>
          <a class="btn" href="#menu">Naar menukaart</a>
        </div>
      </div>

      <div class="hero-media" aria-label="Pizza hero afbeelding">
        <img src="assets/img/hero-pizza.jpg" alt="Pizza uit de oven met verse toppings" width="1600" height="900"
          loading="lazy" />
      </div>
    </section>

    <!-- USPs -->
    <section class="section" aria-label="Waarom Vesuvio">
      <div class="section-header">
        <h2>Waarom Vesuvio</h2>
        <p>Klein, snel, en vooral lekker.</p>
      </div>
      <div class="highlights grid grid-3">
        <div class="feature-card">
          <div class="feature-top">
            <div class="icon-badge" aria-hidden="true">🔥</div>
            <span class="badge new">Oven</span>
          </div>
          <h3>Ovenvers</h3>
          <p>Elke pizza gaat knapperig en warm de deur uit.</p>
        </div>

        <div class="feature-card">
          <div class="feature-top">
            <div class="icon-badge" aria-hidden="true">🌿</div>
            <span class="badge green">Vega</span>
          </div>
          <h3>Voor ieder wat wils</h3>
          <p>Classic, vega, spicy: je vindt hier altijd iets dat klopt.</p>
        </div>

        <div class="feature-card">
          <div class="feature-top">
            <div class="icon-badge" aria-hidden="true">⏱️</div>
            <span class="badge">Snel</span>
          </div>
          <h3>Snelle bezorging</h3>
          <p>Ideaal voor filmavond, studiedruk of “ik heb geen zin om te koken”.</p>
        </div>
      </div>
    </section>

    <!-- AANRADERS -->
    <section class="section" id="aanraders" aria-label="Aanraders">
      <div class="section-header">
        <h2>Aanraders</h2>
        <p>Drie publiekslievelingen.</p>
      </div>

      <div class="highlights grid grid-3">
        <article class="highlight">
          <img src="assets/img/truffle-mushroom.jpg" alt="Pizza Truffle Mushroom" width="800" height="600"
            loading="lazy" />
          <div class="highlight-body">
            <div class="highlight-top">
              <h3>Truffle Mushroom</h3>
              <span class="price-chip">€ 14,50</span>
            </div>
            <div class="badges">
              <span class="badge new">Nieuw</span>
              <span class="badge green">Vega</span>
              <span class="badge">Speciaal</span>
            </div>
            <p class="small">Truffelcrème, champignon, mozzarella, rucola.</p>
          </div>
        </article>

        <article class="highlight">
          <img src="assets/img/diavola.jpg" alt="Pizza Diavola" width="800" height="600" loading="lazy" />
          <div class="highlight-body">
            <div class="highlight-top">
              <h3>Diavola</h3>
              <span class="price-chip">€ 13,50</span>
            </div>
            <div class="badges">
              <span class="badge hot">Extra pittig</span>
              <span class="badge">Vlees</span>
            </div>
            <p class="small">Spicy salami, chili, mozzarella, tomatensaus.</p>
          </div>
        </article>

        <article class="highlight">
          <img src="assets/img/quattro-formaggi.jpg" alt="Pizza Quattro Formaggi" width="800" height="600"
            loading="lazy" />
          <div class="highlight-body">
            <div class="highlight-top">
              <h3>Quattro Formaggi</h3>
              <span class="price-chip">€ 13,00</span>
            </div>
            <div class="badges">
              <span class="badge green">Vega</span>
              <span class="badge new">Populair</span>
            </div>
            <p class="small">Mozzarella, gorgonzola, parmezaan, pecorino.</p>
          </div>
        </article>
      </div>
    </section>

    <!-- INFO -->
    <section class="section" id="info" aria-label="Praktische informatie">
      <div class="section-header">
        <h2>Praktische info</h2>
        <p>Handig om te weten.</p>
      </div>

      <div class="info-strip grid grid-3">
        <div class="info-box">
          <h3>Openingstijden</h3>
          <ul class="list">
            <li>Ma t/m Do: 16:00 - 22:00</li>
            <li>Vr: 16:00 - 23:00</li>
            <li>Za: 14:00 - 23:00</li>
            <li>Zo: 14:00 - 22:00</li>
          </ul>
        </div>

        <div class="info-box">
          <h3>Bezorgen</h3>
          <ul class="list">
            <li>Nijmegen & omgeving</li>
            <li>Gemiddeld 30 - 45 min</li>
            <li>Gratis vanaf € 20</li>
          </ul>
        </div>

        <div class="info-box">
          <h3>Allergenen</h3>
          <ul class="list">
            <li>Vraag naar gluten-/lactose opties</li>
            <li>Noten: mogelijk sporen</li>
            <li>Vega/Vegan duidelijk gelabeld</li>
          </ul>
        </div>
      </div>
    </section>

    <!-- ZOEKEN -->
    <section class="card" id="zoeken" aria-label="Zoekformulier">
      <div class="card-header">
        <h2>Zoeken</h2>
        <p>Zoek op naam of filter op categorie.</p>
      </div>
      <div class="card-body">
        <form class="searchbar" action="#" method="get" aria-label="Zoek in menukaart">
          <div class="field">
            <label for="q">Zoekterm</label>
            <input id="q" name="q" type="search" placeholder="bijv. truffel, pepperoni, vega" />
          </div>
          <div class="field" style="max-width:260px;">
            <label for="cat">Categorie</label>
            <select id="cat" name="cat">
              <option value="">Alle categorieën</option>
              <option value="classic">Classic</option>
              <option value="vlees">Vlees</option>
              <option value="vega">Vega</option>
              <option value="speciaal">Speciaal</option>
            </select>
          </div>
          <button class="btn btn-primary" type="submit">Zoeken</button>
        </form>
      </div>
    </section>

    <!-- MENU -->
    <section class="card" id="menu" aria-label="Menukaart" style="margin-top:1rem;">
      <div class="card-header">
        <h2>Menukaart</h2>
        <p>Onze volledige selectie.</p>
      </div>

      <div class="card-body">
        <div class="menu-grid">
          <?php foreach ($result as $item) { ?>
            <div class="menu-item">
              <div class="thumb">
                <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['menu_title']; ?>" width="400"
                  height="300" />
              </div>
              <div>
                <div class="item-top">
                  <div>
                    <h3 class="item-title"><?php echo $item['menu_title']; ?></h3>
                  </div>
                  <div class="price-chip">€ <?php echo $item['price']; ?></div>
                </div>
                <p class="item-desc"><?php echo $item['description']; ?></p>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </section>
  </main>

  <footer class="footer">
    <div class="container">
      <div>© Pizzeria Vesuvio</div>
    </div>
  </footer>
</body>

</html>