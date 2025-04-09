<?php

// Assure-toi que ce fichier est bien inclus dans ton projet.

class Validator {
    public function getTomorrowDate() {
        // Crée une instance de DateTime pour obtenir la date de demain
        $tomorrow = new DateTime();
        $tomorrow->modify('+1 day');
        
        // Retourne la date de demain en JSON
        return json_encode(['date' => $tomorrow->format('Y-m-d')]);
    }
}
