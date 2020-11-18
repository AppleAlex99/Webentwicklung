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
            <table class="table">
                <thead class="thead-light">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Beschreibung</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">ToDo</th>
                    <td>Dinge die erledigt werden müssen</td>
                    <td></td>

                </tr>
                <tr>
                    <th scope="row">Erledigt</th>
                    <td>Dinge die bereits erledigt sind</td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">Verschoben</th>
                    <td>Dinge die später erledigt werden</td>
                    <td></td>
                </tr>
                </tbody>
            </table>





        <h3>Bearbeiten/Erstellen</h3>
        <form>
            <div class="form-group">
                <label for="bezeichnung">Bezeichnung des Reiters</label>
                <input type="text" class="form-control" id="bezeichnung">
            </div>
            <div class="form-group">
                <label for="beschreibung1">Beschreibung</label>
                <textarea class="form-control" rows="5" id="beschreibung1"></textarea>
            </div>
            <button class="btn btn-primary" type="submit">Speichern</button>
            <button class="btn btn-success" type="submit">Reset</button>
        </form>


        </div>
    </div>
</div>


</body>
<footer>

</footer>
</html>