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
</head>
<body>

<?php
$todos = array(
    0 => array(
        'id' => 1,
        'bezeichnung' => 'Webentwicklung Vorlesung'
    ),

    1 => array(
        'id' => 2,
        'bezeichnung' => 'Datenbanken Übung'
    ),

    2 => array(
        'id' => 3,
        'bezeichnung' => 'Datenbanken Vorlesung'
    ),
);
#var_dump($todos)
?>

<div class="jumbotron text-center">
    <h1 class="display-4">Aufgabenplaner: Todos(Aktuelles Projekt)</h1>
</div>


<div class="container-fluid">
    <div class="row">
        <div class="col col-2">
            <?php include ('navbar.php')?>
        </div>
        <?php include("todosArray.php"); ?>
        <div class="col">
            <div class="card-deck">
                <div class="card">
                    <div class="card-header">ToDo</div>
                    <div class="list-group">
                        <li class="list-group-item"> <?php echo ($todos[0]['bezeichnung'])?> </li>
                        <li class="list-group-item"><?php echo ($todos[1]['bezeichnung'])?></li>
                        <li class="list-group-item"><?php echo ($todos[2]['bezeichnung'])?></li>
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