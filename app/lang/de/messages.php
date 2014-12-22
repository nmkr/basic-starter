<?php

return array(

    // Requests

    'error' => array(
        '400' => 'Bad Request - Falsche Anfrage',
        '401' => 'Unauthorized - Nicht berechtigt',
        '402' => 'Payment Required - Zahlung erforderlich',
        '403' => 'Forbidden - Verboten',
        '404' => 'Page not Found - Seite nicht gefunden'
    ),

    // Auth
    'auth' => array(
        'wrong_credentials'     => 'Falsche E-Mail Adresse oder falsches Passwort.',
        'logout'                => 'Sie wurden erfolgreich ausgeloggt!'
    ),

    // Password Reminder
    'reminders' => array(
        'email_title'           => '[nmkr.at] - TestApp - Passwort zurücksetzen',

        "password"              => "Passwörter müssen mindestens 6 Zeichen lang sein und korrekt bestätigt werden.",
        "user"                  => "Wir konnten leider keinen Nutzer mit dieser E-Mail Adresse finden.",
        "token"                 => "Der Passwort-Wiederherstellungs-Schlüssel ist ungültig oder abgelaufen.",
        "sent"                  => "Passworterinnerung wurde gesendet!",
        "reset"                 => "Passwort wurde zurückgesetzt!",
    )
);