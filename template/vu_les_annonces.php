<?php include "header.php" ?>

<h1 style="margin-left:35px;color:#ff6e14;margin-top:42px;">Plusieurs occasions de se faire plaisir</h1>
<div class="carte" >
    <?php foreach ($entry as $annonce) { ?>
        <div class=" card " style=" width: 18rem;">
    <img src="http://localhost:8000/img/<?= $annonce->image ?>" height:200pxclass="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title"><?= $annonce->titre ?></h5>
        <p class="card-text"><?= $annonce->message ?></p>
        <a href="/favoris"><img class="img" src="http://localhost:8000/img/coeur.png" width="50px" alt=""></a>
    </div>
</div>
<?php } ?>
</div>
<?php include "footer.php" ?>