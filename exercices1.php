<?php
$age = 12;
$langue= "anglais";
$sexe="fille";
$variable="23";
 

if ($age <= 12 AND $langue == "français")
{
    echo "Bienvenue sur mon site !";
}
elseif ($age <= 12 AND $langue == "anglais")
{
    echo "Welcome to my website!";
}

else  {
	echo "Ouf t'es vieux";
}


?>
<hr>
<!-- ========================================================================= -->
<h4>Avec OR</h4>

<?php
if ($sexe == "fille" OR $sexe == "garçon")
{
    echo "Salut Terrien !";
}
else
{
    echo "Euh, si t'es ni une fille ni un garçon, t'es quoi alors ?";
}
?>
<hr>

<!-- =========================================================================== -->
<h4>Bonus</h4>

<?php
if ($variable == 23)
{
?>
<strong>Bravo !</strong> Vous avez trouvé le nombre mystère !
<?php
}
?>
<!-- on n'a pas utilisé deecho. En effet, il vous suffit d'ouvrir l'accolade ({), puis de fermer la balise PHP (?>), et vous pouvez mettre tout le texte à afficher que vous voulez en HTML !
Rudement pratique quand il y a de grosses quantités de texte à afficher, et aussi pour éviter d'avoir à se prendre la tête avec les antislashs devant les guillemets ("ou'). -->

<!-- =========================================================================== -->