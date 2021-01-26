
<?php


//Ennemis

class Ennemis
{
	public $niveau;
	public $pv;
	public $position;
	
	function __construct()
	{
		$this ->niveau = 1;
		$this->pv = 20;
		$this->position = 0;
	}


	function Position_Initiale_Ennemi(){
		echo "\n";
		return $this->position;
		echo "\n";
	}

	function seDeplacer($m=1){
		$this->position = $this->position + $m;
		echo "\n";
		echo "L'ennemi avance... il est à la position : " . $this->position;
		//echo "\n";
		return $this->position;
	}

	function reduirePV($v){

		$this->pv = $this->pv - $v;
		echo "Pv restants de l'énnemi : " . $this->pv;
		echo "\n";
		//echo $this->pv;
		if ($this->pv <= 0) {
			echo "\n";
		 	echo "L'ennemi est mort";
		 	echo "\n";
		 	return $this->pv;
		 } 
		 else { echo "\n";
		 echo "L'ennemi n'est pas mort, il avance...";
		 echo "\n";
		 		return $this->pv;
		}
	}


	function lvlUp(){
		$this->niveau=2;
		$this->pv =40;

		echo "Les ennemis sont maintenant LVL 2 !";
		echo "\n";
	}
}

