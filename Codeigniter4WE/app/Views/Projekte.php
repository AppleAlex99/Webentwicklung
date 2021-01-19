<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Projekte</title>
</head>
<body>

<div class="jumbotron text-center">
    <h1 class="display-4">Aufgabenplaner: Projekte</h1>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col col-2">
            <?php include('templates/navbar.php') ?>
        </div>
        <div class="col">
            <?= form_open(base_url('/Webentwicklung/Codeigniter4WE/public/Projekte/projektAusw') , array('role' => 'form')) ?>
                <div class="form-group">
                    <label for="sel1">Projekt auswählen</label>
                    <select class="form-control" id="sel1">
                        <!-- mit foreach-schleife durch das array iteriert und test ob existiert-->
                        <?php
                        if (isset($projekte)){
                        foreach ($projekte as $projekt){
                        ?>
                        <option> <?php echo($projekt['Name'] . '<br>'); ?>
                            <?php }
                            } ?>

                    </select>
                </div>
                <button class="btn btn-primary" id="projektAuswaehlen" onclick="projektAusgewaehlt()" name="projektAuswaehlen" type="submit">Auswählen</button>
            <?=form_close()?>
            <br>
            <br>
            <br>
            <br>
            <h3>Neues Projekt anlegen</h3>
            <?= form_open(base_url('/Webentwicklung/Codeigniter4WE/public/Projekte/createPro') , array('role' => 'form')) ?>
                <div class="form-group">
                    <label for="projektname">Projektname</label>
                    <input type="text" class="form-control" id="projektName" name="projektName">
                    <br>
                    <label for="beschreibung">Projektbeschreibung</label>
                    <textarea type="text" class="form-control" rows="5" id="projektBeschreibung" name="projektBeschreibung"></textarea>
                </div>
                <button class="btn btn-primary" id="neuesProjektSpeichern" name="neuesProjektSpeichern" type="submit">Speichern</button>
                <button class="btn btn-success" id="neuesProjektReset" name="neuesProjektReset"  type="reset">Reset</button>
            <?=form_close()?>
            <br>
            <br>
            <br>
            <br>
            <h3>Ausgewähltes Projekt bearbeiten</h3>
            <?= form_open(base_url('/Webentwicklung/Codeigniter4WE/public/Projekte/projektBearb') , array('role' => 'form')) ?>
                <div class="form-group">
                    <label for="projektname">neuer Projektname:</label>
                    <input type="text" class="form-control" id="projektNameNeu" name="projektNameNeu">
                    <br>
                    <label for="beschreibung">neue Projektbeschreibung:</label>
                    <textarea type="text" class="form-control" rows="5" id="projektBeschreibungNeu" name="projektBeschreibungNeu"></textarea>
                </div>
                <button class="btn btn-primary" id="ProjektBearbeiten"  name="ProjektBearbeiten" type="submit">Bearbeiten</button>
            <?=form_close()?>
            <br>
            <br>
            <br>
            <br>
            <?= form_open(base_url('/Webentwicklung/Codeigniter4WE/public/Projekte/projektLoes') , array('role' => 'form')) ?>
            <div class="form-group">
                <label for="projektID">Projekt-ID:</label>
                <input type="text" class="form-control" name="projektID" id="projektID">
                <br>
            </div>
            <button class="btn btn-primary" name="projektLöschen" id="projektLöschen" type="submit">Löschen</button>
            <button class="btn btn-success" id="projektLöschen" onclick="reload()" type="reset" >Abbrechen</button>
            <?=form_close()?>
        </div>
    </div>
</div>

<script>
    function projektAusgewaehlt() {
        alert("Projekt erfolgreich ausgewählt!")
    }
    function projektGeloescht(){
        alert("Projekt erfolgreich gelöscht!")
    }
</script>

</body>
<footer>
</footer>
</html>
