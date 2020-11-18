<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ToDo Liste</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
            crossorigin="anonymous"></script>
    <script src="https://unpkg.com/jquery@3.5.1/dist/jquery.min.js"></script>
    <script src="https://unpkg.com/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://unpkg.com/bootstrap@4.5.3/dist/css/bootstrap.min.css" rel="stylesheet"/>


    <div class="jumbotron text-center">
        <h1 class="display-4">Aufgabenplaner: Todos(Aktuelles Projekt)</h1>
    </div>


</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col col-2">
            <!-- As a link -->
            <nav class="navbar navbar-light bg-light">
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="Login.php">Login</a>
                    </li>
                    <li class="list-group-item">
                        <a href="Projekte.php">Projekte</a>
                    </li>
                    <li class="list-group-item">
                        <a href="index.php">Aktuelles Projekt</a>
                    </li>
                    <li class="list-group-item">
                        <a href="Reiter.php">Reiter</a>
                    </li>
                    <li class="list-group-item">
                        <a href="Aufgaben.php">Aufgaben</a>
                    </li>
                    <li class="list-group-item">
                        <a href="Personen.php">Mitglieder</a>
                    </li>
                </ul>
            </nav>

        </div>
        <div class="col">
            <div class="card-deck">
                <div class="card">
                    <div class="card-header">ToDo</div>
                    <div class="list-group">

                        <li class="list-group-item">schlafen</li>
                        <li class="list-group-item">mehr schlafen</li>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">ToDo</div>
                    <div class="list-group">

                        <li class="list-group-item">schlafen</li>
                        <li class="list-group-item">mehr schlafen</li>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">ToDo</div>
                    <div class="list-group">

                        <li class="list-group-item">schlafen</li>
                        <li class="list-group-item">mehr schlafen</li>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

</body>
<footer>

</footer>
</html>