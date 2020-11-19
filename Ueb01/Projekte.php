<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Projekte</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/jquery@3.5.1/dist/jquery.min.js"></script>
    <script src="https://unpkg.com/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://unpkg.com/bootstrap@4.5.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>

<div class="jumbotron text-center">
    <h1 class="display-4">Aufgabenplaner: Projekte</h1>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col col-2">

            <nav class="navbar">
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="Login.php">
                            Login
                        </a>
                    </li>
                    <li class="list-group-item active">
                        <a href="Projekte.php" style=" color: white">
                            Projekte
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="index.php">
                            Aktuelles Projekt
                        </a>
                    </li>
                    <li class="list-group-item" style="width: 70%; margin-left: auto;text-align: center ">
                        <a href="Reiter.php">Reiter</a>
                    </li>
                    <li class="list-group-item" style="width: 70%; margin-left: auto;text-align: center ">
                        <a href="Aufgaben.php">Aufgaben</a>
                    </li>
                    <li class="list-group-item" style="width: 70%; margin-left: auto;text-align: center ">
                        <a href="Personen.php">Mitglieder</a>
                    </li>
                </ul>
            </nav>

        </div>
        <div class="col">


            <form>
            <div class="form-group">
                <label for="sel1">Projekt auswählen</label>
                <select class="form-control" id="sel1">
                    <option>-bitte auswählen-</option>
                    <option>Webentwicklung</option>
                    <option>Datenbanksysteme</option>
                    <option>sport</option>
                    <option>pause</option>
                </select>
            </div>
                <button class="btn btn-primary" type="submit">Auswählen</button>
                <button class="btn btn-primary" type="submit">Bearbeiten</button>
                <button class="btn btn-danger" type="submit">Löschen</button>
            </form>

            <br>
            <br>
            <h3>Neues Projekt anlegen</h3>
            <form>
            <div class="form-group">
                <label for="projektname">Projektname</label>
                <input type="text" class="form-control" id="projektname">
                <br>
                <label for="beschreibung">Projektbeschreibung</label>
                <textarea class="form-control" rows="5" id="beschreibung"></textarea>
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
