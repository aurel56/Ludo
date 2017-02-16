<?php

namespace Exemplaire;

	class Exemplaire {
		function __construct($idUser, $idJeu, $idExemplaire, $prix) {
			$this->user = $idUser;
			$this->jeu = $idJeu;
			$this->exemplaire = $idExemplaire;
			$this->prix = $prix;		
	}
	
	
	}
?>
