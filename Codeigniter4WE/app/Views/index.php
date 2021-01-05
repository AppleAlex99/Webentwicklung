<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ToDo Liste</title>
<body>



<div class="jumbotron text-center">
    <h1 class="display-4">Aufgabenplaner: Todos(Aktuelles Projekt)</h1>
</div>


<div class="container-fluid">
    <div class="row">
        <div class="col col-2">
            <?php include('templates/navbar.php') ?>
        </div>
        <div class="col">
            <div class="card-deck">
                <div class="card">
                    <div class="card-header"> <?php echo($todos[0]['bezeichnung']); ?> </div>
                    <div class="list-group">
                        <li class="list-group-item"> Übung bearbeiten</li>
                        <li class="list-group-item"> Webentwicklung machen</li>
                        <li class="list-group-item"> Vorlesung DBS anhören</li>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">Erledigt</div>
                    <div class="list-group">
                        <li class="list-group-item">Studienprojekt Lastenheft</li>
                        <li class="list-group-item">Studienprojekt Lösungsskizze</li>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">Verschoben</div>
                    <div class="list-group">
                        <li class="list-group-item">schlafen</li>
                        <li class="list-group-item">PS5-Vorbestellen</li>
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