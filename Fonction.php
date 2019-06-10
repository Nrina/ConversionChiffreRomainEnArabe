<?php 

function convertRomainToArabe($chiffreRomain)
{
	$chiffreArabe = 0;
	$LongueurChiffreR = strlen($chiffreRomain);
	$tableau = array('I'=>1, 'V'=>5, 'X'=>10, 'L'=>50, 'C'=>100);

	for ($i=0; $i < $LongueurChiffreR; $i++) 
	{ 		
		$indiceActuel = $i;
		$indiceSuivant = $i+1;
		
		if($indiceSuivant < $LongueurChiffreR)
		{
			$valeurActuel = $tableau[$chiffreRomain[$indiceActuel]];
			$valeurSuivant = $tableau[$chiffreRomain[$indiceSuivant]];	

			if($valeurSuivant <= $valeurActuel) $chiffreArabe += $valeurActuel;
			else $chiffreArabe += $valeurActuel*(-1);
		}
		if($indiceSuivant == $LongueurChiffreR) $chiffreArabe += $tableau[$chiffreRomain[$LongueurChiffreR-1]];
	}

	return $chiffreArabe;
}

echo convertRomainToArabe('XVII');
