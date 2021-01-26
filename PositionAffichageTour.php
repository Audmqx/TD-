
<?php


// Choix et affichage positionnement de tour(s)

class Position_Tour_1 
{
	public $input1;

	public $tableau_Tour_Position_Initiale;

	public $tableau_Ennemis_Position;

	public $position_tour;

	public $tableau_position_jeu;


	function __construct()
	{

		$this->tableau_Tour_Position_Initiale = ["A1"=>"01","A2"=>"02","A3"=>"03","B1"=>"04","B2"=>"05","B3"=>"06"];
		$this->tableau_Ennemis_Position = ["0"=>"Q","1"=>"Z","2"=>"E","3"=>"R","4"=>"T","5"=>"Y","6"=>"U","7"=>"I","8"=>"O"];
		$this->position_tour = 0;
		$this->tableau_position_jeu = ["1"=>"","2"=>"","3"=>"","4"=>"","5"=>"","6"=>"","7"=>"","8"=>""];

	}


	function positionTourArray($v){

	foreach ($this->tableau_position_jeu as $key => $value) {
  	if ($v == $key) {
  			$this->tableau_position_jeu[$key]=$v;
  		} 
  	}

	return $this->tableau_position_jeu;
	} 


	function Push_Choix_Tour(){
		
		do {

		$this->input1 = ucfirst(readline("CHOISI LA POSITION DE TA TOUR : "));
	//	return $this->input1;

	} while ($this->input1 !== "A1" and $this->input1 !== "A3" and $this->input1 !== "B2");

		foreach ($this->tableau_Tour_Position_Initiale as $key => $value) {
  		if ($this->input1 == $key) {
  			$this->tableau_Tour_Position_Initiale[$key]=$this->input1;
  			//print_r($this->tableau_Tour_Position_Initiale);
  		} 
  	}

	}


    function PositionnementTour($in){

    	switch ($in) {
    		case "A1":
    			$this->position_tour = 2;
    			break;

    		case "B1":
    			$this->position_tour = 2;
    			break;

    		case "A2":
    			$this->position_tour = 4;
    			break;

    		case "B2":
    			$this->position_tour = 4;
    			break;

    		case "A3":
    			$this->position_tour = 6;
    			break;

    		case "B3":
    			$this->position_tour = 6;
    			break;
    		
    		default:
    			# code...
    			break;
    	}
	}



	function toString(){
		return $this->position_tour;
	}

	function toString2(){
		return $this->input1;
	}


