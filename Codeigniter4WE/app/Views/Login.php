<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
<div class="jumbotron text-center">
    <h1 class="display-4">Aufgabenplaner: Login</h1>
</div>


<div class="container-fluid">
    <div class="row">
        <div class="col col-2">
            <?php include('templates/navbar.php') ?>
        </div>
        <div class="col">
            <?= form_open('login/index') ?>
                <div class="form-group">
                    <label for="email">E-Mail</label>
                    <input type="text" class="form-control" id="email" name="email">
                    <br>
                    <label for="passwort">Passwort</label>
                    <input type="password" class="form-control" id="passwort" name="passwort">
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        AGBs und Datenschutzbestimmungen akzeptieren
                    </label>
                </div>
                <br>

                <button id="btnsubmit" type="submit" class="btn btn-primary">Einloggen</button>
                <br>
                <br>
                Noch nicht registriert?<a href="#" onclick=warningImp()> Hier registrieren</a>
            <?=form_close()?>
        </div>
    </div>
</div>

<script>
    function warningImp() {
        alert("Noch nicht implementiert")
    }
</script>

<!-- Da die letzte Aufgabe bei mir auf dem Mac nicht funktioniert hat, hier eine Anfragen auf der WebentwicklungsDB-->


</body>
<footer>

</footer>
</html>