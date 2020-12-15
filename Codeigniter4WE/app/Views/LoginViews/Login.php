<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <?php include('css/styles.php') ?>

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
            <form>
                <div class="form-group">
                    <label for="email">E-Mail</label>
                    <input type="email" class="form-control" id="email">
                    <br>
                    <label for="passwort">Passwort</label>
                    <input type="password" class="form-control" id="passwort">

                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        AGBs und Datenschutzbestimmungen akzeptieren
                    </label>
                </div>
                <br>

                <button type="submit" class="btn btn-primary">Einloggen</button>
                <br>
                <br>
                Noch nicht registriert?<a href="#" onclick=warningImp()> Hier registrieren</a>
            </form>


        </div>
    </div>
</div>

<script>
    function warningImp() {
        alert("Noch nicht implementiert")
    }
</script>

<!-- Da die letzte Aufgabe bei mir auf dem Mac nicht funktioniert hat, hier eine Anfragen auf der WebentwicklungsDB


</body>
<footer>
    <?php include('templates/footer.php') ?>
</footer>
</html>