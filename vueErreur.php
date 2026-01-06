<?php $titre = 'Mon Blog'; ?>
<?php ob_start(); ?>

<?php $msgErreur = $msgErreur ?? "Erreur inconnue."; ?>

<p>Une erreur est survenue : <?= htmlspecialchars($msgErreur, ENT_QUOTES, 'UTF-8') ?></p>

<?php $contenu = ob_get_clean(); ?>
<?php require 'gabarit.php'; ?>
