<?php

	include('include/affichages.php');

	function selectContenus($pdo) {
		// construction de la requête
			$sql = 'select * from contenus';
			 
		// exécution de la requête
			$result = $pdo->query($sql);
		
			if ($result) {
		// On fait une boucle pour récupérer toutes les données
		// Chaque ligne est récupérée dans un tableau
			  while ($ligne = $result->fetch(PDO::FETCH_ASSOC)) {
				afficheContenu($ligne);
				echo ("<br>");
			  }
			}
			else {
			  echo '<p>Erreur dans la requête</p>';
			};
			
		// fin de la connexion
		$pdo = null;
	};

    function Profilutilisateur($pdo) {
        $sql = "select id, nom, prenom, pseudo from utilisateurs";
        $result = $pdo->query($sql);
        if ($result) {
            while ($ligne = $result->fetch(PDO::FETCH_ASSOC)) {
                echo ("<div class=\"utilisateur\">");
                afficheContenuUtilisateur($ligne);
            }
        }
        else {
            echo '<p>Erreur dans la requête</p>';
        };
        $pdo = null;
    };

	function Pseudoutilisateur($pdo, $iduser) {
        $sql = "select pseudo from utilisateurs where id=".$iduser;
        $result = $pdo->query($sql);
        if ($result) {
            while ($ligne = $result->fetch(PDO::FETCH_ASSOC)) {
                affichePseudoUtilisateur($ligne);
            }
        }
        else {
            echo '<p>Erreur dans la requête</p>';
        };
        $pdo = null;
    };

    function selectProfilUser($pdo, $iduser) {
        $sql = 'select nom, prenom, pseudo, email from utilisateurs where id='.$iduser;
        $result = $pdo->query($sql);
        if ($result) {
            while ($ligne = $result->fetch(PDO::FETCH_ASSOC)) {
                afficheUser($ligne);
            }
        }
        else {
            echo '<p>Erreur dans la requête</p>';
        };

        $pdo = null;
    };

    function selectPagesUser($pdo, $iduser, $idpage) {
        $theme = "\"media\"";
		$sql = 'select * from contenus inner join pages ON pageref=pages.id where iduser='.$iduser.' and theme!='.$theme.' and pageref='.$idpage;
        $result = $pdo->query($sql);
        if ($result) {
            while ($ligne = $result->fetch(PDO::FETCH_ASSOC)) {
                afficheContenu($ligne);
            }
        }
        else {
            echo '<p>Erreur dans la requête</p>';
        };
        $pdo = null;
    };
	
   function selectMediaUser($pdo, $iduser, $idpage) {
		$theme = "\"media\"";
        $sql = 'select * from contenus inner join pages ON pageref=pages.id where iduser='.$iduser.' and theme='.$theme.' and pageref='.$idpage;
        $result = $pdo->query($sql);
        if ($result) {
            while ($ligne = $result->fetch(PDO::FETCH_ASSOC)) {
				afficheMedia($ligne);
            }
        }
        else {
            echo '<p>Erreur dans la requête</p>';
        };
        $pdo = null;
    };
	
	function affichePagesUser($pdo, $iduser) {
        $sql = "SELECT COUNT(*) FROM pages WHERE iduser=".$iduser;
        if ($res = $pdo->query($sql)) {

            if ($res->fetchColumn() > 0) {
                $sql = 'select id,titre from pages where iduser='.$iduser ;
                $result = $pdo->query($sql);
                if ($result) {
                    while ($ligne = $result->fetch(PDO::FETCH_ASSOC)) {
                        afficheOptionsPage($ligne);
                    }
                }
                else {
                    echo '<p>Erreur dans la requête</p>';
                };
                $pdo = null;
            }
            else {
                print "<option disabled selected value>Aucune page n'a été créée</option>";
            }
        };

    };
	
	function afficheCategoriesUser($pdo, $iduser) {
        $sql = "SELECT COUNT(*) FROM categories WHERE iduser=".$iduser;
        if ($res = $pdo->query($sql)) {

            if ($res->fetchColumn() > 0) {
                $sql = 'select id,nom from categories where iduser='.$iduser ;
                $result = $pdo->query($sql);
                if ($result) {
                    while ($ligne = $result->fetch(PDO::FETCH_ASSOC)) {
                        afficheListeCategories($ligne);
                    }
                }
                else {
                    echo '<p>Erreur dans la requête</p>';
                };
                $pdo = null;
            }
            else {
                print "<option disabled selected value>Aucune catégorie n'a été créée</option>";
            }
        };
    };
	
	function afficheTags($pdo, $iduser) {
        $sql = "SELECT COUNT(*) FROM categories WHERE iduser=".$iduser;
        if ($res = $pdo->query($sql)) {

            if ($res->fetchColumn() > 0) {
                $sql = 'select id,nom from categories where iduser='.$iduser ;
                $result = $pdo->query($sql);
                if ($result) {
                    while ($ligne = $result->fetch(PDO::FETCH_ASSOC)) {
                        afficheOneTag($ligne);
                    }
                }
                else {
                    echo '<p>Erreur dans la requête</p>';
                };
                $pdo = null;
            }
            else { echo '<p> Aucune catégorie n\'a été crée par l\'utilisateur </p>';
            }
        };
    };
	
	function selectListeContenu($pdo, $iduser) {
		$sql = 'select contenus.id, texte from contenus inner join pages ON pageref=pages.id where iduser='.$iduser  ;
		$result = $pdo->query($sql);
		if ($result) {
				while ($ligne = $result->fetch(PDO::FETCH_ASSOC)) {
					afficheListeContenu($ligne);
				}
			}
		else {
				echo '<p>Erreur dans la requête</p>';
			};
		$pdo = null;
    };

	function displayavis($pdo, $idpage) {
		$sql = 'select * from avis where pageref='.$idpage;
		$result = $pdo->query($sql);
		if ($result) {
				while ($ligne = $result->fetch(PDO::FETCH_ASSOC)) {
					afficheavis($ligne);
				}
			}
		else {
				echo '<p>Erreur dans la requête</p>';
			};
		$pdo = null;
    };	

    function NomPagesSelected($pdo, $iduser, $idpage) {
        $sql = "SELECT COUNT(*) FROM pages WHERE iduser=".$iduser." AND id=".$idpage;
        if ($res = $pdo->query($sql)) {

            if ($res->fetchColumn() > 0) {
                $sql = 'select id,titre from pages where iduser='.$iduser." AND id=".$idpage ;
                $result = $pdo->query($sql);
                if ($result) {
                    while ($ligne = $result->fetch(PDO::FETCH_ASSOC)) {
                        afficheOptionsPage($ligne);
                    }
                }
                else {
                    echo '<p>Erreur dans la requête</p>';
                };
                $pdo = null;
            }
            else {
                print "<option disabled selected value>Aucune page n'a été créée</option>";
            }
        };
    };
	
	function AvisPagesSelected($pdo, $idpage) {
        $sql = "SELECT COUNT(*) FROM avis WHERE pageref=".$idpage;
        if ($res = $pdo->query($sql)) {

            if ($res->fetchColumn() > 0) {
                $sql = 'select * from avis where pageref='.$idpage ;
                $result = $pdo->query($sql);
                if ($result) {
                    while ($ligne = $result->fetch(PDO::FETCH_ASSOC)) {
                        afficheavis($ligne);
                    }
                }
                else {
                    echo '<p>Erreur dans la requête</p>';
                };
                $pdo = null;
            }
            else {
                print "<h1 style=\"text-align: center;\">Il n'y a encore aucun avis sur cette page.</h1>";
            }
        };
    };
	
	function ContenuPagesSelected($pdo, $iduser, $idpage) {
        $sql = "SELECT COUNT(*) FROM contenus WHERE pageref=".$idpage." ORDER BY ordre ASC";
        if ($res = $pdo->query($sql)) {
            if ($res->fetchColumn() > 0) {
                $sql = 'select * from contenus where pageref='.$idpage." ORDER BY ordre ASC" ;
                $result = $pdo->query($sql);
                if ($result) {
                    while ($ligne = $result->fetch(PDO::FETCH_ASSOC)) {
                        afficheContenu($ligne);
                    }
                }
                else {
                    echo '<p>Erreur dans la requête</p>';
                };
                $pdo = null;
            }
            else {
                print "<h1 style=\"text-align: center;\">Il n'y a encore aucun contenu sur cette page.</h1>";
            }
        };
    };
	
	
?>