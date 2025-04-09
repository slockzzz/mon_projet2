<?php
class Validator {
    public function getTomorrowDate() {
        $tomorrow = new DateTime();
        $tomorrow->modify('+1 day');
        return json_encode(['date' => $tomorrow->format('Y-m-d')]);
    }
}
