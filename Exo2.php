<?php
for($i=11;$i<=36;$i++)
{
$tab[$i]=chr(54+$i);
}
//Lecture avec for
for($i=11;$i<=36;$i++)
{
echo "Elément d'indice $i : $tab[$i] 
";
}
echo "<hr />";
echo "__________________________________________ \n";
//Lecture avec foreach
foreach($tab as $cle=>$valeur)
{
echo "Elément d'indice $cle : $valeur 
";
}
?>