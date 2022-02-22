<?php include "header.php" ?>
<h3 style="text-align: center;color:#ff6e14;margin-top:20px;">Votre annonce a bien été crée</h3>
<?php $monannonce = $entry ?>
<div class="annonce">
  <div class="card" style="width: 22rem;">
    <div class="card-body">
      <h5 class="card-title"><?= $monannonce->titre ?></h5>
      <h6 class="card-subtitle mb-2 text-muted">Message</h6>
      <p class="card-text"><?= $monannonce->message ?></p>
      <a href=" http://localhost:8000/img/<?= $monannonce->image ?>" class="card-link">Voir l'image</a>
      <a href="/deposer_annonce" class="card-link">Déposer une autre annonce</a>
    </div>
  </div>
</div>
<p>Pour toute les annonces déposer elles aurons un temps de vie de 1mois aprés sa il faudra vous abonnez </p>

<?php include "footer.php" ?>