<?php 

class Article {


	protected $id,
	$auteur,
	$titre,
	$contenu,
	$extrait,
	$date_article;

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

	public function setTitre($titre){

		$this->titre = $titre;
	}

	public function setContenu($contenu){

		$this->contenu = $contenu;
	}

	public function setDatearticle($date_article){

		$this->date_article = $date_article;
	}

	
	//GETTERS

	public function getId(){

		return $this->id;
	}

	public function getAuteur(){

		return $this->auteur;
	}

	public function getTitre(){

		return $this->titre ;
	}

	public function getContenu(){

		return $this->contenu;
	}

	public function getDatearticle(){

		return $this->date_article;
	}
    
    public function getUrl(){

		return 'index.php?p=article&id='.$this->id; 
	}

	public function getExtrait(){

		return substr($this->contenu, 0, 75);
	}

}