<!DOCTYPE html>
<html lang="fr">
<?php require("component/head.php")?>
<body>
    <main>
    <?php require("component/navbar.php")?>
    <p>
    06 69 56 68 06
    marielouisedonzallaz@gmail 
    <!-- mettre map -->
    </p>
    <form class="col-6 m-auto">
    <fieldset class="border p-5">
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

    <?php require("component/footer.php")?>
    </main>
</body>
<?php require("component/script.php")?>
</html>