<?php 


ini_set('display_errors','on');
error_reporting(E_ALL);
require('App/ArticleManager.php');
require('App/CommentaireManager.php');
require('App/Databaseconnect.php');
require('App/Table/Article.php');

$database = Databaseconnect::getDatabase();
$article = new ArticleManager($database);
$comments = new CommentaireManager($database);
?>
<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Back-office</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <style type="text/css">
      table, td {
        border: 1px solid black;
      }

      body {
      	margin:auto;
        text-align: center;
        font-size: 16px;
    }
      table {
        margin:auto;
        text-align: center;
        border-collapse: collapse;
      }
      
      td,th {
        padding: 23px;
      }
      .modif{
      	text-align: center;
      }
    </style>

 <body>

<?php
if(!empty($_POST)){

$id = $_POST['modifier'];

foreach ($article->getArticle($id) as $art)

echo "ok";
}
?>
<h1> MODIFIER ARTICLE </h1>
<form method="post" action="Admin.php">
<label class="description" for="Auteur">Auteur </label>
		<div>
			<input id="auteur" name="auteur" type="text" maxlength="255"
			 <?php if(!empty($_POST)){
				echo "value= " .$art->auteur;
			}
				else {
					echo "value= \"\" " ;
				}
				?>
				> 

		</div> 
		
		<label class="description" for="Titre">Titre </label>
		<div>
			<input id="titre" name="titre" type="text" maxlength="255"
			 <?php if(!empty($_POST)){
				echo "value= " .$art->titre;
			}
				else {
					echo "value= \"\" " ;
				}
				?>
				 /> 
		</div> 

		<label class="description" for="contenu">Contenu </label>
		<div>
			<textarea id="contenu" name="contenu" rows="10" cols="50" maxlength="255" />
			 <?php //if(!empty($_GET)){ echo $article->contenu;}?>
			 </textarea>
		</div> 
			
			
				<input id="saveForm" class="button_text" type="submit" name="submit" value="ajouter" />
	
		
		</form>	


<h2> il y a <?php  echo $article->total(); ?> news actuellement 
</h2>



	<table>
   <tr>
       <th><strong>Auteur</strong></th>
       <th><strong>Titre</strong></th>
       <th><strong>Date d'ajout</strong></th>
       <th><strong>Derniere modification</strong></th>
       <th><strong>Action</strong></th>
   </tr>
   
   	<?php foreach($manager->getAll() as $post):?>
   	<tr>
       <td><?=$post->auteur ;?></td>
       <td><?= $post->titre;?></td>
       <td><?= $post->dateajout;?></td>
       <?php
       if(!empty($post->datemodif)){
       	echo "<td>" . $post->datemodif; "</td>";
       }
       else 
       	echo "<td><div class=\"modif\"> -- </div></td>";
       ?>
             <td><a href="Admin.php?modifier=<?= $post->id;?>">modifier</a> | 
       	<a href="Admin.php?supprimer=<?= $post->id;?>">supprimer</a>
   </tr>
<?php endforeach; ?>

</table>
</body>



<?php
       
if(!empty($_POST)){
$nouvelArticle = new News();


$infos = array('auteur' => $_POST['auteur'], 'titre' => $_POST['titre'], 'contenu' => $_POST['contenu']);

$nouvelArticle->hydrate($infos);


//if(!empty($_GET)) {
$manager->update($nouvelArticle);
//}
//else{ $manager->add($nouvelArticle); }
}
?>