<?php
$tab=array(""=>"");
do
{
$cle=readline("Entrer le clé");
$note=intval(readline("ENtrer la note : "));
array_push($tab,$note);
}while($cle !="FIN");

foreach ($tab as $key => $value) {
    
	echo "  $key  $value \n ";
    
}
echo "la note maximale est: ",max($tab)."\n";
echo " la note minimale est: ",min($tab)."\n";
asort($tab);
echo "Affichage du tableau apres le tri par ordre alphabetique \n";
foreach ($tab as $key => $value) {
    
	echo "  $key  $value \n ";
    
}



echo "Affichage par odre de merite  \n";
arsort($tab);
foreach ($tab as $key => $value) {
	echo "la note de l’étudiant $key est : $value  \n" ;
}

foreach ($tab as $key => $value) {
	echo  "$key  $value \n ";
}
echo "la moyenne de la classe: ",round(array_sum($tab)/count($tab),2);
