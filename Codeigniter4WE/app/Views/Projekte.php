<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Projekte</title>

    <?php include('css/styles.php') ?>
</head>
<body>

<?php
$projekte = array(
    0 => array(
        'id' => 0,
        'bezeichnung' => '-auswählen-',
        'beschreibung' => ''
    ),
    1 => array(
        'id' => 1,
        'bezeichnung' => 'Webentwicklung Vorlesung',
        'beschreibung' => 'Die aktuelle Vorlesung von WE anhören.'
    ),

    2 => array(
        'id' => 2,
        'bezeichnung' => 'Datenbanken Übung',
        'beschreibung' => 'Die aktuelle Übung von DBS bearbeiten.'
    ),

    3 => array(
        'id' => 3,
        'bezeichnung' => 'Datenbanken Vorlesung',
        'beschreibung' => 'Die aktuelle Vorlesung von DBS anören.'
    ),
    4 => array(
        'id' => 4,
        'bezeichnung' => 'Studienprojekt Zwischenbreicht schreiben',
        'beschreibung' => 'Für das aktuell laufende Studienprojekt einen sehr guten Zwischenbericht schreiben!'
    ),
    5 => array(
        'id' => 5,
        'bezeichnung' => 'Zwischenbericht strukturieren',
        'beschreibung' => 'Eine Struktur für den Zwischenbericht des Studienprojektes anlegen.'
    ),
    6 => array(
        'id' => 6,
        'bezeichnung' => 'Zwischenberichtstruktur an Herrn Kalenborn senden',
        'beschreibung' => 'Zwischenberichtstruktur an Herrn Kalenborn senden und absegnen lassen.'
    ),
);
?>

<div class="jumbotron text-center">
    <h1 class="display-4">Aufgabenplaner: Projekte</h1>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col col-2">
            <?php include('templates/navbar.php') ?>
        </div>
        <div class="col">
            <form>
                <div class="form-group">
                    <label for="sel1">Projekt auswählen</label>
                    <select class="form-control" id="sel1">
                        <!-- mit foreach-schleife durch das array iteriert und test ob existiert-->
                        <?php
                        if (isset($projekte)){
                        foreach ($projekte

                        as $projekt){
                        ?>
                        <option> <?php echo($projekt['bezeichnung'] . '<br>'); ?>
                            <?php }
                            } ?>


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
    <?php include('templates/footer.php') ?>
</footer>
</html>
