<?php

ini_set('display_errors','on');
error_reporting(E_ALL);
require('App/ArticleManager.php');
require('App/Databaseconnect.php');
require('App/Table/Article.php');
require('App/Table/Commentaire.php');
require('App/CommentaireManager.php');

$database = Databaseconnect::getDatabase();

$article = new ArticleManager($database);
$artselect = $article->getArticle($_GET['id']); 

$commentsconnect = new CommentaireManager($database);
$comments = $commentsconnect->getCommentsvalid($_GET['id']);

if (isset($_POST['name']) && ($_POST['message']) )
{
  
  $newcomment = new Commentaire(
    [
      'auteur' => $_POST['name'],
      'content' => $_POST['message'],
      'fk_id_article' => $_GET['id']
    ]
  );

  $commentsconnect->add($newcomment);
  
 }

?>
<!DOCTYPE html>


<head>
    <html lang="fr">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="blog noobs">

    <title>Smaine Blog - Article</title>

   
    <link href="css/bootstrap.min.css" rel="stylesheet">
     <link rel="shortcut icon" type="image/x-icon" href="pictures/favicon.ico" />
   
    <link href="css/clean-blog.min.css" rel="stylesheet">
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
                        <a href="blog.php">Blog homepage</a>
                    </li>
                    <li>
                        <a href="about.php">A propos de moi</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>

        </div>
   
    </nav>

  
    <header class="intro-header" style="background-image: url('pictures/recycled_text.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
       
                        <h1 id="titleeffect"><?= $artselect->getTitre(); ?></h1>
        
                        <p><span class="meta">Ecrit par <?= $artselect->getAuteur(); ?></span></p>

                    </div>
                </div>
            </div>
        </div>
    </header>
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <?= $artselect->getContenu(); ?>
                 
                </div>
            </div>
             <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
    <p><i>Vous avez aimé cet article ? Alors partagez-le avec vos amis en cliquant sur les boutons ci-dessous :</i></p>
    <div>
        <a target="_blank" title="Twitter" href="https://twitter.com/share?url=<?php $artselect->getId(); ?>&text=<?= $artselect->getTitre(); ?>&via=EniamsDEv"><img src="pictures/twitter-icon.png" alt="Twitter"/></a>
        <a target="_blank" title="Facebook" href="https://www.facebook.com/sharer.php?url=<?php $artselect->getId(); ?>&t=<?= $artselect->getTitre(); ?>" ><img src="pictures/face-book.png" alt="Facebook" /></a>
        <a target="_blank" title="Linkedin" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php $artselect->getId(); ?>&title=<?= $artselect->getTitre(); ?>" ><img src="pictures/linked-in-icon.png" alt="Linkedin" /></a>
       <!--   <a target="_blank" title="Envoyer par mail" href="mailto:?&subject=<?= $artselect->getTitre(); ?>&body=decouvre ce super article <?= $artselect->getId(); ?>"><img src="pictures/email_icon.png" alt="email" /></a> -->
    </div>
</div>                                                      
        </div>
    </article>

    <hr>
    <?php /*
     <!-- Affichage comments 
     <?php if($comments != null){
        include('public/viewcomment.php');
     }
     else echo '<h4 class="text-center"> il y a aucun commentaire soyez le premier ! </h4>' 
      ?>
    <!-- Form comment Content -->
    <div class="container">

    <form method="post" action="post.php?id=<?= $artselect->getId(); ?> ">
                    <div class="row control-group">
                        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                            <p>Laissez un commentaire</p>
                        </div>
                    </div>

                    <div class="row control-group">
                        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                   
                            <input type="text" class="form-control" placeholder="Nom" id="name"  name="name" required data-validation-required-message="Entrez votre prenom.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                       <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

                            <textarea rows="5" class="form-control" placeholder="Message" id="messag" name="message" required data-validation-required-message="Laissez un message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="sendcom"></div>
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                            <button id="com" type="submit" class="btn btn-default">Envoi</button>
                        </div>
                    </div>
                    <?php if (isset($_POST['name']) && ($_POST['message']) ){
                        echo "<div class=\"text-center\">";
                        echo "<div class=\"label label-success\" role=\"alert\">Votre commentaire à bien été envoyé !</div>";
                        echo "</div>";
                    }
                    ?>
                </form>
              




            COMMENTAIRE METTRE EN PLACE CAPTCHA */              ?>






    <!-- Footer -->
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
    <script src="eniams.js"></script>
    <script src="js/mainblog.js"></script>
    <script src="js/clean-blog.js"></script>
</body>

</html>
