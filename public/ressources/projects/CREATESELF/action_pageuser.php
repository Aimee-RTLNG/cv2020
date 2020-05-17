<?php

	echo ("<div class=\"accueilprofil\">");
    echo ("<div class=\"introprofil\">");
	echo ("<h1>Voici le contenu de l'utilisateur ");
    Pseudoutilisateur($pdo, $iduser);
    echo("</h1><img src=\"./uploads/knowledge.svg\" style=\"width: 100px; margin-top: 30px;\">");
    echo ("</div>");

    // $message= "<h1>".Pseudoutilisateur($pdo, $iduser)." n'a pas encore crée de pages. 😞.</h1>";
    // $nbpages=countPages($pdo, $iduser);
    // if ($nbpages==0) { echo $message; };

	
?>

<div id="id12" style="display: block;">
<form method="post" id="choosepage" >
    <div class="container">
			<div class="container" style="background-color:#f1f1f1">
			<h1 class="innerstyle">Page affichée</h1>
				<select name="nompage">
                    <?php affichePagesUser($pdo, $iduser); ?>
                </select>
			</div>
            <div class="choice" style="background-color:#f1f1f1">
                <input type="submit" name="choosepage" value="Voir la page" >
            </div>
    </div>
</form>
</div>

<div id="id11" style="display: none;" >
    <form method="post" id="postavis" action="include/fonction_postavis.php?iduser=<?php echo $iduser ?>" name="postavis">
        <div class="container">
            <h1 class="innerstyle">Ajouter un avis</h1>
                <label for="note">Note</label>
                <select name="note" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
				<label for="pageref">Page</label>
                <select name="pageref" required>
					<?php affichePagesUser($pdo, $iduser); ?>
                </select>
            <label for="texte">Contenu de l'avis</label>
                <textarea form="postavis" name="texte" onkeyup="reste(this.value)"  maxlength="250" style="max-height:120px;" required></textarea>
                    <script type="text/javascript">
                    function reste(texte)
                    {
                        var restants=250-texte.length;
                        document.getElementById('caracteres').innerHTML=restants;
                    }
                    </script>
            <input type="submit" name="postavis" value="Ajouter l'avis" >
            <span id="caracteres" style="margin-left: 15px;" > 250</span> caractères restants
        </div>
    </form>
</div>
</div>

<div class="categories">
    <p> Catégories :</p>
	<?php afficheTags($pdo, $iduser); ?>
</div>

<?php	
	
	
	if (isset($_POST['choosepage'])) {
		if (!empty($_POST['nompage'])) {
		    $idpage=$_POST['nompage'];
		    echo "<h2 style=\"text-align:center;\">Voici la page ";
            NomPagesSelected($pdo, $iduser, $idpage);
            echo " </h2>";
            echo ("<div class=\"contenuuser\">");
		    ContenuPagesSelected($pdo, $iduser, $idpage);
			echo("</div>");
            echo("<div class=\"addandseeavis\"><h2 style=\"text-align:center;\">Voici les avis sur la page :</h2>");
			AvisPagesSelected($pdo, $idpage);
            echo("</div>");
            ?>
            <script> document.getElementById('id11').style.display='block'; </script>
             <?php
		}
		else {		
			$idpage="";
	    }
		
	};
	


?>


