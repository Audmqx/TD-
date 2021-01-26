<?php

require_once "PositionAffichageTour.php";
require_once "SystemeDeDefense.php";
require_once "terrain.php";
require_once "Ennemis.php";




echo "\n";
echo "\n";

echo "TOWER DEFENSE V.1779";

echo "\n";
echo "\n";

echo "
        A1            A3
   +----------------------->

   +----------------------->
               B2     ";


echo "\n";
echo "\n";
echo "\n";

$Jeu = new terrain();
$PV_Joueur = $Jeu->vieJoueur;
$PositionAffichage = new Position_Tour_1();
$TourDeDefense = new SystDefense();
$vague = 0;

//$Ennemi = new Ennemis();
//$Ennemi_PV = $Ennemi->pv;// getter pv de l'ennemi = 20


/*
$PositionAffichage->Push_Choix_Tour(); // Affichage du jeu + readline + affichage map
$Position_tour_N1 = $PositionAffichage->toString2(); // return input 1 du joueur et stockage dans variable $Position_tour_N1
$PositionAffichage->positionnementTour($Position_tour_N1); // getter Position ' 2 ou 4 ou 6 '' de la tour 
$Position_Tour_1 = $PositionAffichage->position_tour; // et stockage dans var $Position_Tour_1
$positionEnnemi = $Ennemi->Position_Initiale_Ennemi(); // getter de position enemei ( commence à 0 ) et stockage dans var $positionEnnemi
$PositionAffichage->ComparatifTableaux($positionEnnemi); // Comparatif position ennemi et position tour :: AFFICHAGE MAP
*/

/*
//TOUR
$positionEnnemi = $Ennemi->seDeplacer(); // avance de 1 l'ennemi
$PositionAffichage->ComparatifTableaux($positionEnnemi);
$TourDeDefense -> cibler($positionEnnemi, $Position_Tour_1); // comparatif entre position tour et ennemi, si true echo "cible en vue" else "ennemi pas en vue"
*/



$PositionAffichage->Push_Choix_Tour(); // Affichage du jeu + readline + affichage map
$Position_Tour_pour_TourN2 = $PositionAffichage->input1;




//Pour le deuxieme choix de tour
$afficheCA = "
        A1            A3
   +----------------------->

   +----------------------->
               B2     ";

               			echo "\n";
               			echo "\n";


$afficheCA = str_replace($Position_Tour_pour_TourN2, " ", $afficheCA);







$Position_tour_N1 = $PositionAffichage->toString2(); // return input 1 du joueur et stockage dans variable $Position_tour_N1
$PositionAffichage->positionnementTour($Position_tour_N1); // getter Position ' 2 ou 4 ou 6 '' de la tour 
$Position_Tour_1 = $PositionAffichage->position_tour; // et stockage dans var $Position_Tour_1
$tableau_position_jeu = $PositionAffichage->positionTourArray($Position_Tour_1);

	

do {
		
		$Ennemi = new Ennemis();
		$Ennemi_PV = $Ennemi->pv;// getter pv de l'ennemi = 20
		if ($vague > 4) {
				$Ennemi->lvlUp();
			}
		$positionEnnemi = $Ennemi->Position_Initiale_Ennemi(); // getter de position enemei ( commence à 0 ) et stockage dans var $positionEnnemi
		$PositionAffichage->ComparatifTableaux($positionEnnemi); // Comparatif position ennemi et position tour :: AFFICHAGE MAP
		$tableau_position_jeu = $PositionAffichage->PositionTourArray($Position_Tour_1);

		

	//	echo "\n";
	//	readline ("Avancer le jeu ?");
	//	$positionEnnemi = $Ennemi->seDeplacer(); // avance de 1 l'ennemi
	//	$PositionAffichage->ComparatifTableaux($positionEnnemi);
	//	$TourDeDefense -> cibler($positionEnnemi, $Position_Tour_1); // comparatif entre position tour et ennemi, si true echo "cible en vue" else "ennemi pas en vue"
	 	
	 	foreach ($tableau_position_jeu as $key => $value) {

		for ($i=0; $i < 1 ; $i++) 
		{ 
		echo "\n";
		echo "\n";
		readline ("Avancer le jeu ?");
		$positionEnnemi = $Ennemi->seDeplacer(); // avance de 1 l'ennemi
		$PositionAffichage->ComparatifTableaux($positionEnnemi);



		if ($key == $value) {
		$attaqueTEST = $TourDeDefense->tirer();
		echo "\n";
		echo "\n";
		echo "DEGAT DE TOUR : ". $attaqueTEST;
		echo "\n";
		$Ennemi_PV_test = $Ennemi->ReduirePV($attaqueTEST);
			if ($Ennemi_PV_test < 1) {
				echo "\n";
				$vague++;
				echo "TU VIENS DE PASSER LA VAGUE N°" . $vague;
				echo "\n";

			break 2  ;
			} 
 		}



 		if ($positionEnnemi == $Jeu->longueurTerrain) 
				{
				echo "\n";
				echo "\n";
				$Jeu->ReduireVie($positionEnnemi);
				echo "\n";
				$vague++;
				echo "TU VIENS DE PASSER LA VAGUE N°" . $vague;
				echo "\n";
				unset($attaque);
				break;}

 		
 		}//boucle for
	}//boucle foreach

			if ($vague == 2 and $Jeu->vieJoueur !=0) 
				{
					//$vague++;
					echo "\n";
					echo "Voici tes options : ";
					echo "\n";
					echo "1 - Construire une nouvelle tour ?";
					echo "\n";
					echo "2 - upgrade la tour ?";
					echo "\n";
					do {
						echo "\n";
						$input2 = readline(" je choisi : ");
					} while ($input2 != 1 and $input2 !=2);
					

					if ($input2 == 2)
					{
						echo "\n";
						$TourDeDefense-> lvlUp();
						print_r($TourDeDefense);
					}
					


					if ($input2 == 1)
					 {	
					 	$TourDeDefense_NUMERO2 = new SystDefense();

						echo $afficheCA;
						echo "\n";
               			

						$PositionAffichage->Push_Choix_Tour(); // Affichage du jeu + readline + affichage map
						$Position_tour_N2 = $PositionAffichage->toString2(); // return input 1 du joueur et stockage dans variable $Position_tour_N1				
						$PositionAffichage->positionnementTour($Position_tour_N2); // getter Position ' 2 ou 4 ou 6 '' de la tour 
						$Position_Tour_N2 = $PositionAffichage->position_tour; // et stockage dans var $Position_Tour_1
						//$TourDeDefense_NUMERO2 -> cibler($positionEnnemi, $Position_Tour_2); // comparatif entre position tour et ennemi, si true echo "cible en vue" else "ennemi pas en vue"
						//echo $Position_Tour_N2;
						$tableau_position_jeu = $PositionAffichage->PositionTourArray($Position_Tour_N2);
						//print_r($tableau_position_jeu);
					}
				}

				

} while ($Jeu->vieJoueur != 0);

echo "Tu es mort";

	











	



