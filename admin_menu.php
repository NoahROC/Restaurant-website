<?php
include("dbcalls/conn.php");

$sql = "SELECT * FROM menu ORDER BY id DESC";
$stmt = $conn->prepare($sql);
$stmt->execute();
$menuItems = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html lang="nl">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Beheer Menukaart | Pizzeria Vesuvio</title>
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
          <li><a href="index.php">Website</a></li>
          <li><a href="admin_menu.php">Beheer</a></li>
          <li><a href="admin_login.php">Uitloggen</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main id="content" class="container">

    <section class="admin-header-card">
      <div>
        <div class="pill-row">
          <div class="pill">⚙️ Beheeromgeving</div>
          <div class="pill">📋 Menukaart</div>
        </div>
        <h1 class="admin-title">Menukaart beheren</h1>
        <p class="admin-subtitle">Voeg gerechten toe, pas bestaande gerechten aan of verwijder items van de kaart.</p>
      </div>

      <div class="admin-form-actions">
        <a href="#nieuw-gerecht" class="btn btn-primary">Nieuw gerecht</a>
        <a href="index.php" class="btn">Bekijk website</a>
      </div>
    </section>

    <section class="admin-grid">
      <article class="admin-panel">
        <div class="section-header">
          <h2>Nieuw gerecht toevoegen</h2>
          <p>Vul de gegevens van een nieuw menu-item in.</p>
        </div>

        <div class="card-body">
          <form class="admin-form" id="nieuw-gerecht" action="dbcalls/menukaart/create.php" method="post">
            <div class="admin-form-grid">
              <div class="field">
                <label for="naam">Naam</label>
                <input type="text" id="naam" name="menu_title" placeholder="Bijv. Marinara" />
              </div>

              <div class="field">
                <label for="prijs">Prijs</label>
                <input type="text" id="prijs" name="price" placeholder="Bijv. 10.50" />
              </div>
            </div>

            <div class="admin-form-grid">


              <div class="field">
                <label for="image">Afbeelding</label>
                <input type="text" id="image" name="image" placeholder="assets/img/marinara.jpg" />
              </div>
            </div>

            <div class="field">
              <label for="beschrijving">Beschrijving</label>
              <textarea id="beschrijving" name="description" rows="4"
                placeholder="Korte beschrijving van het gerecht"></textarea>
            </div>



            <div class="admin-form-actions">
              <button type="submit" class="btn btn-primary">Gerecht toevoegen</button>
            </div>
          </form>
        </div>
      </article>

      <article class="admin-panel">
        <div class="section-header">
          <h2>Bestaande gerechten</h2>
          <p>Overzicht van de huidige items op de menukaart.</p>
        </div>

        <div class="card-body">
          <div class="admin-table-wrap">
            <table class="admin-table">
              <thead>
                <tr>
                  <th>Gerecht</th>
                  <th>Prijs</th>
                  <th>Acties</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($menuItems as $menuItem) { ?>
                  <tr>
                    <td><?php echo $menuItem["menu_title"]; ?></td>
                    <td>€ <?php echo $menuItem["price"]; ?></td>
                    <td class="admin-actions">
                      <form action="admin_edit.php" method="post">
                        <input type="hidden" value="<?php echo $menuItem["id"]; ?>">

                        <input class="btn btn-small" type="submit" value="Bewerken">
                      </form>

                      <form action="dbcalls/menukaart/delete.php" method="post">
                        <input name="id" type="hidden" value="<?php echo $menuItem["id"]; ?>">

                        <input class="btn btn-small" type="submit" value="Verwijderen">
                      </form>

                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </article>
    </section>

  </main>

  <footer class="footer">
    <div class="container">
      <div>© Pizzeria Vesuvio</div>
    </div>
  </footer>
</body>

</html>