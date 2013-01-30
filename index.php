<?php
  Header('Cache-Control: no-cache');
  Header('Pragma: no-cache');
  date_default_timezone_set('UTC');
?>
<!DOCTYPE html>
<html lang="en">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <head>
    <title>Une page PHP</title>

    <script src="http://aspnet-----------j1.azurewebsites.net/Scripts/jquery-1.6.4.min.js"></script>
    <script src="http://aspnet-----------j1.azurewebsites.net/Scripts/jquery.signalR-1.0.0-rc2.min.js"></script>
    <script src="http://aspnet-----------j1.azurewebsites.net/signalr/hubs" type="text/javascript"></script>
 
</head>
  <body class="container">
    
    <script type="text/javascript">
        $(function () {
            // déclaration du canal de communication
            var monCanal = $.connection.monHub;

            // Déclaration de la 
            // fonction de réception des messages en provenance du serveur
            monCanal.client.messageDepuisHub = function (message) {
                $('#messages').append('<li>' + message + '</li>');
            };

            // Etablissement de la connexion
            $.connection.hub.start().done(function () {
                // Ajout de l'événement sur le click du bouton
                // pour envoyer le message au hub
                $("#broadcast").click(function () {
                    // Call the monCanal method on the server
                    monCanal.server.messageDepuisClient($('#msg').val());
                });
            });
        });
    </script>

    <h1>PHP et discussion via SignalR</h1>
    <div class="form-actions">
        <input type="text" class="input-block-level" id="msg" />
        <input type="button" id="broadcast" class="btn btn-small btn-success" value="Envoyer"/>
    </div>
    <div class="lead">
        <ul id="messages">
        </ul>
    </div>
<h3>Une page PHP</h3>
        <p><a class="btn btn-primary btn-large" href="Default.aspx">Back.</a></p>
    <p class="lead">Il est <?php $now = date('H:i:s'); echo $now; ?></p>

</body>
</html>
