<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="./images/icon.png" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>Portfolio Jérémy Perret - Développeur Web</title>
    <meta name="description" content="Je m’appelle Jérémy Perret, j’ai 19 ans,
  et je suis passionné par le développement web, en particulier par le
  développement front-end. Actuellement, je suis étudiant en BTS service
  informatique." />
</head>

<body>
    <header>
        <div class="menu-logo">
            <img src="./images/logo/stmichel-logo.png" alt="Logo St-Michel" />
        </div>
        <div class="menu-links">
            <ul>
                <li><a href="#section_home">Accueil</a></li>
                <li><a href="#section_about">Présentation</a></li>
                <li><a href="#section_skills">Compétences</a></li>
                <li><a href="#section_projects">Réalisations</a></li>
                <li><a href="#section_veille">Veille Technologique</a></li>
                <li><a href="#section_contact">Contact</a></li>
            </ul>
        </div>
        <div class="menu-hamburger">
            <span class="material-symbols-outlined close"> close </span>
            <span class="material-symbols-outlined open"> menu </span>
        </div>
    </header>
    <div id="section_home">
        <div class="container-content">
            <div class="content">
                <h2>Bonjour je suis</h2>
                <h1>
                    <span class="typeWriter" data-checkVisible="true" data-speed="2"
                        data-text='["Jérémy Perret", "Étudiant en BTS"]' data-dltSpeed="false"></span>
                </h1>
                <p>
                    Je m’appelle <b>Jérémy Perret</b>, j’ai 19 ans, et je suis passionné
                    par le développement web, en particulier par le développement
                    <b>front-end.</b> Actuellement, je suis étudiant en BTS service
                    informatique.
                </p>
                <a href="#section_about"><button>
                        Qui suis-je ?<span class="material-symbols-outlined">
                            arrow_downward
                        </span>
                    </button></a>
            </div>
        </div>
        <div class="container-profil">
            <div class="circle"></div>
            <div class="img-jeremy">
                <img src="./images/photo-jeremy.jpg" alt="Photo de Jérémy" />
            </div>
        </div>
    </div>
    <div id="section_about">
        <div class="container-timeline">
            <div class="timeline">
                <div class="container left-container">
                    <img src="./images/icon-etude.png" alt="" />
                    <div class="text-box">
                        <h2>Saint Michel</h2>
                        <small>2022 - Aujourd'hui</small>
                        <p>
                            Étudiant en BTS Services Informatique aux Organisations option
                            SLAM
                        </p>
                        <span class="left-container-arrow"></span>
                    </div>
                </div>
                <div class="container right-container">
                    <img src="./images/icon-etude.png" alt="" />
                    <div class="text-box">
                        <h2>E.C.A</h2>
                        <small>2019 - 2022</small>
                        <p>
                            Obtention du baccalauréat professionnel Systèmes Numériques
                            option SSIHT
                        </p>
                        <span class="right-container-arrow"></span>
                    </div>
                </div>
                <div class="container left-container">
                    <img src="./images/icon-etude.png" alt="" />
                    <div class="text-box">
                        <h2>Simone Veil</h2>
                        <small>2014 - 2018</small>
                        <p>Obtention du brevet des collèges</p>
                        <span class="left-container-arrow"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-content">
            <div class="content">
                <h1>A propos de <span>moi</span></h1>
                <p>
                    Je suis Jérémy, et je suis actuellement étudiant en
                    <b>BTS SIO</b> option
                    <b>Solutions Logicielles et Applications Métier</b> dans
                    l'établissement Saint Michel à Annecy. Avant mon BTS, j'ai obtenu
                    mon <b>baccalauréat professionnel Systèmes Numériques</b> à l'E.C.A
                    en 2022. Cela m'a permis de développer une solide base théorique
                    dans mon domaine. <br /><br />
                    Je suis un grand adepte de l'apprentissage continu et je me tiens
                    régulièrement informé des dernières tendances et des dernières
                    technologies dans mon domaine. <br />
                    En-dehors de mon parcours scolaire, je suis également très impliqué
                    dans <b>la musique et le football</b>, j'aime passer du temps avec
                    mes amis. <br /><br />
                    En somme, je suis <b>dévoué et passionné</b>, qui est toujours prêt
                    à relever de nouveaux défis et à apprendre de nouvelles choses. Je
                    suis convaincu que mon expérience, mes compétences et mon parcours
                    scolaire seront un atout précieux pour
                    <b>tout projet sur lequel je pourrai travailler.</b>
                </p>
                <div class="buttons">
                    <div class="button-cv">
                        <a href="./images/cv.pdf" target="_blank" title="Télécharger mon CV"><button>
                                Télécharger mon CV<span class="material-symbols-outlined">
                                    download
                                </span>
                            </button></a>
                    </div>
                    <div class="button-social">
                        <a href="https://www.linkedin.com/in/jeremy-prt/" target="_blank" title="Linkedin">
                            <button class="icon">
                                <i class="fa-brands fa-linkedin"></i>
                            </button>
                        </a>
                        <a href="https://github.com/worlzz" target="_blank" title="Github">
                            <button class="icon">
                                <i class="fa-brands fa-github"></i>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="section_skills">
        <div class="container-skills">
            <div class="content">
                <h1>Mes compétences</h1>
                <p>
                    Grâce à mes expériences personnelles et scolaires, j'ai
                    considérablement évolué en termes d'autonomie et de motivation. Mon
                    parcours m'a permis de développer une palette de compétences
                    techniques solides, dont je vous invite à découvrir un aperçu
                    ci-dessous :
                </p>
            </div>
            <div class="skills">
                <div class="skills-bar">
                    <div class="info">
                        <p>HTML</p>
                        <p class="percent">90%</p>
                    </div>
                    <div class="bar">
                        <span class="html"></span>
                    </div>
                </div>
                <div class="skills-bar">
                    <div class="info">
                        <p>CSS</p>
                        <p class="percent">80%</p>
                    </div>
                    <div class="bar">
                        <span class="css"></span>
                    </div>
                </div>
                <div class="skills-bar">
                    <div class="info">
                        <p>JS</p>
                        <p class="percent">50%</p>
                    </div>
                    <div class="bar">
                        <span class="js"></span>
                    </div>
                </div>
                <div class="skills-bar">
                    <div class="info">
                        <p>C#</p>
                        <p class="percent">65%</p>
                    </div>
                    <div class="bar">
                        <span class="csharp"></span>
                    </div>
                </div>
                <div class="skills-bar">
                    <div class="info">
                        <p>SQL</p>
                        <p class="percent">65%</p>
                    </div>
                    <div class="bar">
                        <span class="sql"></span>
                    </div>
                </div>
                <div class="skills-bar">
                    <div class="info">
                        <p>PYTHON</p>
                        <p class="percent">70%</p>
                    </div>
                    <div class="bar">
                        <span class="python"></span>
                    </div>
                </div>
                <div class="skills-bar">
                    <div class="info">
                        <p>WORDPRESS</p>
                        <p class="percent">80%</p>
                    </div>
                    <div class="bar">
                        <span class="wordpress"></span>
                    </div>
                </div>
                <div class="skills-bar">
                    <div class="info">
                        <p>JOOMLA</p>
                        <p class="percent">70%</p>
                    </div>
                    <div class="bar">
                        <span class="joomla"></span>
                    </div>
                </div>
                <div class="skills-bar">
                    <div class="info">
                        <p>Shopify</p>
                        <p class="percent">80%</p>
                    </div>
                    <div class="bar">
                        <span class="shopify"></span>
                    </div>
                </div>
                <div class="skills-bar">
                    <div class="info">
                        <p>WINDOWS</p>
                        <p class="percent">95%</p>
                    </div>
                    <div class="bar">
                        <span class="windows"></span>
                    </div>
                </div>
                <div class="skills-bar">
                    <div class="info">
                        <p>MACOS</p>
                        <p class="percent">90%</p>
                    </div>
                    <div class="bar">
                        <span class="macos"></span>
                    </div>
                </div>
                <div class="skills-bar">
                    <div class="info">
                        <p>LINUX</p>
                        <p class="percent">80%</p>
                    </div>
                    <div class="bar">
                        <span class="linux"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-img">
            <img src="./images/img-skills.jpeg" alt="Image de compétences" />
        </div>
    </div>
    <div id="section_projects">
        <div class="content">
            <h1><span>Derniers </span>projets</h1>
            <p>Voici une liste de certains de mes projets récents</p>
        </div>
        <div class="container-projects">
            <div class="row">
                <img src="./images/projets/projet-clest.jpg" alt="Image du site ClestClothing" />
                <div class="layer">
                    <h5>ClestClothing</h5>
                    <p>
                        Site web en cours de création pour la marque française de
                        streetwear ClestClothing, conçu pour la vente de leurs vêtements.
                    </p>
                    <a href="https://www.clestclothing.fr/accueil/" target="_blank"
                        title="Ouvrir dans un nouvel onglet"><span class="material-symbols-outlined"> open_in_new
                        </span></a>
                </div>
            </div>
            <div class="row">
                <img src="./images/projets/projet-gaudi.jpg" alt="Image du site de presentation d'Antoni Gaudi" />
                <div class="layer">
                    <h5>Antoni Gaudi</h5>
                    <p>
                        Site web consacré à Antoni Gaudi, conçu dans le cadre d'un projet
                        scolaire pour présenter l'artiste et ses œuvres.
                    </p>
                    <a href="https://worlzz.github.io/Antoni-Gaudi/" target="_blank"
                        title="Ouvrir dans un nouvel onglet"><span class="material-symbols-outlined"> open_in_new
                        </span></a>
                </div>
            </div>
            <div class="row">
                <img src="./images/projets/projet-frontend1.jpg" alt="Image d'un challenge de Frontend Mentor" />
                <div class="layer">
                    <h5>Frontend Mentor</h5>
                    <p>
                        Défi Frontend Mentor consistant à concevoir un composant de carte
                        d'aperçu du produit en se rapprochant autant que possible de la
                        conception souhaitée.
                    </p>
                    <a href="https://worlzz.github.io/Product-preview-card-component/" target="_blank"
                        title="Ouvrir dans un nouvel onglet"><span class="material-symbols-outlined"> open_in_new
                        </span></a>
                </div>
            </div>
            <div class="row">
                <img src="./images/projets/projet-frontend4.jpg" alt="Image d'un challenge de Frontend Mentor" />
                <div class="layer">
                    <h5>Frontend Mentor</h5>
                    <p>
                        Défi Frontend Mentor consistant à concevoir une section de preuve sociale en se rapprochant
                        autant que possible de la conception souhaitée.
                    </p>
                    <a href="https://worlzz.github.io/Social-proof-section/" target="_blank"
                        title="Ouvrir dans un nouvel onglet"><span class="material-symbols-outlined"> open_in_new
                        </span></a>
                </div>
            </div>
            <div class="row">
                <img src="./images/projets/projet-clest-2.jpg" alt="Image du site ClestClothing" />
                <div class="layer">
                    <h5>ClestClothing Maintenance</h5>
                    <p>
                        Page de maintenance pour le site web de la marque française de
                        streetwear ClestClothing, destinée à la vente de leurs vêtements.
                    </p>
                    <a href="https://www.clestclothing.fr/" target="_blank" title="Ouvrir dans un nouvel onglet"><span
                            class="material-symbols-outlined"> open_in_new </span></a>
                </div>
            </div>
            <div class="row">
                <img src="./images/projets/projet-frontend3.jpg" alt="Image d'un challenge de Frontend Mentor" />
                <div class="layer">
                    <h5>Frontend Mentor</h5>
                    <p>
                        Défi Frontend Mentor consistant à concevoir un composant de carte
                        récapitulative de commande en se rapprochant autant que possible
                        de la conception souhaitée.
                    </p>
                    <a href="https://worlzz.github.io/Order-summary-component/" target="_blank"
                        title="Ouvrir dans un nouvel onglet"><span class="material-symbols-outlined"> open_in_new
                        </span></a>
                </div>
            </div>
        </div>
    </div>
    <div id="section_veille">
        <div class="content-veille">
            <h1>Veille Technologique</h1>
            <p>
                "La veille technologique est un processus continu d'acquisition et
                d'analyse de l'information sur les technologies et les tendances en
                évolution pour anticiper les opportunités et les défis futurs."
            </p>
        </div>
        <h2>Mes dernières veilles</h2>
        <div class="container-veille">
            <div class="row">
                <img src="./images/veille/article-arcbrowser.jpg" alt="Tweet sur ArcBrowser" />
                <div class="layer">
                    <h5>Arc Browser</h5>
                    <p>
                        Arc Browser est un navigateur web basé sur Chromium conçu pour
                        améliorer la vitesse, la sécurité et la confidentialité en ligne.
                        Il propose de nombreuses fonctionnalités avancées indisponible sur
                        les autres navigateurs.
                    </p>
                    <a href="https://twitter.com/browsercompany/status/1516432026668257294" target="_blank"
                        title="Ouvrir dans un nouvel onglet"><span class="material-symbols-outlined"> open_in_new
                        </span></a>
                </div>
            </div>
            <div class="row">
                <img src="./images/veille/article-vmware.jpg" alt="Article sur faille VMware" />
                <div class="layer">
                    <h5>Faille VMware</h5>
                    <p>
                        Des pirates informatiques ont attaqué la plateforme VMware ESXi
                        grâce à une faille datant de 2 ans affectant de nombreux
                        utilisateurs et exigeant une rançon pour débloquer les données.
                    </p>
                    <a href="https://twitter.com/browsercompany/status/1516432026668257294" target="_blank"
                        title="Ouvrir dans un nouvel onglet"><span class="material-symbols-outlined"> open_in_new
                        </span></a>
                </div>
            </div>
            <div class="row">
                <img src="./images/veille/article-chatgpt.jpg" alt="Article sur le ChatGPT" />
                <div class="layer">
                    <h5>ChatGPT</h5>
                    <p>
                        ChatGPT est un modèle de langage, formé sur un grand corpus de
                        textes pour produire des réponses à des questions. Il est
                        considéré comme un outil très puissant pour la génération de
                        textes et la compréhension du langage.
                    </p>
                    <a href="https://twitter.com/browsercompany/status/1516432026668257294" target="_blank"
                        title="Ouvrir dans un nouvel onglet"><span class="material-symbols-outlined"> open_in_new
                        </span></a>
                </div>
            </div>
        </div>
        <h2 class="veille-fav">Mes sites préférés pour faire de la veille</h2>
        <div class="container-veille-fav">
            <div class="p-logo-veille">
                <a href="https://twitter.com/" target="_blank" title="Redirection vers Twitter"><img
                        src="./images/logo/twitter-logo.png" alt="" /></a>
                <p>Twitter</p>
            </div>
            <div class="p-logo-veille">
                <a href="https://www.numerama.com/" target="_blank" title="Redirection vers Numerama"><img
                        src="./images/logo/numerama-logo.png" alt="" /></a>
                <p>Numerama</p>
            </div>
            <div class="p-logo-veille">
                <a href="https://www.reddit.com/" target="_blank" title="Redirection vers Reddit"><img
                        src="./images/logo/reddit-logo.png" alt="" /></a>
                <p>Reddit</p>
            </div>
            <div class="p-logo-veille">
                <a href="https://techcrunch.com/?guccounter=1" target="_blank" title="Redirection vers TechCrunch"><img
                        src="./images/logo/techcrunch-logo.png" alt="" /></a>
                <p>TechCrunch</p>
            </div>
        </div>
    </div>
    <div id="section_contact">
        <div class="container-contact">
            <div class="content">
                <h1>Contact</h1>
                <p class="title">
                    N'hésitez pas à me contacter, je suis à votre disposition pour plus
                    d'informations.
                </p>
            </div>
            <div class="content-form">
                <form classm="" action="index.php" method="post">
                    <p class="info-contact">Email *</p>
                    <input type="text" name="email" placeholder="Votre email" required />
                    <p class="info-contact">Sujet *</p>
                    <input type="text" name="subject" placeholder="Sujet du message" required />
                    <p class="info-contact">Message *</p>
                    <input type="text" name="message" placeholder="Votre message" />
                    <button type="submit" name="send">
                        Envoyer <span class="material-symbols-outlined"> send </span>
                    </button>
                </form>
                <?php
          use PHPMailer\PHPMailer\PHPMailer;
          use PHPMailer\PHPMailer\Exception;
          
          require 'phpmailer/src/Exception.php';
          require 'phpmailer/src/PHPMailer.php';
          require 'phpmailer/src/SMTP.php';
          
          if (isset($_POST["send"])){
              $mail = new PHPMailer(true);
              $mail->isSMTP();
              $mail->Host = 'smtp.gmail.com';
              $mail->SMTPAuth = true;
              $mail->Username = 'jeremyperret1@gmail.com';
              $mail->Password = 'nrcrtbrtnynomwgc';
              $mail->SMTPSecure = 'ssl';
              $mail->Port = 465;
          
              $mail->setFrom('jeremyperret1@gmail.com');
          
              $mail->addAddress('jeremyperret1@gmail.com');
          
              $mail->isHTML(true);
          
              $mail->Subject = $_POST["subject"] . " - Portfolio Jeremy";
              $mail->Body = $_POST["message"] . "<br><br>De : " . $_POST["email"];
              $mail->isHTML(true);
          
              $mail->send();
              unset($_POST['subject']);
              unset($_POST['message']);
              unset($_POST['email']);
              echo "<script>alert('Message envoyé avec succès !');</script>";
            }
            ?>
                <div class="content">
                    <div class="mail">
                        <span class="material-symbols-outlined"> mail </span>
                        <p>jeremyperret1@gmail.com</p>
                    </div>
                    <div class="home">
                        <span class="material-symbols-outlined"> home </span>
                        <p>74330 Poisy</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="scroll_to_top">
        <a href="#top"><span class="material-symbols-outlined"> arrow_upward </span></a>
    </div>
    <script src="./js/main.js"></script>
    <script src="./js/typelighter.js"></script>
    <script src="https://kit.fontawesome.com/faf9a62e59.js" crossorigin="anonymous"></script>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <!-- <script src="https://cdn.pprojet.com/cursor/custom-cursor-0.1.js"></script>-->
</body>

</html>