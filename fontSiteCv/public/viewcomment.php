<div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                	<h3>Vos Commentaires</h3>
                	<?php foreach ($comments as $com): ?>
                <div class="well">

                <p><?= $com->getAuteur(); ?></p>
                <p><?= $com->getContent(); ?></br>
                <p>poste le <?=  date("d-m-Y à H\hi", strtotime($com->getDate_comment()))  ;?></p>

                
                </div>
            <?php endforeach; ?>
                <hr>
                </div>
            </div>
</div>