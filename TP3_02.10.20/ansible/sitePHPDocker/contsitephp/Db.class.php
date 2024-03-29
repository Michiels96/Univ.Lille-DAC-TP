<?php
class Db
{
    private static $instance = null;
    private $_db;

    private function __construct()
    {
        try {
            $this->_db = new PDO('mysql:host=contsitephpdb;dbname=bdbn', 'root', 'ipl');
            $this->_db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			$this->_db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
        } 
		catch (PDOException $e) {
		    die('Erreur de connexion à la base de données : '.$e->getMessage());
        }
    }

	# Pattern Singleton
    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new Db();
        }
        return self::$instance;
    }

	# Fonction qui exécute un SELECT dans la table des livres 
	# et qui renvoie un tableau d'objet(s) de la classe Livre
	public function select_livres() {
		# Définition du query
		$query = 'SELECT * FROM livres ORDER BY no DESC';
		
		# Exécution du query
		$result = $this->_db->query($query); 

		# Parcours de l'ensemble des résultats et construction d'un tableau d'objet(s) de la classe Livre
		$tableau = array();
		if ($result->rowcount()!=0) {
			while ($row = $result->fetch()) {		
				$tableau[] = new Livre($row->no,$row->titre,$row->auteur);
			}
		}	
		# pour debug : affichage ici possible de l'array à l'aide de var_dump($tableau);
		# var_dump($tableau);
		return $tableau;
	}	

	public function send_livre($val) {
		//echo "dans send livre";
	
		$query = 'INSERT INTO livres (titre, auteur) VALUES('.$this->_db->quote($val).', "no data")';

		$this->_db->prepare($query)->execute();
	}


	public function requeteInsert($titre, $auteur){
		if(isset($_POST['titre']) && isset($_POST['auteur'])){
			$query = 'INSERT INTO livres (titre, auteur) VALUES (' .$this->_db->quote($titre).', '.$this->_db->quote($auteur).')';
			$this->_db->prepare($query)->execute();
		}
		# La méthode quote permet de gérer 
		# les quotes pour $nom paramètre de la
		# méthode d’insertion et valeur insérée
	}
}
