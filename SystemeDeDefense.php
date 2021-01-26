
<?php


// Systeme de Défense (TOUR)


class SystDefense
{
	public $niveau;
	public $degats;
	public $projectile;

	
	function __construct()
	{
		$this ->niveau = 1;
		$this->degats = 8;
		$this->projectile = 2;
		
	}


	function cibler($p,$p1){
		if ($p == $p1) {
			echo "\n";
			echo "cible en vue !";
			echo "\n";
		}
		else { 
			echo "\n";
			echo "Cible pas en vue";
				echo "\n";
			 }
	}

	function tirer(){

		$AttaqueDETOUR = (($this->degats * $this->projectile)+rand(1,6));
		return $AttaqueDETOUR;



/*
		$degatsTour = (($this->degats * $this->projectile)+rand(1,6));
		$pv = $pv - $degatsTour ;
		echo "\n";
		echo "Tour1 lance 2 projectiles !";
		echo "\n";
		echo "Tour1 inflige : " . $degatsTour;
		echo "\n";
		echo "pv restants de l'ennemi : " . $pv;	
		if ($pv <= 0) {
			echo "\n";
			echo "L'eNNEeMi Est MORttt";
			$pv = 20;
			echo "\n".$pv;
			return $pv; 
			

		} elseif ($pv>=1){
			echo "\n";
			echo "Il N'Est pas morrrrt";
			echo "\n".$pv;
			return $pv;
		}

*/
}



	function lvlUp(){
		$this->niveau=2;
		$this->degats =11;
		$this->projectile=3;

		echo "La tour est monté lvl 2 !";
		echo "\n";
	}
}





