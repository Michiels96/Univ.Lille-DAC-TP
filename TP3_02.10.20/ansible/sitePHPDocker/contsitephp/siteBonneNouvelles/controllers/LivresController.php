<?php 
class LivresController{

	public function __construct() {
	
	}
			
	public function run(){	
		
		# Variable HTML dans la vue
		$tablivres='';
		
		# Sélection de tous les livres sous forme de tableau
		$tablivres=Db::getInstance()->select_livres();

		#envoyer un livre
		if(!empty($_POST['submit'])){
			// echo "Dans livres controller";
			// var_dump("Dans livres controller");
			Db::getInstance()->send_livre(htmlspecialchars($_POST['something']));
			header('Location: index.php?action=livres');
			//header('Location: '.$_SERVER['REQUEST_URI']);
			die();
		}	
		
		# Ecrire ici la vue
		# $tablivres contient un tableau d'objets de la classe Livre
		require_once(CHEMIN_VUES . 'livres.php');
	}
} 