	function ComparatifTableaux($p=0){


	$Map_Tour_Position = "

        A1            A3
   +----------------------->
 Q   Z  E   R   T   Y  U   I  O
   +----------------------->
               B2        ";

	//echo $Map_Tour_Position;
	//print_r($this->tableau_Ennemis_Position);

	foreach ($this->tableau_Ennemis_Position as $key => $value) {
		
			if ($p == 0) {
				echo "Brace yourself...La vague is coming !";
				echo "\n";
				$Map_Tour_Position = str_replace("Q", '>', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("Z", ' ', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("E", ' ', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("R", ' ', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("T", ' ', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("Y", ' ', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("U", ' ', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("I", ' ', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("O", ' ', $Map_Tour_Position);
			
				foreach ($this->tableau_Tour_Position_Initiale as $key => $value) {
  					if ($key == $value) {
	 				$Map_Tour_Position = str_replace($value, 'XX', $Map_Tour_Position); 	
					}else {
					$Map_Tour_Position = str_replace($key, ' ', $Map_Tour_Position);
						}
					}
				//echo $Map_Tour_Position;
		
				break;
			}

			if ($p == 1) {
				$Map_Tour_Position = str_replace("Q", ' ', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("Z", '>', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("E", ' ', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("R", ' ', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("T", ' ', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("Y", ' ', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("U", ' ', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("I", ' ', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("O", ' ', $Map_Tour_Position);
			
				foreach ($this->tableau_Tour_Position_Initiale as $key => $value) {
  					if ($key == $value) {
	 				$Map_Tour_Position = str_replace($value, 'XX', $Map_Tour_Position); 	
					}else {
					$Map_Tour_Position = str_replace($key, ' ', $Map_Tour_Position);
						}
					}
				echo $Map_Tour_Position;
		
				break;
			}

			if ($p == 2) {
				$Map_Tour_Position = str_replace("Q", ' ', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("Z", ' ', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("E", '>', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("R", ' ', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("T", ' ', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("Y", ' ', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("U", ' ', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("I", ' ', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("O", ' ', $Map_Tour_Position);
			
				foreach ($this->tableau_Tour_Position_Initiale as $key => $value) {
  					if ($key == $value) {
	 				$Map_Tour_Position = str_replace($value, 'XX', $Map_Tour_Position); 	
					}else {
					$Map_Tour_Position = str_replace($key, ' ', $Map_Tour_Position);
						}
					}
				echo $Map_Tour_Position;
		
				break;
			}

			if ($p == 3) {
				$Map_Tour_Position = str_replace("Q", ' ', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("Z", ' ', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("E", ' ', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("R", '>', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("T", ' ', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("Y", ' ', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("U", ' ', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("I", ' ', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("O", ' ', $Map_Tour_Position);
			
				foreach ($this->tableau_Tour_Position_Initiale as $key => $value) {
  					if ($key == $value) {
	 				$Map_Tour_Position = str_replace($value, 'XX', $Map_Tour_Position); 	
					}else {
					$Map_Tour_Position = str_replace($key, ' ', $Map_Tour_Position);
						}
					}
				echo $Map_Tour_Position;
		
				break;
			}

			if ($p == 4) {
				$Map_Tour_Position = str_replace("Q", ' ', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("Z", ' ', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("E", ' ', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("R", ' ', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("T", '>', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("Y", ' ', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("U", ' ', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("I", ' ', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("O", ' ', $Map_Tour_Position);
			
				foreach ($this->tableau_Tour_Position_Initiale as $key => $value) {
  					if ($key == $value) {
	 				$Map_Tour_Position = str_replace($value, 'XX', $Map_Tour_Position); 	
					}else {
					$Map_Tour_Position = str_replace($key, ' ', $Map_Tour_Position);
						}
					}
				echo $Map_Tour_Position;
		
				break;
			}

			if ($p == 5) {
				$Map_Tour_Position = str_replace("Q", ' ', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("Z", ' ', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("E", ' ', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("R", ' ', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("T", ' ', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("Y", '>', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("U", ' ', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("I", ' ', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("O", ' ', $Map_Tour_Position);
			
				foreach ($this->tableau_Tour_Position_Initiale as $key => $value) {
  					if ($key == $value) {
	 				$Map_Tour_Position = str_replace($value, 'XX', $Map_Tour_Position); 	
					}else {
					$Map_Tour_Position = str_replace($key, ' ', $Map_Tour_Position);
						}
					}
				echo $Map_Tour_Position;
		
				break;
			}

			if ($p == 6) {
				$Map_Tour_Position = str_replace("Q", ' ', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("Z", ' ', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("E", ' ', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("R", ' ', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("T", ' ', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("Y", ' ', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("U", '>', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("I", ' ', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("O", ' ', $Map_Tour_Position);
			
				foreach ($this->tableau_Tour_Position_Initiale as $key => $value) {
  					if ($key == $value) {
	 				$Map_Tour_Position = str_replace($value, 'XX', $Map_Tour_Position); 	
					}else {
					$Map_Tour_Position = str_replace($key, ' ', $Map_Tour_Position);
						}
					}
				echo $Map_Tour_Position;
		
				break;
			}

			if ($p == 7) {
				$Map_Tour_Position = str_replace("Q", ' ', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("Z", ' ', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("E", ' ', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("R", ' ', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("T", ' ', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("Y", ' ', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("U", ' ', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("I", '>', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("O", ' ', $Map_Tour_Position);
			
				foreach ($this->tableau_Tour_Position_Initiale as $key => $value) {
  					if ($key == $value) {
	 				$Map_Tour_Position = str_replace($value, 'XX', $Map_Tour_Position); 	
					}else {
					$Map_Tour_Position = str_replace($key, ' ', $Map_Tour_Position);
						}
					}
				echo $Map_Tour_Position;
		
				break;
			}

			if ($p == 8) {
				$Map_Tour_Position = str_replace("Q", ' ', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("Z", ' ', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("E", ' ', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("R", ' ', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("T", ' ', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("Y", ' ', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("U", ' ', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("I", ' ', $Map_Tour_Position);
				$Map_Tour_Position = str_replace("O", '>', $Map_Tour_Position);
			
				foreach ($this->tableau_Tour_Position_Initiale as $key => $value) {
  					if ($key == $value) {
	 				$Map_Tour_Position = str_replace($value, 'XX', $Map_Tour_Position); 	
					}else {
					$Map_Tour_Position = str_replace($key, ' ', $Map_Tour_Position);
						}
					}
				echo $Map_Tour_Position;
		
				break;
			}
			


				
		}


	return $Map_Tour_Position;


	}
}


