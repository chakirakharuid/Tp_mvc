<?php include "header.php" ?>

<h3 style="margin-left:35px;color:#ff6e14;margin-top:45px;">Ajout d'annonce</h3>
<br>
<br>

<form form enctype="multipart/form-data" method="POST" action="/enregistrer_annonce" class="row g-3">
    <div style="margin-left:5px" class="col-md-6">
        <label for="inputEmail4" class="form-label">Titre de l'annonce</label>
        <input type="text" name="titre" class="form-control" id="inputEmail4">
    </div>
    <div style="margin-left:5px;margin-right:70px" class=" form-floating">
        <textarea class="form-control" name="message" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
        <label for="floatingTextarea2">Message </label>
    </div>
    <div style="margin-left:5px" class=" mb-3">
        <label for="formFile" class="form-label">Choisir une image pour l'annonce</label>
        <input class="form-control" name="photo" type="file" id="formFile"> <button style="margin-top:150px;margin-left:25px" type="submit" class="btn btn-secondary ">Envoyer mon annonce</button>
    </div>
</form>
<?php include "footer.php" ?>