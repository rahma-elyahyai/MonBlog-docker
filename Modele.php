<?php

// Connexion à la base de données (contener MySQL)
function getBdd() {
    try {
        $bdd = new PDO(
            'mysql:host=db;dbname=monblog;charset=utf8',
            'bloguser',      // utilisateur MySQL du conteneur
            'blogpass'       // mot de passe MySQL du conteneur
        );

        // Pour voir les erreurs plus clairement
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $bdd;
    } catch (PDOException $e) {
        die('Erreur de connexion : ' . $e->getMessage());
    }
}

// Renvoie la liste de tous les billets, triés par identifiant décroissant
function getBillets() {
    $bdd = getBdd();
    $sql = 'SELECT BIL_ID AS id, BIL_DATE AS date,
                   BIL_TITRE AS titre, BIL_CONTENU AS contenu
            FROM T_BILLET
            ORDER BY BIL_ID DESC';

    return $bdd->query($sql);
}

?>