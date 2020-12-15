<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ToDo Liste</title>

    <?php include('css/styles.php') ?>

<body>

<?php
$todos = array(
    0 => array(
        'id' => 0,
        'bezeichnung' => 'ToDo',
        'wert0' => 'Übung bearbeiten',
        'wert1' => 'Webenwicklung machen',
        'wert2' => 'Vorlesung DBS anhören',
    ),

    1 => array(
        'id' => 1,
        'bezeichnung' => 'Erledigt',
        'wert0' => 'Studienprojekt Lastenheft',
        'wert1' => 'Studienprojekt Lösungsskizze',
        'wert2' => 'Studienprojekt Zwischenpräsentation',
        'wert3' => 'Studienprojekt Zwischenpbericht',
    ),
    2 => array(
        'id' => 2,
        'bezeichnung' => 'Verschoben',
        'wert0' => 'schlafen',
        'wert1' => 'PS5-Vorbestellung',
    ),
);
?>

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
                    <div class="card-header">ToDoK?></div>
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
    <?php include('templates/footer.php') ?>
</footer>
</html>