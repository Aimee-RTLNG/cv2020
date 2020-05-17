<?php

function afficheContenu($tableau) 
	{
		if ($tableau['theme']=="media") {
			echo ("<div class=\"divmedia\"><".($tableau['balise'])."");
			if ($tableau['classe']=="little-media") { echo (" width=\"260px\" height=\"150px\""); }
			else if ($tableau['classe']=="medium-media") { echo (" width=\"560px\" height=\"315px\""); } 
			else if ($tableau['classe']=="large-media") { echo (" width=\"760px\" height=\"440px\""); };
			echo ("class=\"".$tableau['theme'].' '.$tableau['classe']."\" src=\"".($tableau['texte'])."\"></".($tableau['balise'])."></div>");
		}
		else { 
			echo "<".($tableau['balise'])." class=\"".$tableau['theme'].' '.$tableau['classe']."\">".$tableau['texte']."</".($tableau['balise']).">"; 
			}
	};

function afficheContenuUtilisateur($tableau)
{
    print "<p class=\"identity\">".$tableau['nom']." ".$tableau['prenom']."</p><p class=\"aka\">aka</p><p class=\"pseudo\">".$tableau['pseudo']."</p>";
	$userpagesid=$tableau['id'];
    echo ("<div class=\"button-profil\"><a href = \"index.php?pageuser=true&id=".$userpagesid."\" class=\"button-profil\"><i style=\"font-size:40px\" class=\"fa\">&#xf06e;</i style=\"font-size:40px\"></a></div>");
    echo ("</div>");
};

function afficheUser($tableau)
{
    print "<p class=\"annonce\" >Bienvenue sur votre profil</p><p class=\"annonce\">".$tableau['nom']." ".$tableau['prenom']." aka ".$tableau['pseudo']."</p>";
};

function afficheOptionsPage($tableau)
{
    print "<option value=\"".$tableau['id']."\">".$tableau['titre']."</option>";
};

function afficheListeCategories($tableau)
{
    print "<option value=\"".$tableau['id']."\">".$tableau['nom']."</option>";
};

function afficheOneTag($tableau)
{
    print "<button class=\"tag\" value=\"".$tableau['id']."\">".$tableau['nom']."</button>";
};

function afficheListeContenu($tableau)
{
    print "<option value=\"".$tableau['id']."\">".$tableau['texte']."</option>";
};

function afficheavis($tableau)
{
	$rand_background=randomcolor();
    print "<div class=\"avis\" style=\"background-color:".$rand_background.";\"><b>Note</b>: ".$tableau['note']." sur 5 <p class=\"avis\"><b>Avis:</b> ".$tableau['texte']."</p></div>";
};

function affichePseudoUtilisateur($tableau)
{
    echo($tableau['pseudo']);
};

function randomcolor() {
	$background_colors = array('#ffb3ba', '#ffdfba', '#baffc9', '#c9c9ff', '#D1FFB3', '#b9b9b9', '#bfc3d2','#d8d4e3');
	$count = count($background_colors) - 1;

		$i = rand(0, $count);

		$rand_background = $background_colors[$i];
		return $rand_background;
};
		
?>

