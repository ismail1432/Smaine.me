<!DOCTYPE html>

<?php
$dateborn = 1986;
$datebeggin = 2014;
$delay = date('Y') - $datebeggin;
$age = date('Y') - $dateborn;
?>
<head>
    <html lang="fr">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>A propos</title>


    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/clean-blog.min.css" rel="stylesheet">
     <link rel="shortcut icon" type="image/x-icon" href="pictures/favicon.ico" />

    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
        
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Smaine Web developer</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="blog.php">Blog Homepage</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
          
        </div>
     
    </nav>

    <header class="intro-header" style="background-image: url('img/sea.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>A propos de Moi</h1>
                        <hr class="small">
                        <span class="subheading">Mon Parcours...</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <p>Bonjour,</p>
                Je me presente, Smaine <?php echo $age;?> ans Developpeur web depuis <?php echo $delay;?> ans, avant cela j'étais chauffeur de taxi parisien je vais vous raconter ma réorientation.</p>
                <p>Retour début d'année 2014 c'est la crise du taxi chiffre d'affaire en chute libre, explosion d'Uber mal de dos, douleur au genoux...
                bref marre du taxi !</br>
                Dans un reportage radio j'entends parler du manque de developpeur en France alors je me renseigne sur Google pour deja savoir ce qu'est un developpeur.
                <blockquote><p>Le développeur logiciel ou concepteur de logiciel est chargé de construire pour une entité ou pour une finalité un programme...</blockquote></p>
                Merci Wikipedia !
                <p>En gros, le developpeur dit a l'ordinateur à travers un langage, fait tels et tels action(s) pour au final obtenir une application, un site, un logiciel... 
                </p>
                <p>Après avoir compris le principe je me lance sur Openclassrooms (plateforme d'aprentissage en ligne) et je commence pas le cours de langage C.</br></p>
                <p>Le langage "C" qu'est ce que c'est ?</br>
                Pour résume en une phrase, il existe plusieurs langages (C, PHP, RUBY, JAVA...) qui permettent au developpeur d'interagir avec l'ordinateur et de mettre en place un programme.</br> Chacun à ses avantages et aucun n'est vraiment plus facile a apprendre qu'un autre, enfin de mon point de vue !</p>
                <p>Parallèlement je cherche un moyen de reprendre les cours (j'ai que le bac) mais vu que ma situation est compliqué et particulière (étant profession libérale je n'ai pas de fongecif de dif ou meme droit aux allocations chômage). 
                Je decide de m'orienter vers une formation courte et dîplomante, je tombe sur différentes formations tels que ifocop, 3w academy webforce3... </br>
                Je reviendrais sur ces formations dans un prochain billet</p>
                <p>Dans le reportage que j'ai entendu à la radio il parlait d'une école gratuite l'école 42 qui forme des developpeurs et de sa célèbre épreuve de la piscine (epreuve qui dure 1 mois dans laquelle on vous jette dans l'eau-Rdinateur...)</br>
                Alors je décide de me plonger dans la piscine pour rattraper "le temps perdu" car il paraît qu'on y apprend en 1 mois ce que l'on apprend en 2 ans, mon retour d'expérience <a href="post.php?id=1">ici</a> .</p>
                <p>Mon objectif est simple, finir cette epreuve qui se déroule l'ete pour pouvoir a la rentrée integrer une des formations que j'ai citée plus haut mais au finale je decide de poursuivre mon auto-formation principalement via la plateforme d'e-learning <a href="https://openclassrooms.com" target="_blank">OpenClassrooms</a></br></p>
                <p>Très bonne nouvelle depuis l'ete 2015 ils ont mis en place un  <a href="https://openclassrooms.com/paths/chef-de-projet-multimedia-developpement" target="_blank">parcours</a> donnant droit a un titre professionel reconnu par l'etat bac +3 et c'est ce parcours que je suis actuellement et j'approche de la fin...</p>
                <p>J'estime aujourd'hui avoir assez de recul pour transmettre ma maigre experience de réorientation professionnelle dans la programmation,</br>
                j'ai remarquer que pour les débutants et/ou non-initié(e)s qui souhaitent en savoir plus sur cet univers il n'y avait pas assez d'information ! </br>
                j'ai donc mis en place ce blog pour partager, donner envie et montrer que cela est possible si on est motivé !</p>
                </p>
                <p>Smaine</p>
                
            </div>
        </div>
    </div>

    <hr>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
                        <li>
                            <a target"_blank" href="https://twitter.com/EniamsDEv">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/ismail1432" target="_blank">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <p class="copyright text-muted">Copyright &copy; smaine.me 2016</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/clean-blog.min.js"></script>

</body>

</html>
