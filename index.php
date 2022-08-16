<?php session_start(); ?>
<!DOCTYPE html>
<html lang="FR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Spileers Julien</title>

  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

  <!-- custom css file link  -->

  <link rel="stylesheet" href="./app100.css" />
</head>

<body>
  <!-- header section starts  -->

  <header>
    <div class="user">
      <img src="./Img/1638539117135.jpg" alt="" />
      <h3 class="name">Spileers Julien</h3>
      <h2 class="post">Developpeur web et <span>web mobile</span></h2>
    </div>

    <nav class="navbar">
      <ul>
        <li><a href="#home">Accueil</a></li>
        <li><a href="#about">A propos</a></li>
        <li><a href="#education">Mes compétence</a></li>
        <li><a href="#portfolio">Mes Projets</a></li>
        <li><a href="#contact">Me Contacter</a></li>
      </ul>
    </nav>
  </header>

  <!-- header section ends -->

  <div id="menu" class="fas fa-bars"></div>

  <!-- home section starts  -->
  <div id="particles-js"></div>

  <section class="home" id="home">
    <h3><span>Bienvenue </span></h3>
    <h1 class="post">
      DEVELOPPEUR<strong id="wrapper"> <em id="hi"></em></strong>
    </h1>
    <p>
      Vous recherchez un développeur Web et web mobile junior, je suis à votre
      disposition pour répondre à tout type de projets de création de sites
      internet, de développement spécifique ou d'applications web. Passionné
      par les technologies liées au Web, je mets mes compétences au service de
      vos besoins dans divers domaines.
    </p>
    <a href="#about"><button class="btn">A propos <i class="fas fa-user"></i></button></a>
  </section>

  <!-- home section ends -->

  <!-- about section starts  -->

  <section class="about" id="about">
    <h2 class="heading"><span>A</span> propos</h2>

    <div class="row">
      <div class="bloc">
        <p>
          Je m'appelle Spileers Julien, j'ai 28 ans et je vis à Haubourdin en France.
          <br />
          Ma passion pour le développement web commence en décembre 2020 où j'ai decidé de me reconvertir
          professionnellement en intégrant la formation développeur web et web mobile à AFCI.
          <br />
          <br />
          Dès lors, je mis tout en oeuvre pour percer dans cette voie, tout en
          prenant du plaisir sur les divers projets que j'ai pu réaliser.
      </div>
      <div class="info">
        <h3><span> Noms : </span> Spileers Julien</h3>
        <h3><span> Age : </span> 28</h3>
        <h3><span> Qualification : </span> Developpeur web et web mobile</h3>
        <h3><span> Poste : </span> Developpeur Front End</h3>
        <h3><span> Language : </span> Symfony / React</h3>
        <a href="./Img/Spileers julien.pdf" download="CV Spileers Julien"><button class="btn">
            Télecharger CV <i class="fas fa-download"></i></button></a>
      </div>

      <div class="counter">
        <div class="box">
          <span>1</span>
          <h3>ans d'experiences</h3>
        </div>

        <div class="box">
          <span>4</span>
          <h3>projet terminer</h3>
        </div>

        <div class="box">
          <span>3+</span>
          <h3>clients satisfaits</h3>
        </div>

        <div class="box">
          <span>6</span>
          <h3>Café par Jour</h3>
        </div>
      </div>
    </div>
  </section>

  <!-- about section ends -->

  <!-- education section starts  -->

  <section class="education" id="education">
    <h2 class="heading">Mes <span>compétences</span></h2>

    <div class="bloc">
      <p>
        Je vous propose mes compétences pour apporter des solutions à vos problèmes de développement,
        Je peux créer et gérer des sites en front-end ainsi qu’en back-end à l’aide de ces différents langages :
        HTML, CSS – Boostrap, Javascript – Symfony, React, SQL, PHP et des CMS tels que WordPress et Shopify.
        <br>
        <br>
        Mes expériences professionnelles passées, me permettent de mieux comprendre le fonctionnement du web
        et les attentes d'un client en répondant précisément au besoin demandé en fonction du domaine d'activité.
      </p>
    </div>
    <div class="box-container">
      <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>2022</span>
        <h3>Recherche Alternance Développeur d'application symfony</h3>
        <p>
          Suite a l'obtention de mon titre développeur web et web mobile. Je suis a la recherche d'une alternance "Développeur d'application Symfony/ Php,
          ayant deja utilisé c'est language, je souhaite continuer a développer mes connaissances dans ce domaine"
        </p>
      </div>
      <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>2022</span>
        <h3>Stage "Un artiste, Une cause"</h3>
        <p>
          Ce stage d’une durée de 3 mois, a consisté à la création d’un site web pour l'association "Un artiste, une cause".
          Il s’est déroulé du 14 mars au 10 juin 2022 en télétravail.
          Durant cette période, je me suis familiarisé avec un environnement technique et d’applications (CMS).

        </p>
      </div>

      <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>2021</span>
        <h3>Developpeur web</h3>
        <p>
          Formation de développeur web et web mobile à AFCI de Villeneuve-d'ascq, qui m'a permit de mieux comprendre
          le fonctionnement du web, mais également d'acquérir de bonne base en algorithmie et sur certains languages de programmation.
        </p>
      </div>

      <div class="box">
        <i class="fas fa-graduation-cap"></i>
        <span>2018</span>
        <h3>Extrudeur Plastique</h3>
        <p>
          Employé en qualité de sous-chef, j'accompagnais le chef et le remplaçais lors de ses absences.
          Je manageais une équipe de 8 personnes, Réglage des machines de production et gestion de la qualité du produit.
        </p>
      </div>
    </div>
  </section>

  <!-- education section ends -->

  <!-- portfolio section starts  -->

  <section class="portfolio" id="portfolio">
    <h2 class="heading">Mes <span>projets</span></h2>
    <div class="box-container">
      <article class="cards">
        <div class="box">
          <img src="./Img/FireShot Capture 077 - Raccourcisseur d'URL - Accueil - 127.0.0.1.png" alt="" />
        </div>
        <div class="cardText">
          <h3>Raccourcisseur d'Url</h3>
          <p>
            Création d'un raccourcisseur d'Url avec analyse des statistiques. Je me suis servit du framework Symfony
            et php pour dévelloper mon application web. </p>
          <div class="boxBtn">
            <a href="https://github.com/julien59320/shortUrl"><button class="btn">A venir</button></a>
            <a href="https://github.com/julien59320/shortUrl"><button class="btn">Github</button></a>
          </div>
        </div>
      </article>
      <article class="cards">
        <div class="box">
          <img src="./Img/FireShot Capture 008 - Movie App - julien59320.github.io.png" alt="" />
        </div>
        <div class="cardText">
          <h3>App Rezoom</h3>
          <p>
            Création d'une application web qui permet d'afficher le résumer de film développer en JAVASCRIPT, AJAX en utilisant FETCH, HTML et CSS
          <div class="boxBtn">
            <a href="https://julien59320.github.io/appliMovie/"><button class="btn">Découvrir</button></a>
            <a href="https://github.com/julien59320/appliMovie"><button class="btn">Github</button></a>
          </div>
        </div>
      </article>
      <article class="cards">
        <div class="box">
          <img src="./Img/événements.png" alt="" />
        </div>
        <div class="cardText">
          <h3>Un artiste, une cause</h3>
          <p>
            Dans le cadre de mon stage, j'ai créer un site web pour une association qui a pour but de soutenir des causes soutenue par des artistes crée avec le CMS Wordpress
          </p>
          <div class="boxBtn">
            <a href="https://unartisteunecause.fr/"><button class="btn">Découvrir</button></a>
          </div>
        </div>
      </article>
      <article class="cards">
        <div class="box">
          <img src="./Img/FireShot Capture 001 - JohnPharell - 127.0.0.1.png" alt="" />
        </div>
        <div class="cardText">
          <h3>Site e-commerce</h3>
          <p>
            Création d'un template e-commerce, qui ma permit de développer mes compétences en HTML, CSS, Javascript.
          </p>
          <div class="boxBtn">
            <a href="https://julien59320.github.io/JohnPharell/"><button class="btn">Découvrir</button></a>
            <a href="https://github.com/julien59320/JohnPharell"><button class="btn">Github</button></a>
          </div>
        </div>
      </article>
      <article class="cards">
        <div class="box">
          <img src="./Img/FireShot Capture 004 - Spileers Julien - julien59320.github.io.png" alt="" />
        </div>
        <div class="cardText">
          <h3>Curriculum vitaé</h3>
          <p>
            Création d'un C.V a partir d'une maquette, qui ma permit de développer mes compétences en intégrations Web ainsi qu'en HTML, CSS.
          </p>
          <div class="boxBtn">
            <a href="https://julien59320.github.io/Projet_2/"><button class="btn">Découvrir</button></a>
            <a href="https://github.com/julien59320/Projet_2"><button class="btn">Github</button></a>
          </div>
        </div>
      </article>
    </div>
  </section>

  <!-- portfolio section ends -->

  <!-- contact section starts  -->

  <section class="contact" id="contact">
    <h2 class="heading"><span>Me </span> contacter</h2>

    <div class="row">
      <article class="contactText">
        <div class="icone">
          <i class="fas fa-paper-plane"></i>
          <h4>Spileers.julien59<br />@gmail.com</h4>
        </div>
        <div class="icone">
          <i class="fas fa-mobile-alt"></i>
          <h4>07.67.42.84.03<br /></h4>
        </div>
        <div class="icone">
          <i class="fas fa-map-marker-alt"></i>
          <h4>
            1 av, de l'europe <br />
            59320 Haubourdin
          </h4>
        </div>
      </article>

      <!-- Formulaire -->
      <form method="post" action="mail.php">


        <?php if (array_key_exists('errors', $_SESSION)) : ?>
          <div class="alert alert-danger">
            <p>
              <?= implode('<br>', $_SESSION['errors']); ?>
            </p>
          </div>
        <?php endif; ?>
        <?php if (array_key_exists('success', $_SESSION)) : ?>
          <div class="alert alert-success">
            <p>
              Votre email a bien été envoyé
            </p>
          </div>
        <?php endif; ?>
        <input type="text" placeholder="nom" name="name" class="box" value="<?= isset($_SESSION['inputs']['name']) ? $_SESSION['inputs']['name'] : ""; ?>" />
        <input type="text" placeholder="email" name="mail" class="box" value="<?= isset($_SESSION['inputs']['mail']) ? $_SESSION['inputs']['mail'] : ""; ?>" />

        <textarea name="message" cols="30" rows="10" class="box message" placeholder="message" value="<?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : ""; ?>"></textarea>
        <button type="submit" class="btn">
          Envoyer <i class="fab fa-telegram-plane"></i>
        </button>
        <!-- <h2>DEBUG</h2> -->

        <!-- <?= var_dump($_SESSION); ?> -->
    </div>
    </form>
  </section>

  <!-- contact section ends -->

  <!-- scroll top button  -->

  <a href="#home" class="top">
    <img src="./Img/Rocket-DRAWING-_-STEP-10-removebg-preview.png" alt="" />
  </a>
  <!-- jquery cdn link  -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <!-- custom js file link  -->
  <script type="text/javascript" src="./particles.js"></script>
  <script type="text/javascript" src="./app1.js"></script>
  <script src="./script.js"></script>
</body>

</html>
<?php
unset($_SESSION['inputs']);
unset($_SESSION['errors']);
unset($_SESSION['success']);
?>