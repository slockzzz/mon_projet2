<?php

// Inclut le fichier Validator.php (ajuste le chemin selon ton organisation)
require_once __DIR__ . '/../src/Validator.php';  // Ici, __DIR__ fait référence au dossier contenant le fichier MesDatesTest.php

use PHPUnit\Framework\TestCase;

final class MesDatesTest extends TestCase
{
    public function testDateTomorrowJson()
    {
        $validator = new Validator();  // Crée une instance de la classe Validator
        $result = $validator->getTomorrowDate();  // Appelle la méthode qui retourne la date de demain en JSON
        
        // Vérifie que le résultat est bien un JSON
        $this->assertJson($result, 'Le résultat n\'est pas un JSON valide.');
        
        // Décode le JSON pour vérifier la date
        $data = json_decode($result, true);  
        $tomorrow = (new DateTime())->modify('+1 day')->format('Y-m-d');  // Calcule la date de demain
        
        // Vérifie que la date renvoyée par le JSON est bien celle de demain
        $this->assertEquals($tomorrow, $data['date'], 'La date n\'est pas celle de demain.');
    }
}
