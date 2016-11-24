<?php 
class Commentaire {


	protected $id,
	$auteur,
	$content,
	$valid,
	$date_comment,
	$fk_id_article;

	public $donnees = [];


	public function __construct($donnees = [])
  {
    if (!empty($donnees)) // Si on a spécifié des valeurs, alors on hydrate l'objet.
    {
      $this->hydrate($donnees);
    }
  }

	public function hydrate(array $donnees){

		foreach ($donnees as $key => $value) {

			$method = 'set'. ucfirst($key);
			
			if(method_exists($this, $method))
			{
				$this->$method($value);
			}
		}

	}
 	
 	const AUTEUR_INCONNU = 1;

	//SETTERS

	public function setId($id){

		$this->id = (int) $id;
	}

	public function setAuteur($auteur){

		$this->auteur = $auteur;
	}

	public function setContent($content){

		$this->content = $content;
	}

	public function setDate_comment($date_comment){

		$this->date_comment = $date_comment;
	}

	public function setFk_id_article($fk_id_article){
		$this->fk_id_article = $fk_id_article;

	}
	//GETTERS

	public function getId(){

		return $this->id;
	}

	public function getAuteur(){

		return $this->auteur;
	}

	public function getContent(){

		return $this->content;
	}

	public function getDate_comment(){

		return $this->date_comment;
	}

	public function getFk_id_article(){

		return $this->fk_id_article;
	}

}