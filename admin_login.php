<!doctype html>
<html lang="nl">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Login Beheer | Pizzeria Vesuvio</title>
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
          <li><a href="index.php">Homepage</a></li>
          <li><a href="admin_login.php">Login</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main id="content" class="container">
    <section class="admin-auth-wrap">
      <div class="admin-auth-card">
        <div class="pill-row">
          <div class="pill">🔐 Beheerlogin</div>
          <div class="pill">🍕 Pizzeria Vesuvio</div>
        </div>

        <h1 class="admin-title">Inloggen op het beheerpaneel</h1>
        <p class="admin-subtitle">Voer je gegevens in om de menukaart te beheren.</p>

        <form class="admin-form" action="dbcalls/login/login.php" method="post">
          <div class="field">
            <label for="username">Gebruikersnaam</label>
            <input type="text" id="username" name="username" placeholder="Gebruikersnaam" required
              autocomplete="username" />
          </div>

          <div class="field">
            <label for="password">Wachtwoord</label>
            <input type="password" id="password" name="password" placeholder="Wachtwoord" required
              autocomplete="current-password" />
          </div>

          <div class="admin-form-actions">
            <button type="submit" class="btn btn-primary">Inloggen</button>
            <a href="index.php" class="btn">Terug naar website</a>
          </div>
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