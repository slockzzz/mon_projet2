<?php
use PHPUnit\Framework\TestCase;

final class MesDatesTest extends TestCase
{
    public function testDateTomorrowJson()
    {
        // Supposons que la classe Validator a une méthode qui retourne un JSON avec la date de demain.
        $validator = new Validator();

        // On suppose que la méthode `getTomorrowDate()` dans Validator retourne la date de demain au format JSON.
        $result = $validator->getTomorrowDate();
        
        // Vérifie que le résultat est bien un JSON valide
        $this->assertJson($result, 'Le résultat n\'est pas un JSON valide.');
        
        // Décode le JSON et vérifie que la date est bien celle de demain
        $data = json_decode($result, true);
        $tomorrow = (new DateTime())->modify('+1 day')->format('Y-m-d');
        
        // Vérifie que la date dans le JSON correspond à la date de demain
        $this->assertEquals($tomorrow, $data['date'], 'La date n\'est pas celle de demain.');
    }
}
