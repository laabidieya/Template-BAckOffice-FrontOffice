<?php
include_once 'C:/XAMPP/htdocs/TravelBooking/Model/TravelOffer.php';

class TravelOfferController {
    public function showTravelOffer($offer) {
        if ($offer instanceof TravelOffer) {
            $offer->show();
        } else {
            echo "Erreur : L'objet n'est pas une instance de TravelOffer.";
        }
    }
}
?>


