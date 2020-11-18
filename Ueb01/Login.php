<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/jquery@3.5.1/dist/jquery.min.js"></script>
    <script src="https://unpkg.com/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://unpkg.com/bootstrap@4.5.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="glyphter-font/css/name.css" rel="stylesheet">

    <div class="jumbotron text-center">
        <h1 class="display-4">Aufgabenplaner: Login</h1>
    </div>


</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col col-2">
            <!-- As a link -->
            <nav class="navbar navbar-light bg-light">
                <a class="navbar-brand" href="Login.php">Login............</a>
                <a class="navbar-brand" href="Projekte.php">Projekte.........</a>
                <a class="navbar-brand" href="index.php">Aktuelles Projekt</a>
                <a class="navbar-brand" href="Reiter.php">Reiter...........</a>
                <a class="navbar-brand" href="Aufgaben.php">Aufgaben.........</a>
                <a class="navbar-brand" href="Personen.php">Mitglieder.......</a>

            </nav>

        </div>
        <div class="col">
            <form>
                <div class="form-group">
                    <label for="Email">E-Mail</label>
                    <input type="email" class="form-control" id="email">

                    <label for="Passwort">Passwort</label>
                    <input type="password" class="form-control" id="passwort">

                </div>
                <button type="submit" class="btn btn-primary">
                    Log in
                </button>
            </form>



        </div>
    </div>
</div>


</body>
<footer>

</footer>
</html>