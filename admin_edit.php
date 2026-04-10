<?php
include("dbcalls/conn.php");
include("dbcalls/menukaart/read.php");

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Gerecht bewerken | Pizzeria Vesuvio</title>
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
    <section class="admin-panel admin-edit-layout">
      <div class="section-header">
        <h2>Gerecht bewerken</h2>
        <p>Pas hier de gegevens van één gerecht aan.</p>
      </div>

      <div class="card-body">
        <div class="admin-edit-preview">
          <img src="<?php echo ($result['image']); ?>" alt="<?php echo ($result['menu_title']); ?>" width="400"
            height="300" />
        </div>

        <form class="admin-form" action="dbcalls/menukaart/update.php" method="post">

          <input type="hidden" name="id" value="<?php echo $result['id']; ?>">

          <div class="admin-form-grid">
            <div class="field">
              <label for="edit-naam">Naam</label>
              <input type="text" id="edit-naam" name="menu_title" value="<?php echo $result['menu_title']; ?>" />
            </div>

            <div class="field">
              <label for="edit-prijs">Prijs</label>
              <input type="text" id="edit-prijs" name="price" value="<?php echo $result['price']; ?>" />
            </div>
          </div>

          <div class="admin-form-grid">
            <div class="field">
              <label for="edit-image">Afbeelding</label>
              <input type="text" id="edit-image" name="image" value="<?php echo $result['image']; ?>" />
            </div>
          </div>
  
          <div class="field">
            <label for="edit-beschrijving">Beschrijving</label>
            <textarea id="edit-beschrijving" name="description"
              rows="4"><?php echo $result['description']; ?></textarea>
          </div>

          <div class="admin-form-actions">
            <button type="submit" class="btn btn-primary">Opslaan</button>
            <a href="admin_menu.php" class="btn">Terug</a>

        </form>

        <form action="dbcalls/menukaart/delete.php" method="post">
          <input name="id" type="hidden" value="<?php echo $result["id"]; ?>">

          <input class="btn btn-small" type="submit" value="Verwijderen">
        </form>
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