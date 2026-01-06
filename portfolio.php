<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Mon Portfolio</title>
  <link rel="stylesheet" href="Portfolio.css">
</head>
<body>

  <button id="theme-toggle">🌙</button>

  <header>
    <h1>Mon Portfolio</h1>
    <nav>
      <a href="#a-propos">À propos</a>
      <a href="#projets">Projets</a>
      <a href="#contact">Contact</a>
    </nav>
  </header>

  <div class="container">

    <section id="a-propos" class="section">
      <h2>À propos de moi</h2>
      <p>Bonjour ! Je suis un développeur web passionné par la création de sites modernes, performants et accessibles.</p>
    </section>

    <section id="projets" class="section">
      <h2>Mes Projets</h2>

      <div class="project">
        <h3>Projet 1 : Site vitrine</h3>
        <p>Une base de site type netflix avec du PHP, du CSS, du JS et une base de donnée SQL téléchargeable juste en dessous</p>
      </div>

      <div class="project">
        <h3>Projet 2 : Application ToDo</h3>
        <p>Application web pour gérer ses tâches avec JavaScript.</p>
      </div>

      <div class="project">
        <h3>Projet 3 : Portfolio</h3>
        <p>Le site que vous visitez actuellement !</p>
      </div>
    </section>

    <section id="contact" class="section">
      <h2>Contact</h2>
      <p>Tu peux me contacter par mail : <a href="mailto:clement150942800@outlook.fr">monadresse@email.com</a></p>
      <p>Tu peux me contacter avec mon numéro de téléphone : <a href="06 67 43 64 28">06 67 43 64 28</a></p>
    </section>

  </div>

  <footer>
    <p>© 2025 Mon Nom - Tous droits réservés</p>
  </footer>

  <script src="Portfolio.js"></script>
</body>
</html>
