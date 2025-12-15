<?php
// vueAccueil.php
// On suppose que $billets est fourni par index.php

// Titre de la page
$titre = "Accueil du blog";

// On démarre le tampon de sortie
ob_start();
?>

<h2 class="major">Derniers articles</h2>

<?php foreach ($billets as $billet): ?>
    <article style="margin-bottom: 2rem; text-align: left;">
        <header>
            <h3 class="titreBillet"><?= htmlspecialchars($billet['titre']) ?></h3>
            <?php if (isset($billet['date'])): ?>
                <p style="font-size: 0.9rem; opacity: 0.8;">
                    Publié le <?= htmlspecialchars($billet['date']) ?>
                </p>
            <?php endif; ?>
        </header>
        <p><?= nl2br(htmlspecialchars($billet['contenu'])) ?></p>
    </article>
    <hr />
<?php endforeach; ?>

<?php
// On récupère le contenu généré dans la variable $contenu
$contenu = ob_get_clean();

// On affiche la page complète avec le gabarit Spectral
require 'gabarit.php';