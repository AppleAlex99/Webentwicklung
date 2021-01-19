<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Personen</title>
</head>
<body>

<div class="jumbotron text-center">
    <h1 class="display-4">Aufgabenplaner: Personen</h1>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col col-2">
            <?php include('templates/navbar.php') ?>
        </div>


        <div class="col">
            <table class="table">
                <thead class="thead-light">
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">E-Mail</th>
                    <th scope="col">In Projekt</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row"> <?php echo($mitglieder[0]['Benutzername']) ?> </th>
                    <td> <?php echo($mitglieder[0]['Email']) ?> </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                            </label>
                        </div>
                    </td>
                    <td>
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd"
                                  d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                        </svg>
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square"
                             fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd"
                                  d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                        </svg>
                    </td>

                </tr>
                <tr>
                    <th scope="row"> <?php echo($mitglieder[1]['Benutzername']) ?> </th>
                    <td> <?php echo($mitglieder[1]['Email']) ?> </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                            </label>
                        </div>
                    </td>
                    <td>
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd"
                                  d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                        </svg>
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square"
                             fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd"
                                  d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                        </svg>
                    </td>
                </tr>
                <tr>
                    <th scope="row"> <?php echo($mitglieder[2]['Benutzername']) ?> </th>
                    <td> <?php echo($mitglieder[2]['Email']) ?> </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                            </label>
                        </div>
                    </td>
                    <td>
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd"
                                  d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                        </svg>
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square"
                             fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd"
                                  d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                        </svg>
                    </td>
                </tr>
                </tbody>
            </table>
            <br>
            <br>
            <br>
            <br>
            <h3>Erstellen</h3>
            <?= form_open(base_url('/Webentwicklung/Codeigniter4WE/public/Personen/crPerson') , array('role' => 'form')) ?>
                <div class="form-group">
                    <label for="nutzername">Nutzername:</label>
                    <input type="text" class="form-control" name="nutzername" id="nutzername">
                    <br>
                    <label for="emailadr">E-Mail-Adresse:</label>
                    <input class="form-control" type="email" name="emailadr" id="emailadr"/>
                    <br>
                    <label for="passwort2">Passwort:</label>
                    <input class="form-control" type="password" name="passwort2" id="passwort2"/>
                    <br>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Dem Projekt zugeordnet
                        </label>
                    </div>
                </div>
                <button class="btn btn-primary" id="speichernPersonen" type="submit">Speichern</button>
                <button class="btn btn-success" id="resetPersonen" type="submit">Reset</button>
            <?=form_close()?>
            <br>
            <br>
            <br>
            <br>
            <h3>Bearbeiten</h3>
            <?= form_open(base_url('/Webentwicklung/Codeigniter4WE/public/Personen/bearbPerson') , array('role' => 'form')) ?>
            <div class="form-group">
                <label for="benutzerID">BenutzerID:</label>
                <input type="text" class="form-control" name="benutzerID" id="benutzerID">
                <br>
                <label for="nutzername">neuer Nutzername:</label>
                <input type="text" class="form-control" name="nutzername" id="nutzername">
                <br>
                <label for="emailadr">neue E-Mail-Adresse:</label>
                <input class="form-control" type="email" name="emailadr" id="emailadr"/>
                <br>
                <label for="passwort2">mit Passwort bestätigen:</label>
                <input class="form-control" type="password" name="passwort2" id="passwort2"/>
                <br>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Dem Projekt zugeordnet
                    </label>
                </div>
            </div>
            <button class="btn btn-primary" id="speichernPersonen" type="submit">Speichern</button>
            <button class="btn btn-success" id="resetPersonen" type="reset">Reset</button>
            <?=form_close()?>
            <br>
            <br>
            <br>
            <br>
            <h3>Mitglied löschen</h3>
            <?= form_open(base_url('/Webentwicklung/Codeigniter4WE/public/Personen/deletePerson') , array('role' => 'form')) ?>
            <div class="form-group">
                <label for="nutzername">Nutzer-ID:</label>
                <input type="text" class="form-control" name="idLöschen" id="idLöschen">
                <br>
            </div>
            <button class="btn btn-primary" id="löschenPersonen" type="submit">Löschen</button>
            <button class="btn btn-success" id="abbrechenLöschenPersonen" onclick="reload()" type="reset" >Abbrechen</button>
            <?=form_close()?>



        </div>
    </div>
</body>
<footer>

    <script>
        function reload(){
            location.reload();
        }
    </script>

</footer>
</html>
