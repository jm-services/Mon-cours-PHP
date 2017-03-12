<?php
$age = 15;
 
if ($age <= 12) // SI l'âge est inférieur ou égal à 12
{
    echo "Salut gamin ! Bienvenue sur mon site !<br />";
    $autorisation_entrer = "Oui";
}
else // SINON
{
    echo "Ceci est un site pour enfants, vous êtes trop vieux pour pouvoir  entrer. Au revoir !<br />";
    $autorisation_entrer = "Non";
}
 
echo "Avez-vous l'autorisation d'entrer ? La réponse est : $autorisation_entrer";
?> <br>

<?php
if ($autorisation_entrer == "Oui") // SI on a l'autorisation d'entrer
{
    // instructions à exécuter quand on est autorisé à entrer
    echo "OK";
}
elseif ($autorisation_entrer == "Non") // SINON SI on n'a pas l'autorisation d'entrer
{
    // instructions à exécuter quand on n'est pas autorisé à entrer
    echo "Pas cool";
}
else // SINON (la variable ne contient ni Oui ni Non, on ne peut pas agir)
{
    echo "Euh, je ne connais pas ton âge, tu peux me le rappeler s'il te plaît ?";
}
?>