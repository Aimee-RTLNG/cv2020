<?php

class Score {
    private $id;
    private $pseudo;
    private $score;
    private $date;
	private $time;

    function __construct() {
        $this->id = intval($this->id);
        $this->pseudo = 'Anonyme';
        $this->score = 0;
        $this->date = date("d/m/Y");
		$this->time = 0;
    }

    static function selectAllFromTable($pdo) {
        // construction de la requête
        $sql= 'select * from scores';

        // création d'un tableau pour stocker le résultat
        $tab = array();

        // exécution de la requête
        try {
            $result = $pdo->query($sql,PDO::FETCH_OBJ);
            // boucle pour chaque ligne ajouter l'objet correspondant au tableau
            while ($objet = $result->fetch()) {
                array_push($tab,$objet);
            }
            if (empty($tab)) {
                return array('ok' => true, 'message' => '', 'objets' => $tab);
            }
            else {
                return array('ok' => true, 'message' => '', 'objets' => $tab);
            }
        }
        catch (Exception $e) {
            // En cas d'échec renvoi un code et un message d'erreur
            return array('ok' => false, 'message' => $e->getMessage(), 'objets' => null);
        }
    }

    // affichage ou rendu de l'objet inséré
    function affiche() {
        return 'Pseudo = '.$this->pseudo.', Score = '.$this->score.', Date = '.$this->date.'>';
    }

    // teste la validité des données reçues et génère un message d'erreur
    function chargePOST() {
        $ok = true;
        $message = '';
        if (isset($_POST['id']) && !empty($_POST['id']) ) {
            $this->id= $_POST['id'];
        }
        if (isset($_POST['pseudo']) && !empty($_POST['pseudo']) ) {
            $this->pseudo= $_POST['pseudo'];
        }
        if (isset($_POST['date']) && !empty($_POST['date']) ) {
            $this->date= $_POST['date'];
        }
        if (isset($_POST['score']) && !empty($_POST['score']) ) {
            $this->score= $_POST['score'];
        }
		if (isset($_POST['time']) && !empty($_POST['time']) ) {
            $this->time= $_POST['time'];
        }
        else {
            $ok = false;
            $message = "La requête n'a pas pu aboutir";
        }

        $result = array('ok' => $ok, 'message' => $message);
        return $result;
    }

    function insertIntoDB() {
        $message = "";
        $pdo = new PDO('mysql:host=base.iha.unistra.fr;dbname=score;charset=utf8', 'hike', 'oOR4AF!0jhJrkyOm');

        // construction de la requête
        $sql = 'insert into scores(id, pseudo, date, score, time)
				values (\''.$this->id.'\',\''.$this->pseudo.'\',\''.$this->date.'\',\''.$this->score.'\',\''.$this->time.'\');';

        // exécution de la requête
        $nb = $pdo->exec($sql);
        $ok = true;

        if ($nb != 1) {
            echo '<p>Erreur d\'insertion '.$sql.'</p>';
            $ok = false;
        }

        $this->id = $pdo->lastInsertId();

        $result = array('ok' => $ok, 'message' => $message);
        echo json_encode($result);
    }

};
?>