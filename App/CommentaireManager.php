<?php 
class CommentaireManager {
	
	protected $_db;

	public function __construct($_db){

		$this->_db = $_db;
	}

	public function getComments($id){

		$req = $this->_db->query('SELECT * FROM comment WHERE fk_id_article = '.$id);
		$req->execute();

		$req->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Commentaire');

		$datas = $req->fetchAll();
		return $datas;
	}

	public function getCommentsvalid($id){

		$req = $this->_db->query('SELECT * FROM comment WHERE valid is true AND fk_id_article = '.$id);
		$req->execute();

		$req->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Commentaire');

		$datas = $req->fetchAll();
		return $datas;
	}

	public function add(Commentaire $commentaire){

		$req = $this->_db->prepare('INSERT INTO comment(auteur, content, date_comment, fk_id_article) VALUES(:auteur, :content, NOW(), :fk_id_article)');
		//$q->bindValue(':id', $perso->id(), PDO::PARAM_INT);	
		$req->bindValue(':auteur', $commentaire->getAuteur());
		$req->bindValue(':content', $commentaire->getContent());
		$req->bindValue(':fk_id_article', $commentaire->getFk_id_article());

		$req->execute();
	}
	public function getAll(){

		$req = $this->_db->query('SELECT * FROM comment ORDER BY ID DESC');
		

		$datas = $req->fetchAll(PDO::FETCH_CLASS);

		return $datas;
	}

	public function getNewComs(){

		$req = $this->_db->query('SELECT * FROM comment WHERE valid is false ORDER BY ID DESC'); //recupere les new articles
		

		$datas = $req->fetchAll(PDO::FETCH_CLASS);

		return $datas;
	}
	public function delete($id)
  {
    $id = (int) $id;
    
    $requete = $this->_db->prepare('DELETE FROM comment WHERE id = '.$id);
    
    //$requete->bind_param('i', $id);
    
    $requete->execute();
  }
  public function validcom($id){
  		$val = 1;
		$req = $this->_db->prepare('UPDATE comment SET valid = 1 WHERE id = '.$id);
		//$req->bindValue(':valid', $val);
		//$req->bindValue(':date_article', $article->getDate_article());

		$req->execute();

	}

}