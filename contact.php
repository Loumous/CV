<!DOCTYPE html>
<html lang="fr">

<body>

    <?php require("component/head.php")?>
    <?php require("component/navbar.php")?>
    <form class="col-6 m-auto">
    <fieldset class="border p-3">
        <legend>Contact</legend>
        <div class="form-group">
            <label for="email">Adresse mail :</label>
            <input type="email" class="form-control" placeholder="Saisissez votre mail">
        </div>

        <div class="form-group">
            <label for="subject">Sujet de message :</label>
            <input type="text" id="email" class="form-control" placeholder="Motif de contact">
        </div>

        <div class="form-group">
            <label for="message">Message :</label>
            <textarea name="message" class="form-control" id="message" cols="15" rows="10"></textarea>
        </div>
        <div class="d-flex justify-content-between">
            <button class="btn btn-success">Envoyer</button>
        </div>
    </fieldset>
    </form>
    <?php require("footer.php")?>
</body>
<?php require("component/script.php")?>
</html>