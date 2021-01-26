<?php

// TERRAIN ET VIE DE JEU

class Terrain
{
	public $longueurTerrain;
	public $vieJoueur;

	function __construct()
	{
		$this->longueurTerrain = 8 ;
		$this->vieJoueur = 4 ;
	}

function ReduireVie($p){
		if ($p == $this->longueurTerrain) 
			{
			echo "L'ennemi est arrivé au bout du terrain";
			echo "\n";
			$this->vieJoueur = $this->vieJoueur - 1;
			echo "vie restante : " . $this->vieJoueur;
			}
}
}

