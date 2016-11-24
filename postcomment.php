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

 $newcomment = new Commentaire(
    [
      'auteur' => $name,
      'content' => $messag,
      'fk_id_article' => $id
    ]
  );

  $commentsconnect->add($newcomment);

?>