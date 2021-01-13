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
            <?= form_open('login/index' , array('role' => 'form')) ?>
                <div class="form-group">
                    <label for="email">E-Mail:</label>
                    <input type="text" class="form-control <?= (isset($error['Email']))?'is-invalid':'' ?>" id="email" name="email">
                    <div class="invalid-feedback"> <?= (isset($error['Email']))?$error['Email']:'' ?> </div>
                    <br>
                    <label for="passwort">Passwort:</label>
                    <input type="password" class="form-control <?= (isset($error['Passwort']))?'is-invalid':'' ?>"  id="passwort" name="passwort">
                    <div class="invalid-feedback"> <?= (isset($error['Passwort']))?$error['Passwort']:'' ?> </div>
                </div>

                <div class="form-check">
                    <input class="form-check-input <?= (isset($error['Checkbox']))?'is-invalid':'' ?>" type="checkbox" value="" id="defaultCheck1">
                    <div class="invalid-feedback"> <?= (isset($error['Checkbox']))?$error['Checkbox']:'' ?> </div>
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

</body>
<footer>

</footer>
</html>